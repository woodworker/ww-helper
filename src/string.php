<?php
namespace woodworker\string;

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function startsWith($haystack, $needle) {
    if(!is_string($haystack) || !is_string($needle)) {
        throw new \InvalidArgumentException('');
    }
    return $needle === '' || strpos($haystack, $needle) === 0;
}

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function endsWith($haystack, $needle) {
    if(!is_string($haystack) || !is_string($needle)) {
        throw new \InvalidArgumentException();
    }
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}