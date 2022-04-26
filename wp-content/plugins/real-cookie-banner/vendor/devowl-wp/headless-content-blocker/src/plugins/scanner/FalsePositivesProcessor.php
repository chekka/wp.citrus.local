<?php

namespace DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\plugins\scanner;

use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\Constants;
/**
 * Put in a list of `ScanEntry`'s and sort out false-positives and deduplicate. Keep
 * in mind, that this processor can also touch your `ScanEntry` properties as well!
 */
class FalsePositivesProcessor {
    private $blockableScanner;
    private $entries;
    /**
     * C'tor.
     *
     * @param BlockableScanner $blockableScanner
     * @param ScanEntry[] $entries
     * @codeCoverageIgnore
     */
    public function __construct($blockableScanner, $entries) {
        $this->blockableScanner = $blockableScanner;
        $this->entries = $entries;
    }
    /**
     * Prepare the passed results and do some optimizations on them (e.g. remove duplicates).
     */
    public function process() {
        $this->convertPresetsWithNonMatchingMustGroupsToExternalUrl();
        $this->deduplicate();
        $this->convertExternalUrlsCoveredByPreset();
        $this->convertStandaloneLinkRelPresetToExternalUrl();
        return $this->getEntries();
    }
    /**
     * Deduplicate coexisting presets. Examples:
     *
     * - CF7 with reCaptcha over Google reCaptcha
     * - MonsterInsights > Google Analytics (`extended`)
     */
    public function deduplicate() {
        $removeByIdentifier = [];
        foreach ($this->entries as $key => $value) {
            $foundBetterPreset = $this->alreadyExistsInOtherFoundPreset($value);
            if ($foundBetterPreset !== \false) {
                unset($this->entries[$key]);
                continue;
            }
            // Scenario: MonsterInsights > Google Analytics
            $blockable = $value->blockable ?? null;
            if (\is_null($blockable)) {
                continue;
            }
            $extended = $blockable->getExtended();
            if (!\is_null($extended)) {
                $removeByIdentifier[] = $extended;
                continue;
            }
        }
        foreach ($this->entries as $key => $value) {
            if (\in_array($value->preset, $removeByIdentifier, \true)) {
                unset($this->entries[$key]);
            }
        }
        // Reset indexes
        $this->entries = \array_values($this->entries);
    }
    /**
     * Remove all entries when there is not a scan entry with the needed host and convert it to an external URL.
     */
    public function convertPresetsWithNonMatchingMustGroupsToExternalUrl() {
        $remove = [];
        foreach ($this->entries as $key => $scanEntry) {
            if (!isset($scanEntry->preset)) {
                continue;
            }
            $blockable = $scanEntry->blockable ?? null;
            if (\is_null($blockable)) {
                continue;
            }
            // Collect all found host expressions for this preset
            $foundExpressions = [];
            foreach ($this->entries as $anotherEntry) {
                if ($anotherEntry->preset === $scanEntry->preset) {
                    foreach ($anotherEntry->expressions as $foundExpression) {
                        if (!empty($scanEntry->blocked_url)) {
                            // Exclude found expressions when it does not match with query validation
                            $hostScanOptions = $blockable->getScanOptionsForHostExpression($foundExpression);
                            if (
                                $hostScanOptions !== null &&
                                !$hostScanOptions->urlMatchesQueryArgumentValidations($scanEntry->blocked_url)
                            ) {
                                continue;
                            }
                        }
                        $foundExpressions[] = $foundExpression;
                    }
                }
            }
            if (!$blockable->foundExpressionsMatchMust($foundExpressions, $scanEntry)) {
                if (
                    !empty($scanEntry->blocked_url) &&
                    $this->blockableScanner->isNotAnExcludedUrl($scanEntry->blocked_url)
                ) {
                    $scanEntry->preset = '';
                } else {
                    $remove[] = $scanEntry;
                }
            }
        }
        foreach ($this->entries as $key => $value) {
            if (\in_array($value, $remove, \true)) {
                unset($this->entries[$key]);
            }
        }
        // Reset indexes
        $this->entries = \array_values($this->entries);
    }
    /**
     * Convert external URLs which got covered by a preset. When is this the case? When using a
     * `SelectorSyntaxBlocker` with e.g. `link[href=""]` (for example WordPress emojis).
     *
     * @param ScanEntry[] $entries The entries to check, defaults to current instance entries
     */
    public function convertExternalUrlsCoveredByPreset($entries = null) {
        // Remove all not-found presets as we want to only remove by found preset
        $foundPresetIds = \array_unique(\array_column($this->entries, 'preset'));
        $contentBlocker = $this->blockableScanner->getHeadlessContentBlocker();
        $previousBlockables = $contentBlocker->getBlockables();
        $contentBlocker->setBlockables(
            \array_filter($previousBlockables, function ($blockable) use ($foundPresetIds) {
                if (
                    $blockable instanceof
                    \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\plugins\scanner\ScannableBlockable
                ) {
                    return \in_array($blockable->getIdentifier(), $foundPresetIds, \true);
                }
                return \true;
            })
        );
        foreach ($this->entries as $entry) {
            if ($entries !== null && !\in_array($entry, $entries, \true)) {
                continue;
            }
            $markup = $entry->markup;
            if ($markup !== null && !empty($entry->tag) && !empty($entry->blocked_url) && empty($entry->preset)) {
                $markup = $contentBlocker->modifyAny($markup->getContent());
                if (
                    \preg_match(
                        \sprintf(
                            '/%s="([^"]+)"/m',
                            \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\Constants::HTML_ATTRIBUTE_BLOCKER_ID
                        ),
                        $markup,
                        $consentIdMatches
                    )
                ) {
                    $entry->preset = $consentIdMatches[1];
                }
            }
        }
        $contentBlocker->setBlockables($previousBlockables);
        // Reset indexes
        $this->entries = \array_values($this->entries);
    }
    /**
     * Convert a found `link[rel="preconnect|dns-prefetch"]` within a preset and stands alone within this preset
     * to an external URL as a DNS-prefetch and preconnect **must** be loaded in conjunction with another script.
     */
    public function convertStandaloneLinkRelPresetToExternalUrl() {
        /**
         * Scan entries.
         *
         * @var ScanEntry[]
         */
        $convert = [];
        foreach ($this->entries as $key => $scanEntry) {
            $markup = $scanEntry->markup;
            if (!isset($scanEntry->preset) || \in_array($scanEntry->preset, $convert, \true) || !isset($markup)) {
                continue;
            }
            $markup = $markup->getContent();
            if (
                $scanEntry->tag === 'link' &&
                (\strpos($markup, 'dns-prefetch') !== \false || \strpos($markup, 'preconnect') !== \false)
            ) {
                // Collect all found scan entries for this preset
                $foundEntriesForThisPreset = [$scanEntry];
                foreach ($this->entries as $anotherEntry) {
                    if ($anotherEntry !== $scanEntry && $anotherEntry->preset === $scanEntry->preset) {
                        $foundEntriesForThisPreset[] = $anotherEntry;
                    }
                }
                if (\count($foundEntriesForThisPreset) === 1) {
                    $convert[] = $scanEntry;
                }
            }
        }
        if (\count($convert)) {
            $added = [];
            foreach ($convert as $convertScanEntry) {
                $key = \array_search($convertScanEntry, $this->entries, \true);
                $this->entries[] = $added[] = $entry = new \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\plugins\scanner\ScanEntry();
                $entry->blocked_url = $convertScanEntry->blocked_url;
                $entry->tag = $convertScanEntry->tag;
                $entry->markup = $convertScanEntry->markup;
                unset($this->entries[$key]);
            }
            // Check again for the external URLs as they can indeed have links covered by other presets
            $this->convertExternalUrlsCoveredByPreset($added);
        }
    }
    /**
     * Check if a given preset already exists in another scan result.
     *
     * @param ScanEntry $scanEntry
     * @return false|ScanEntry The found entry which better suits this preset
     */
    protected function alreadyExistsInOtherFoundPreset($scanEntry) {
        $blockable = $scanEntry->blockable ?? null;
        if (\is_null($blockable)) {
            return \false;
        }
        foreach ($this->entries as $existing) {
            if ($existing !== $scanEntry && isset($existing->blockable) && !empty($existing->preset)) {
                $currentHosts = $blockable->getOriginalHosts();
                $existingHosts = $existing->blockable->getOriginalHosts();
                if (\count($existingHosts) > \count($currentHosts)) {
                    // Only compare when our opposite scan entry has more hosts to block
                    // This avoids to alert false-positives when using `extends` middleware
                    $foundSame = 0;
                    foreach ($currentHosts as $currentHost) {
                        if (\in_array($currentHost, $existingHosts, \true)) {
                            $foundSame++;
                        }
                    }
                    if ($foundSame === \count($currentHosts)) {
                        return $existing;
                    }
                }
            }
        }
        return \false;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getEntries() {
        return $this->entries;
    }
}
