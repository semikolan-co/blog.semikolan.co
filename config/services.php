<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    // 'google' => [
    //     'client_id' => '451039999037-j5rp8evn84br5pn3iaqm4iqsuk70mpcb.apps.googleusercontent.com',
    //     'client_secret' => 'EnWIiWUQ0aeSYpdvAGn9NiQv',
    //     'redirect' => 'http://localhost:8000/auth/google/callback',
    // ],
    
    // 'linkedin' => [
    //     'client_id' => '78fc6jswufwfjb',
    //     'client_secret' => '6Pr2MRD9kqXCaH8o',
    //     'redirect' => 'http://localhost:8000/auth/linkedin/callback',
    // ],

    // 'github' => [
    //     'client_id' => '0e5b0522a456ec5629b2',
    //     'client_secret' => 'c976bd65f76c697be508df25488326237810eb25',
    //     'redirect' => 'http://localhost:8000/auth/github/callback',
    // ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],
    
    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
        'redirect' => env('LINKEDIN_REDIRECT'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_REDIRECT'),
    ],



];
