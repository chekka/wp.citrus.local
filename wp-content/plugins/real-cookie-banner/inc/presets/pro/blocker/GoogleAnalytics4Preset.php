<?php

namespace DevOwl\RealCookieBanner\presets\pro\blocker;

use DevOwl\RealCookieBanner\Core;
use DevOwl\RealCookieBanner\presets\pro\GoogleAnalytics4Preset as PresetsGoogleAnalytics4Preset;
use DevOwl\RealCookieBanner\presets\AbstractBlockerPreset;
use DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Google Analytics (V4) blocker preset.
 */
class GoogleAnalytics4Preset extends \DevOwl\RealCookieBanner\presets\AbstractBlockerPreset {
    const IDENTIFIER = \DevOwl\RealCookieBanner\presets\pro\GoogleAnalytics4Preset::IDENTIFIER;
    const VERSION = 1;
    const HOSTS_GROUP_SCRIPT_PROPERTY = [
        [
            '"G-*"',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    \DevOwl\RealCookieBanner\presets\pro\blocker\GoogleAnalyticsPreset::HOSTS_GROUP_PROPERTY_ID_NAME
            ]
        ],
        [
            "'G-*'",
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    \DevOwl\RealCookieBanner\presets\pro\blocker\GoogleAnalyticsPreset::HOSTS_GROUP_PROPERTY_ID_NAME
            ]
        ]
    ];
    // Documented in AbstractPreset
    public function common() {
        $name = 'Google Analytics';
        return [
            'id' => self::IDENTIFIER,
            'version' => self::VERSION,
            'name' => $name,
            'description' => 'Analytics 4',
            'attributes' => [
                'hosts' => \array_merge(
                    self::HOSTS_GROUP_SCRIPT_PROPERTY,
                    [
                        [
                            'gtag(',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                                    \DevOwl\RealCookieBanner\presets\pro\blocker\GoogleAnalyticsPreset::HOSTS_GROUP_PROPERTY_ID_NAME
                            ]
                        ]
                    ],
                    \DevOwl\RealCookieBanner\presets\pro\blocker\GoogleAnalyticsPreset::HOSTS_GROUP_SCRIPT,
                    [
                        [
                            '*googletagmanager.com/gtag/js?*',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                                    \DevOwl\RealCookieBanner\presets\pro\blocker\GoogleAnalyticsPreset::HOSTS_GROUP_SCRIPT_NAME,
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::QUERY_ARGS => [
                                    'id' => ['optional' => \true, 'regexp' => '/^G-/']
                                ]
                            ]
                        ]
                    ]
                )
            ],
            'logoFile' => \DevOwl\RealCookieBanner\Core::getInstance()->getBaseAssetsUrl('logos/google-analytics.png')
        ];
    }
}
