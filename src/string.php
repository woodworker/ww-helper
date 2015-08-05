<?php
namespace woodworker\string;

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function starts_with($haystack, $needle) {
    if (!is_string($haystack) || !is_string($needle)) {
        throw new \InvalidArgumentException('');
    }
    return $needle === '' || strpos($haystack, $needle) === 0;
}

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function ends_with($haystack, $needle) {
    if (!is_string($haystack) || !is_string($needle)) {
        throw new \InvalidArgumentException();
    }
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}

/**
 * @param string $haystack
 * @param string $needle
 * @param bool $caseInsensitive
 * @return boolean
 */
function in_string($haystack, $needle, $caseInsensitive = false) {
    if (!$needle) {
        return false;
    }
    if ($caseInsensitive) {
        return (false !== stristr($haystack, $needle)) ? true : false;
    }
    return (false !== strpos($haystack, $needle)) ? true : false;
}
