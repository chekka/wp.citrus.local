<?php

namespace DevOwl\RealCookieBanner\Vendor\DevOwl\HeadlessContentBlocker\plugins\scanner;

/**
 * Describe scan options for a specific host expression. For example, if a host
 * can only be scanned within a group (e.g. two scripts are needed to match the scannable
 * item).
 */
class HostScanOptions {
    private $hostExpression;
    /**
     * Group name. An expression could also resolve multiple groups.
     *
     * @var null|string[]
     */
    private $must;
    /**
     * A list of query argument validations. Example:
     *
     * ```
     * [
     *      'id' => ['optional' => true, 'regexp' => '/^UA-/']
     * ]
     * ```
     */
    private $queryArgs;
    /**
     * C'tor.
     *
     * @param string $hostExpression
     * @param string|string[] $must
     * @param array[] $queryArgs
     * @codeCoverageIgnore
     */
    public function __construct($hostExpression, $must = null, $queryArgs = []) {
        $this->hostExpression = $hostExpression;
        $this->must = $must === null ? null : (\is_array($must) ? $must : [$must]);
        $this->queryArgs = $queryArgs;
    }
    /**
     * Check if a given URL matches our query argument validations.
     *
     * @param string $url
     */
    public function urlMatchesQueryArgumentValidations($url) {
        // E.g. URLs without Scheme
        if (\filter_var(set_url_scheme($url, 'http'), \FILTER_VALIDATE_URL)) {
            $query = $this->parseUrlQueryEncodedSafe($url);
            // Remove empty values, so they get considered as null
            foreach ($query as $key => $value) {
                if (empty($value)) {
                    $query[$key] = null;
                }
            }
            foreach ($this->queryArgs as $queryKey => $queryValidation) {
                $isOptional = $queryValidation['optional'] ?? \false;
                $queryValue = $query[$queryKey] ?? null;
                if (!$isOptional && $queryValue === null) {
                    return \false;
                } elseif ($isOptional && $queryValue === null) {
                    continue;
                }
                if ($queryValue !== null) {
                    $regexp = $queryValidation['regexp'] ?? null;
                    if ($regexp !== null && !\preg_match($regexp, $queryValue)) {
                        return \false;
                    }
                }
            }
            return \true;
        }
        return \false;
    }
    /**
     * In some cases, a URL could contain `&#038;` instead of `&`. This function returns the
     * query string decoded from an URL whether it is using `&` or `&#038;`.
     *
     * @param string $url
     */
    protected function parseUrlQueryEncodedSafe($url) {
        $queryString = \parse_url($url, \PHP_URL_QUERY);
        $query = [];
        if (!empty($queryString)) {
            $unsafeContainsString = \sprintf('?%s#038;', $queryString);
            if (\strpos($url, $unsafeContainsString) !== \false) {
                return $this->parseUrlQueryEncodedSafe(wp_specialchars_decode($url));
            } else {
                \parse_str($queryString, $query);
            }
        }
        return $query;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getHostExpression() {
        return $this->hostExpression;
    }
    /**
     * Getter.
     *
     * @return null|string[]
     * @codeCoverageIgnore
     */
    public function getMust() {
        return $this->must;
    }
    /**
     * Getter.
     *
     * @codeCoverageIgnore
     */
    public function getQueryArgs() {
        return $this->queryArgs;
    }
}
