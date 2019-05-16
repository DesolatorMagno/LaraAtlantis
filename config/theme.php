<?php

return [

    'active'  => env('APP_THEME', 'blue'),
    'themes' => [

        'blue' => [
            'body'    => '',
            'logo'    => 'blue',
            'navbar'  => 'blue2',
            'sidebar' => '',
        ],

        'dark' => [
            'body'    => 'dark',
            'logo'    => 'dark2',
            'navbar'  => 'dark',
            'sidebar' => 'dark2',
        ],
    ],

];
