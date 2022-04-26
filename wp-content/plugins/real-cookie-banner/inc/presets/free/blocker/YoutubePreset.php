<?php

namespace DevOwl\RealCookieBanner\presets\free\blocker;

use DevOwl\RealCookieBanner\Core;
use DevOwl\RealCookieBanner\presets\AbstractBlockerPreset;
use DevOwl\RealCookieBanner\presets\free\YoutubePreset as FreeYoutubePreset;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Youtube blocker preset.
 */
class YoutubePreset extends \DevOwl\RealCookieBanner\presets\AbstractBlockerPreset {
    const IDENTIFIER = \DevOwl\RealCookieBanner\presets\free\YoutubePreset::IDENTIFIER;
    const VERSION = 2;
    // Documented in AbstractPreset
    public function common() {
        $name = 'YouTube';
        return [
            'id' => self::IDENTIFIER,
            'version' => self::VERSION,
            'name' => $name,
            'logoFile' => \DevOwl\RealCookieBanner\Core::getInstance()->getBaseAssetsUrl('logos/youtube.png'),
            'attributes' => [
                'name' => $name,
                'hosts' => [
                    '*youtube.com*',
                    '*youtu.be*',
                    '*youtube-nocookie.com*',
                    '*ytimg.com*',
                    '*youtube.com/subscribe_embed*',
                    // [Plugin Comp] Elementor
                    'div[data-settings*="youtube_url"]',
                    // [Plugin Comp] Ultimate Addons for Elementor
                    'script[id="uael-video-subscribe-js"]',
                    'div[class*="g-ytsubscribe"]',
                    // [Plugin Comp] Premium Addons for Elementor
                    'div[class*="elementor-widget-premium-addon-video-box"][data-settings*="youtube"]',
                    // [Plugin Comp] tagDiv Composer
                    'div[class*="td_wrapper_playlist_player_youtube"]',
                    // [Plugin Comp] https://wordpress.org/plugins/wp-youtube-lyte/
                    '*wp-content/plugins/wp-youtube-lyte/lyte/lyte-min.js*',
                    // [Plugin Comp] https://wordpress.org/plugins/youtube-embed-plus/
                    '*wp-content/plugins/youtube-embed-plus/scripts/*',
                    '*wp-content/plugins/youtube-embed-plus-pro/scripts/*',
                    'div[id^="epyt_gallery"]',
                    // [Plugin Comp] Thrive Visual Editor
                    'div[class*="tcb-yt-bg"]',
                    // [Plugin Comp] https://wordpress.org/plugins/wp-video-lightbox/
                    'a[href*="youtube.com"][rel="wp-video-lightbox"]'
                ],
                'cookies' => [\DevOwl\RealCookieBanner\presets\free\YoutubePreset::IDENTIFIER],
                'visual' => \true,
                'visualType' => 'hero',
                'visualContentType' => 'video-player'
            ]
        ];
    }
}
