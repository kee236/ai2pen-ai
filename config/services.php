<?php

return [
    'facebook' => [
        'client_id' => env('FACEBOOK_APP_ID'),
        'client_secret' => env('FACEBOOK_APP_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT'),
    ],
    'line' => [
        'channel_id' => env('LINE_CHANNEL_ID'),
        'channel_secret' => env('LINE_CHANNEL_SECRET'),
        'channel_access_token' => env('LINE_CHANNEL_ACCESS_TOKEN'),
    ],
    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
    ],
    'gemini' => [
        'api_key' => env('GEMINI_API_KEY'),
    ],
    'dialogflow' => [
        'project_id' => env('DIALOGFLOW_PROJECT_ID'),
        'private_key' => env('DIALOGFLOW_PRIVATE_KEY'),
        'client_email' => env('DIALOGFLOW_CLIENT_EMAIL'),
    ],
];

/*


return [

    
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    

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

    'mandrill' => [
        'secret' => env('MANDRILL_KEY'),
        // 'headers' => [
        //     'header-example-x' => env('MANDRILL_HEADER_X'),
        //     'header-example-y' => env('MANDRILL_HEADER_Y'),
        // ]
],

];
*/