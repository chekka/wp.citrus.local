<?php

namespace DevOwl\RealCookieBanner\scanner;

use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AbstractBlockable;
use DevOwl\RealCookieBanner\base\UtilsProvider;
use DevOwl\RealCookieBanner\settings\Blocker;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Describe a blockable item by a content blocker preset.
 */
class PresetBlockable extends \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AbstractBlockable {
    use UtilsProvider;
    private $identifier;
    private $originalHosts;
    private $extended;
    /**
     * An instance of ourself with only the must have expressions.
     *
     * @var HostScanOptions[]
     */
    private $scanOptions = [];
    /**
     * A lazy-loaded map of must host expressions grouped by `must`.
     *
     * @var string[][]
     */
    private $mustGrouped;
    /**
     * C'tor.
     *
     * Example array for `$scanOptions`:
     *
     * ```
     * [
     *     ["*google.com/recaptcha*", [
     *         // This is necessary for the scanner: If a host is marked as must, the URL must exist when scanning
     *         // In this case `recaptcha` is the "must-group", that means one of the hosts must be available within the group
     *         'must' => 'script', // can be another string if you want to group multiple hosts with OR in a group
     *         'queryArgs' => [
     *              'id' => ['optional' => true, 'regexp' => '^UA']
     *         ]
     *     ]]
     * ]
     * ```
     *
     * @param string $identifier
     * @param string[] $hosts
     * @param string $extended The parent extended preset identifier
     * @param HostScanOptions[]|array[] $scanOptions A list of host expressions which hold different scan options; you can also pass
     *                                               an array which gets automatically converted to `HostScanOptions`.
     * @codeCoverageIgnore
     */
    public function __construct($identifier, $hosts, $extended = null, $scanOptions = []) {
        $this->identifier = $identifier;
        $this->originalHosts = $hosts;
        $this->extended = $extended;
        if (\count($scanOptions) > 0) {
            foreach ($scanOptions as $scanOption) {
                if (\is_array($scanOption)) {
                    list($expression, $options) = $scanOption;
                    $scanOption = new \DevOwl\RealCookieBanner\scanner\HostScanOptions(
                        $expression,
                        $options['must'] ?? null,
                        $options['queryArgs'] ?? []
                    );
                }
                $this->scanOptions[$scanOption->getHostExpression()] = $scanOption;
            }
        }
        $this->appendFromStringArray($hosts);
    }
    // Documented in AbstractBlockable
    public function getBlockerId() {
        // This is only used for scanning purposes!
        return null;
    }
    // Documented in AbstractBlockable
    public function getRequiredIds() {
        return [];
    }
    // Documented in AbstractBlockable
    public function getCriteria() {
        // The scanner does currently only support usual cookie presets
        return \DevOwl\RealCookieBanner\settings\Blocker::CRITERIA_COOKIES;
    }
    /**
     * Check if a set of expressions matches our `must` scan options.
     *
     * @param string[] $expressions
     */
    public function foundExpressionsMatchMust($expressions) {
        foreach ($this->getMustGrouped() as $mustGroup) {
            // Check if one of our must's exists in found expressions
            $mustHostExists = !empty(\array_intersect($mustGroup, $expressions));
            if (!$mustHostExists) {
                return \false;
            }
        }
        return \true;
    }
    /**
     * A lazy-loaded map of must host expressions grouped by `must`.
     */
    public function getMustGrouped() {
        if ($this->mustGrouped === null) {
            $result = [];
            foreach ($this->scanOptions as $scanOption) {
                $must = $scanOption->getMust();
                if (!isset($result[$must])) {
                    $result[$must] = [];
                }
                $result[$must][] = $scanOption->getHostExpression();
            }
            $this->mustGrouped = $result;
        }
        return $this->mustGrouped;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getIdentifier() {
        return $this->identifier;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getOriginalHosts() {
        return $this->originalHosts;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getExtended() {
        return $this->extended;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getScanOptions() {
        return $this->scanOptions;
    }
    /**
     * Getter.
     *
     * @param string $expression
     * @codeCoverageIgnore
     */
    public function getScanOptionsForHostExpression($expression) {
        return $this->getScanOptions()[$expression] ?? null;
    }
}
