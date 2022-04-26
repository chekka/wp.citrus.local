<?php

namespace DevOwl\RealCookieBanner\presets\middleware;

use DevOwl\RealCookieBanner\presets\AbstractBlockerPreset;
use DevOwl\RealCookieBanner\presets\AbstractCookiePreset;
use WP_Post;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Middleware that adds a `scanOptions` attribute to the blocker metadata from `hosts` options.
 *
 * If you are using this in conjunction with an `extends` middleware, make sure to add this afterwards!
 *
 * See `HostScanOptions` for more information.
 */
class BlockerHostsOptionsMiddleware {
    const LOGICAL_MUST = 'must';
    const QUERY_ARGS = 'queryArgs';
    /**
     * See class description.
     *
     * @param array $preset
     * @param AbstractBlockerPreset|AbstractCookiePreset $unused0
     * @param WP_Post[] $unused1
     * @param WP_Post[] $unused2
     * @param array $result
     */
    public function middleware(&$preset, $unused0, $unused1, $unused2, &$result) {
        if (isset($preset['attributes'], $preset['attributes']['hosts'])) {
            $scanOptions = [];
            foreach ($preset['attributes']['hosts'] as $key => $host) {
                if (\is_array($host)) {
                    $scanOptions[] = $host;
                    $preset['attributes']['hosts'][$key] = $host[0];
                }
            }
            if (\count($scanOptions) > 0) {
                $preset['scanOptions'] = $scanOptions;
            }
            // Make `hosts` always available in metadata (needed for scanner)
            $preset['hosts'] = $preset['attributes']['hosts'];
        }
        return $preset;
    }
}
