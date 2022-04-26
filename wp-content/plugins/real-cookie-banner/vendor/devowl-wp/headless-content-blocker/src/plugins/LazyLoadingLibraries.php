<?php

namespace DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\plugins;

use DevOwl\RealCookieBanner\Vendor\DevOwl\FastHtmlTag\finder\match\AbstractMatch;
use DevOwl\RealCookieBanner\Vendor\DevOwl\FastHtmlTag\finder\match\TagAttributeMatch;
use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AbstractPlugin;
use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AttributesHelper;
use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\matcher\AbstractMatcher;
use DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\matcher\TagAttributeMatcher;
/**
 * Compatibility with lazy loading libraries like `lazysizes`.
 *
 * @see https://github.com/aFarkas/lazysizes
 */
class LazyLoadingLibraries extends \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AbstractPlugin {
    const KNOWN_LAZY_LOADED_CLASSES = ['lazyload', 'lazy', 'lazy-hidden'];
    /**
     * See `AbstractPlugin`.
     *
     * @param BlockedResult $result
     * @param AbstractMatcher $matcher
     * @param AbstractMatch $match
     */
    public function blockedMatch($result, $matcher, $match) {
        if (
            $matcher instanceof
            \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\matcher\TagAttributeMatcher
        ) {
            /**
             * Var.
             *
             * @var TagAttributeMatch
             */
            $match = $match;
            if ($match->hasAttribute('class')) {
                $transform = \DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\AttributesHelper::transformAttribute(
                    'class'
                );
                $originalClasses = $match->getAttribute('class');
                $classes = \explode(' ', $originalClasses);
                $foundCount = 0;
                foreach (self::KNOWN_LAZY_LOADED_CLASSES as $lazyLoadClass) {
                    $found = \array_search($lazyLoadClass, $classes, \true);
                    if ($found !== \false) {
                        // Remove from our class itself
                        unset($classes[$found]);
                        $foundCount++;
                    }
                }
                if ($foundCount > 0) {
                    $match->setAttribute($transform, $originalClasses);
                    if (\count($classes) > 0) {
                        $match->setAttribute('class', \join(' ', $classes));
                    } else {
                        $match->setAttribute('class', null);
                    }
                }
            }
        }
    }
}
