<?php
namespace woodworker\arrays;

/**
 * returns true if at least one callback call will return true
 *
 * @param $array
 * @param callable $callback
 * @return bool
 */
function array_any($array, callable $callback) {
    foreach ($array as $item) {
        if ($callback($item) == true) {
            return true;
        }
    }
    return false;
}

/**
 * returns true if all callback calls will return true
 *
 * @param $array
 * @param callable $callback
 * @return bool
 */
function array_all($array, callable $callback) {
    foreach ($array as $item) {
        if ($callback($item) !== true) {
            return false;
        }
    }
    return true;
}
