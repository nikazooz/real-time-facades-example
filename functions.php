<?php

/**
 * Get path to base folder.
 *
 * @param  string  $path
 * @return string
 */
function base_path($path = '') {
    if (strpos($path, '/') !== 0) {
        $path = '/'.$path;
    }

    return __DIR__.($path ?? '');
}

/**
 * Get path to cache folder.
 *
 * @param  string  $path
 * @return string
 */
function cache_path($path = '') {
    return base_path('/cache/'.$path);
}

/**
 * Return base name of the class, without full namespace.
 *
 * @param  \stdClass|string  $class
 * @return string
 */
function class_basename($class) {
    $class = is_object($class) ? get_class($class) : $class;

    return basename(str_replace('\\', '/', $class));
}
