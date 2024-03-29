<?php

// config for Code16/JockoClient
return [
    'api_host' => env('JOCKO_API_HOST', 'http://jocko.test/'),
    'api_key' => env('JOCKO_API_KEY'),
    'website_key' => env('JOCKO_WEBSITE_KEY'),
    'should_cache' => env('JOCKO_SHOULD_CACHE', true),
    'preview' => env('JOCKO_PREVIEW', false),
];
