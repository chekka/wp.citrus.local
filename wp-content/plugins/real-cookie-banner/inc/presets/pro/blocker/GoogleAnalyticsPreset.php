<?php

namespace DevOwl\RealCookieBanner\presets\pro\blocker;

use DevOwl\RealCookieBanner\Core;
use DevOwl\RealCookieBanner\presets\pro\GoogleAnalyticsPreset as PresetsGoogleAnalyticsPreset;
use DevOwl\RealCookieBanner\presets\AbstractBlockerPreset;
use DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Google Analytics (Universal Analytics) blocker preset.
 */
class GoogleAnalyticsPreset extends \DevOwl\RealCookieBanner\presets\AbstractBlockerPreset {
    const IDENTIFIER = \DevOwl\RealCookieBanner\presets\pro\GoogleAnalyticsPreset::IDENTIFIER;
    const VERSION = 1;
    const HOSTS_GROUP_PROPERTY_ID_NAME = 'property-id';
    const HOSTS_GROUP_SCRIPT_NAME = 'script';
    const HOSTS_GROUP_SCRIPT = [
        [
            '*google-analytics.com/analytics.js*',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    self::HOSTS_GROUP_SCRIPT_NAME
            ]
        ],
        [
            '*google-analytics.com/ga.js*',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    self::HOSTS_GROUP_SCRIPT_NAME
            ]
        ],
        // Comp: RankMath
        [
            'script[id="google_gtagjs"]',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    self::HOSTS_GROUP_SCRIPT_NAME
            ]
        ]
    ];
    const HOSTS_GROUP_SCRIPT_PROPERTY = [
        [
            '"UA-*"',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    self::HOSTS_GROUP_PROPERTY_ID_NAME
            ]
        ],
        [
            "'UA-*'",
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                    self::HOSTS_GROUP_PROPERTY_ID_NAME
            ]
        ]
    ];
    /**
     * The `/collect` route of GA is usually only used with JavaScript, but it could be in HTML, too,
     * due to the fact it can be used with `<noscript`. It resolves both logical must groups as it can
     * be standalone (e.g. PixelYourSite integration).
     */
    const HOSTS_GROUP_COLLECTOR = [
        [
            '*google-analytics.com/collect*',
            [
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST => [
                    self::HOSTS_GROUP_SCRIPT_NAME,
                    self::HOSTS_GROUP_PROPERTY_ID_NAME
                ],
                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::QUERY_ARGS => [
                    'tid' => ['regexp' => '/^UA-/']
                ]
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
            'description' => 'Universal Analytics',
            'attributes' => [
                'hosts' => \array_merge(
                    self::HOSTS_GROUP_SCRIPT_PROPERTY,
                    [
                        [
                            'ga(',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                                    self::HOSTS_GROUP_PROPERTY_ID_NAME
                            ]
                        ],
                        [
                            'gtag(',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                                    self::HOSTS_GROUP_PROPERTY_ID_NAME
                            ]
                        ]
                    ],
                    self::HOSTS_GROUP_SCRIPT,
                    self::HOSTS_GROUP_COLLECTOR,
                    [
                        [
                            '*googletagmanager.com/gtag/js?*',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST =>
                                    self::HOSTS_GROUP_SCRIPT_NAME,
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::QUERY_ARGS => [
                                    'id' => ['optional' => \true, 'regexp' => '/^UA-/']
                                ]
                            ]
                        ]
                    ],
                    [
                        [
                            '*googletagmanager.com/gtag/js?*',
                            [
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::LOGICAL_MUST => [
                                    self::HOSTS_GROUP_SCRIPT_NAME,
                                    self::HOSTS_GROUP_PROPERTY_ID_NAME
                                ],
                                \DevOwl\RealCookieBanner\presets\middleware\BlockerHostsOptionsMiddleware::QUERY_ARGS => [
                                    'id' => ['optional' => \false, 'regexp' => '/^UA-/']
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
