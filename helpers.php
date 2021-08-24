<?php

use \Winter\Storm\Support\Facades\Config;

if (!function_exists('plugins_url')) {
    function plugins_url($path = '')
    {
        return url(Config::get('cms.pluginsPath') . '/' . $path);
    }
}

if (!function_exists('array_search_value')) {
    function array_search_value(array $array, String $search, String $key)
    {
        return array_search($search, array_column($array, $key));
    }
}

if (!function_exists('array_sort_value')) {
    function array_sort_value(array $array, String $key)
    {
        usort($array, function ($a, $b) use ($key) {
            return $a[$key] <=> $b[$key];
        });

        return $array;
    }
}

if (!function_exists('str_starts_with')) {
    function str_starts_with($haystack, $needle)
    {
        return (string) $needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle)
    {
        return $needle !== '' && substr($haystack, -strlen($needle)) === (string) $needle;
    }
}

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}
