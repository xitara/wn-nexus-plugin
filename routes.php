<?php

use Winter\Storm\Support\Facades\Config;

Route::get('/xitara/nexus/jsvars.js', function () {
    $urls = [
        'media' => url(Config::get('cms.storage.media.path')),
        'plugins' => url(Config::get('cms.pluginsPath')),
    ];

    $string = 'winterUrl = {' . PHP_EOL;
    foreach ($urls as $key => $url) {
        $string .= "\t" . $key . ': \'' . $url . '\',' . PHP_EOL;
    }
    $string .= '}' . PHP_EOL;

    header('Content-Type: application/javascript; charset=utf-8');

    return $string;
});
