<?php

namespace DevOwl\RealCookieBanner\Vendor\Composer;

use DevOwl\RealCookieBanner\Vendor\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '934fab422208f9f841ae3c2653d6e8bb9f4b3887', 'name' => '__root__'), 'versions' => array('__root__' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '934fab422208f9f841ae3c2653d6e8bb9f4b3887'), 'cweagans/composer-configurable-plugin' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => '2df389bb1f13830fd95461d51f6eb52d02fc1c21'), 'cweagans/composer-patches' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '66ba00e9ff94ce5a3351811169d39acb9e16c53c'), 'devowl-wp/cache-invalidate' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => 'b48f8d96623c336cc28543dd23bf38c03fd15228'), 'devowl-wp/customize' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '2add04376e81a1674dc6e31e2c5aefc0931e6291'), 'devowl-wp/deliver-anonymous-asset' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => 'f5de4850f7c557b636f2297de08776d6af2b95bc'), 'devowl-wp/fast-html-tag' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '4117a0c1cd1d503e28eed5fb6fce4d8c203b0d44'), 'devowl-wp/freemium' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => 'a6f7fa5938b077d07d390d5a6729e1b48e0c178b'), 'devowl-wp/headless-content-blocker' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => 'c40a89809003f1ca3f3a3e491a0fbdf403531fcb'), 'devowl-wp/multilingual' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => 'c2268404fca153d6dad4b8223f8ae6c7b990563d'), 'devowl-wp/real-product-manager-wp-client' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '20cb702cfdf8371d48750463c30f8551c1753410'), 'devowl-wp/real-queue' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '4a1ee4be18ab4d54e7296d17aadf513317f0ef9b'), 'devowl-wp/real-utils' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '48f380da0e61910f07cecb52dc58cf8e24b8f5e1'), 'devowl-wp/tcf-vendor-list-normalize' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '2ea78ae25ad5c13e7ca56f01c58ebaecdf8390dc'), 'devowl-wp/utils' => array('pretty_version' => 'dev-wordpress', 'version' => 'dev-wordpress', 'aliases' => array(), 'reference' => '4f4a98962be8e2e5a3404e76233f744ca5346477'), 'maxmind-db/reader' => array('pretty_version' => 'v1.10.0', 'version' => '1.10.0.0', 'aliases' => array(), 'reference' => '07f84d969cfc527ce49388558a366ad376f1f35c'), 'mpratt/embera' => array('pretty_version' => '2.0.24', 'version' => '2.0.24.0', 'aliases' => array(), 'reference' => '997e7352af461f6c1b21757695971646c2b36933'), 'sabberworm/php-css-parser' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '39a5986d7b6cce8f2e2060e80c4c228b2d7ff0a9'), 'yahnis-elsts/plugin-update-checker' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(0 => '9999999-dev'), 'reference' => '0e869938e3528734bb48d280fb79652d0a98373c')));
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
