<?php

return [
    'name' => env('APP_NAME', 'Laravel Nova'),
    'short_name' => env('APP_NAME', 'Laravel Nova'),
    'theme_color' => '#FFFFFF',
    'background_color' => '#f1f5f9',
    'display' => 'standalone',
    'orientation' => 'portrait',
    'scope' => config('nova.path'),
    'start_url' => config('nova.path', '/') . '?mode=standalone',
    'icons' => [
        [
            'src' => '/favicon.ico',
            'sizes' => '128x128',
            'type' => 'image/x-icon',
            'purpose' => 'maskable any'
        ]
    ]
];
