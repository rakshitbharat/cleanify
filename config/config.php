<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'cleaning_commands' => [
        'composer dump-autoload',
        'php artisan config:cache',
        'php artisan config:clear',
        'php artisan route:clear',
        'php artisan view:clear',
        'php artisan clear-compiled',
        'php artisan down',
    ]
];
