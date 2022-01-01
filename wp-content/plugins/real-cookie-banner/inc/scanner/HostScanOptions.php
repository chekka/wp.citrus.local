<?php

namespace DevOwl\RealCookieBanner\scanner;

use DevOwl\RealCookieBanner\base\UtilsProvider;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Describe scan options for a specific host expression.
 */
class HostScanOptions {
    use UtilsProvider;
    private $hostExpression;
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
     * @param string $must
     * @param array[] $queryArgs
     * @codeCoverageIgnore
     */
    public function __construct($hostExpression, $must = null, $queryArgs = []) {
        $this->hostExpression = $hostExpression;
        $this->must = $must;
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
            $queryString = \parse_url($url, \PHP_URL_QUERY);
            $query = [];
            if (!empty($queryString)) {
                \parse_str($queryString, $query);
            }
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
