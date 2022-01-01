<?php

namespace DevOwl\RealCookieBanner\Vendor\Composer;

use DevOwl\RealCookieBanner\Vendor\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '91ca6a9189d15baca6fac00ada5735a90ed22bb6', 'name' => '__root__'), 'versions' => array('__root__' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '91ca6a9189d15baca6fac00ada5735a90ed22bb6'), 'cweagans/composer-configurable-plugin' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => '2df389bb1f13830fd95461d51f6eb52d02fc1c21'), 'cweagans/composer-patches' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '66ba00e9ff94ce5a3351811169d39acb9e16c53c'), 'devowl-wp/cache-invalidate' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => 'a30e1cc1b08f745f0a49427e74b30c2aa931771e'), 'devowl-wp/customize' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '0440971bf0554bc8935aef1fa4eb1c16e1d2cbe0'), 'devowl-wp/deliver-anonymous-asset' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '7a76625f59d5eb7ba13a5a62e034cbe63cbe2834'), 'devowl-wp/fast-html-tag' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '6fad15acb44f56bf5c3313713299fb86467bc913'), 'devowl-wp/freemium' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => 'f46163e56a6be9eace5a48ecd0c5c8d1680219a6'), 'devowl-wp/headless-content-blocker' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => 'e0e6e29745211400bc7a64dd414d414b1f227802'), 'devowl-wp/multilingual' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '8fb632660aab28c29076589cb0c2733eb5574183'), 'devowl-wp/real-product-manager-wp-client' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => 'f622da0b0b9d77b5ae0db4e38614fb8acf98b897'), 'devowl-wp/real-queue' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => 'e7cfd18fc47ee53fb0a7a765bce858effcd410e7'), 'devowl-wp/real-utils' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '8f35c9a3c7cc4a086422c95356b890212cbb8c65'), 'devowl-wp/tcf-vendor-list-normalize' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '601edc4441a6b3a6238a00d0a2989c2910255a99'), 'devowl-wp/utils' => array('pretty_version' => 'dev-perf/fast-html-tag', 'version' => 'dev-perf/fast-html-tag', 'aliases' => array(), 'reference' => '3b2eee5934e5ce0d94cdb5f4736259d448fe8531'), 'maxmind-db/reader' => array('pretty_version' => 'v1.10.0', 'version' => '1.10.0.0', 'aliases' => array(), 'reference' => '07f84d969cfc527ce49388558a366ad376f1f35c'), 'sabberworm/php-css-parser' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '2cce20571099cca43c88469d422ca3d45d5dc547'), 'yahnis-elsts/plugin-update-checker' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '0e869938e3528734bb48d280fb79652d0a98373c')));
    public static function getInstalledPackages()
    {
        return \array_keys(self::$installed['versions']);
    }
    public static function isInstalled($packageName)
    {
        return isset(self::$installed['versions'][$packageName]);
    }
    public static function satisfies(\DevOwl\RealCookieBanner\Vendor\Composer\Semver\VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));
        return $provided->matches($constraint);
    }
    public static function getVersionRanges($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        $ranges = array();
        if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            $ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
        }
        if (\array_key_exists('aliases', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
        }
        if (\array_key_exists('replaced', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
        }
        if (\array_key_exists('provided', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
        }
        return \implode(' || ', $ranges);
    }
    public static function getVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['version'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['version'];
    }
    public static function getPrettyVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['pretty_version'];
    }
    public static function getReference($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['reference'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['reference'];
    }
    public static function getRootPackage()
    {
        return self::$installed['root'];
    }
    public static function getRawData()
    {
        return self::$installed;
    }
    public static function reload($data)
    {
        self::$installed = $data;
    }
}
