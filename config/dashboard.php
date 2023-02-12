<?php

return [
    'admin' => [
        'claude' => [
            'email' => env('ADMIN_CLAUDE_EMAIL', 'claude@eloquentblinds.co.za'),
            'password' => env('ADMIN_CLAUDE_PASSWORD', 'password')
        ],
        'hendry' => [
            'email' => env('ADMIN_HENDRY_EMAIL', 'hendry@eloquentblinds.co.za'),
            'password' => env('ADMIN_HENDRY_PASSWORD', 'password')
        ],
    ]



];
