<?php

namespace DevOwl\RealCookieBanner\view\checklist;

use DevOwl\RealCookieBanner\base\UtilsProvider;
use DevOwl\RealCookieBanner\Core;
use DevOwl\RealCookieBanner\DemoEnvironment;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Is the plugin license activated?
 */
class License extends \DevOwl\RealCookieBanner\view\checklist\AbstractChecklistItem {
    use UtilsProvider;
    const IDENTIFIER = 'license';
    // Documented in AbstractChecklistItem
    public function isChecked() {
        if (\DevOwl\RealCookieBanner\DemoEnvironment::getInstance()->isDemoEnv()) {
            return \true;
        }
        $updater = \DevOwl\RealCookieBanner\Core::getInstance()
            ->getRpmInitiator()
            ->getPluginUpdater();
        return $updater->isLicensed() || $updater->isPartialLicensed();
    }
    // Documented in AbstractChecklistItem
    public function getTitle() {
        return __('Activate your license', RCB_TD);
    }
    // Documented in AbstractChecklistItem
    public function getDescription() {
        return __(
            'Only users with an activated license get updates and are always up-to-date on legal changes.',
            RCB_TD
        );
    }
    // Documented in AbstractChecklistItem
    public function getLink() {
        return '#/licensing';
    }
    // Documented in AbstractChecklistItem
    public function getLinkText() {
        return __('Activate now', RCB_TD);
    }
}
