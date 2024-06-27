<?php

use Illuminate\Http\Request;

return [
    'proxies' => env('TRUSTED_PROXIES', '*'),

    'headers' => [
        Request::HEADER_FORWARDED => null,
        Request::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        Request::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        Request::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
        Request::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
        Request::HEADER_X_FORWARDED_AWS_ELB => null,
    ],
];
