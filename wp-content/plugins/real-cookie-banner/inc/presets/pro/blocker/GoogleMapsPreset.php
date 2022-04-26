<?php

namespace DevOwl\RealCookieBanner\presets\pro\blocker;

use DevOwl\RealCookieBanner\Core;
use DevOwl\RealCookieBanner\presets\pro\GoogleMapsPreset as PresetsGoogleMapsPreset;
use DevOwl\RealCookieBanner\presets\AbstractBlockerPreset;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Google Maps blocker preset.
 */
class GoogleMapsPreset extends \DevOwl\RealCookieBanner\presets\AbstractBlockerPreset {
    const IDENTIFIER = \DevOwl\RealCookieBanner\presets\pro\GoogleMapsPreset::IDENTIFIER;
    const VERSION = 4;
    // Documented in AbstractPreset
    public function common() {
        $name = 'Google Maps';
        return [
            'id' => self::IDENTIFIER,
            'version' => self::VERSION,
            'name' => $name,
            'attributes' => [
                'hosts' => [
                    '*maps.google.com*',
                    '*google.*/maps*',
                    '*maps.googleapis.com*',
                    '*maps.gstatic.com*',
                    '*google.maps.Map(*',
                    // [Plugin Comp] https://wordpress.org/plugins/wp-google-maps/
                    'div[data-settings*="wpgmza_"]',
                    '*/wp-content/plugins/wp-google-maps/*',
                    '*/wp-content/plugins/wp-google-maps-pro/*',
                    // [Plugin Comp] https://wordpress.org/plugins/google-maps-easy/
                    'div[class="gmp_map_opts"]',
                    // [Plugin Comp] https://www.elegantthemes.com/gallery/divi/
                    'div[class="et_pb_map"]',
                    // [Plugin Comp] https://undsgn.com/uncode/
                    'div[class*="uncode-gmaps-widget"]',
                    '*uncode.gmaps*.js*',
                    // [Plugin Comp] https://www.dynamic.ooo/widget/dynamic-google-maps/
                    '*dynamic-google-maps.js*',
                    '*@googlemaps/markerclustererplus/*',
                    'div[data-widget_type*="dyncontel-acf-google-maps"]',
                    // [Plugin Comp] https://wordpress.org/plugins/wp-google-map-plugin/
                    '*/wp-content/plugins/wp-google-map-gold/assets/js/*',
                    '*/wp-content/plugins/wp-google-map-plugin/assets/js/*',
                    // [Plugin Comp] https://www.wpgmaps.com/gold-add-on/
                    '*/wp-content/plugins/wp-google-maps-gold/js/*',
                    '.data("wpgmp_maps")',
                    'div[class*="wpgmp_map_container"]',
                    // [Plugin Comp] https://themify.me/addons/maps-pro
                    'div[data-map-provider="google"]',
                    'div[class*="module-maps-pro"]',
                    // [Plugin Comp] https://wordpress.org/plugins/wp-store-locator/
                    'div[id="wpsl-wrap"]',
                    '*/wp-content/plugins/wp-store-locator/js/*',
                    // [Plugin Comp] https://themeforest.net/item/avada-responsive-multipurpose-theme/2833226
                    'script[id="google-maps-infobox-js"]',
                    '*google.maps.event*',
                    'div[class*="fusion-google-map"]',
                    // [Plugin Comp] https://wordpress.org/plugins/extensions-for-elementor/
                    '*/wp-content/plugins/extensions-for-elementor/assets/lib/gmap3/gmap3*',
                    'div[class*="elementor-widget-ee-mb-google-map"]',
                    // [Plugin Comp] https://wordpress.org/plugins/modern-events-calendar-lite/
                    'div[class*="mec-events-meta-group-gmap"]',
                    '*/wp-content/plugins/modern-events-calendar/assets/packages/richmarker/richmarker*',
                    '*/wp-content/plugins/modern-events-calendar/assets/js/googlemap*',
                    ".mecGoogleMaps('",
                    // [Plugin Comp] https://wordpress.org/plugins/elementor/
                    'div[class*="google_map_shortcode_wrapper"]',
                    // [Plugin Comp] https://themeforest.net/item/wp-residence-real-estate-wordpress-theme/7896392
                    '*/wp-content/themes/wpresidence/js/google_js/google_map_code_listing*',
                    '*/wp-content/themes/wpresidence/js/google_js/google_map_code.js*',
                    '*/wp-content/themes/wpresidence/js/infobox*',
                    // [Plugin Comp] https://premiumaddons.com/
                    'div[class*="elementor-widget-premium-addon-maps"]',
                    'div[class*="premium-maps-container"]',
                    '*/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-maps.min.js*',
                    // [Plugin Comp] http://arktheme.com/
                    'section[class*="ff-map"]',
                    '*/wp-content/themes/ark/assets/plugins/google-map*',
                    '*/wp-content/themes/ark/assets/scripts/components/google-map*',
                    // [Plugin Comp] https://ultimateelementor.com/
                    '*/wp-content/plugins/ultimate-elementor/assets/min-js/uael-google-map*',
                    'div[class*="elementor-widget-uael-google-map"]',
                    // [Plugin Comp] https://wpforms.com/how-to-display-a-map-with-your-wordpress-contact-form/
                    'div[class*="wpforms-geolocation-map"]',
                    '*/wp-content/plugins/wpforms-geolocation/assets/js/wpforms-geolocation-google-api*',
                    // [Plugin Comp] https://www.wp-immomakler.de/
                    'iframe[src*="?callback=map-iframe"]',
                    // [Plugin Comp] https://codecanyon.net/item/progress-map-wordpress-plugin/5581719
                    '*/wp-content/plugins/codespacing-progress-map/assets/js/*',
                    'div[class*="codespacing_progress_map_area"]',
                    // [Plugin Comp] https://qodeinteractive.com/wordpress-theme/bridge-creative-multi-purpose-wordpress-theme/
                    'div[class*="qode_google_map"]',
                    // [Plugin Comp] WP Grid Builder
                    '*wp-content/plugins/wp-grid-builder-map-facet/assets/js*',
                    'div[class*="wpgb-map-facet"]',
                    // [Plugin Comp] https://themeforest.net/item/mylisting-directory-listing-wordpress-theme/20593226
                    '*wp-content/themes/my-listing/assets/dist/maps/google-maps/*',
                    '*wp-content/themes/my-listing/assets/dist/explore*',
                    'div[class*="c27-map"]',
                    'div[class*="elementor-widget-case27-explore-widget"]',
                    // [Plugin Comp] https://themeforest.net/item/salient-responsive-multipurpose-theme/4363266
                    '*wp-content/themes/salient/js/build/map*',
                    'div[class*="nectar-google-map"]',
                    // [Plugin Comp] https://heroplugins.com/product/maps/
                    'div[class="hmapsprem_map_container"]',
                    '*/wp-content/plugins/hmapsprem/assets/js/frontend_script.js*',
                    // [Plugin Comp] Advanced Maps (Jet Elements)
                    'div[class*="jet-map"]',
                    // [Plugin Comp] https://gravitygeolocation.com/
                    'div[class*="ginput_container_gfgeo_google_map"]'
                ]
            ],
            'logoFile' => \DevOwl\RealCookieBanner\Core::getInstance()->getBaseAssetsUrl('logos/google-maps.png')
        ];
    }
}
