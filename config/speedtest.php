<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Version numebr
    |--------------------------------------------------------------------------
    */

    'version' => '1.12.0',

    /*
    |--------------------------------------------------------------------------
    | Installation type
    |--------------------------------------------------------------------------
    */

    'install' => 'manual',

    /*
    |--------------------------------------------------------------------------
    | Path for HOME variable
    |--------------------------------------------------------------------------
    */

    'home' => 'HOME=' . base_path() . DIRECTORY_SEPARATOR,

    /*
    |--------------------------------------------------------------------------
    | GitHub Repo Variables
    |--------------------------------------------------------------------------
    */

    'user' => 'henrywhitaker3',
    'repo' => 'Speedtest-Tracker',
    'branch' => 'master',

    /*
    |--------------------------------------------------------------------------
    | Excluded Dirs
    |--------------------------------------------------------------------------
    |
    | Dirs excluded from the self-updating function
    */

    'exclude_dirs' => [
        'node_modules/',
        'bootstrap/cache/',
        'bower/',
        'storage/',
        'vendor/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Excluded Files
    |--------------------------------------------------------------------------
    |
    | Files excluded from the self-updating function
    */

    'exclude_files' => [
        'database/speed.db',
    ],
];
