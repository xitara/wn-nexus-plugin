<?php

use \Winter\Storm\Support\Facades\Config;

if (!function_exists('media_url')) {
    function media_url($path = '')
    {
        return url(Config::get('cms.storage.media.path') . '/' . $path);
    }
}

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
