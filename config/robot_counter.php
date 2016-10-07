<?php

return [
    'cache'       => [
        'host'     => '127.0.0.1',
        'port'     => 6379,
        'timeout'  => 0.0,
        'password' => ''
    ],
    'server' => [
        'host' => '127.0.0.1',
        'port' => 9501,
        'reconnectInterval' => 5000
    ],
    'user' => [
        'account' => 'counter',
        'password' => 'xxxx'
    ],
    'client' => [
        'open_length_check'     => 1,
        'package_length_type'   => 'N',
        'package_length_offset' => 0,
        'package_body_offset'   => 4,
        'package_max_length'    => 2048,
        'socket_buffer_size'    => 1024 * 1024 * 2,
        'daemonize'             => 1,
        'ssl_cert_file'         => __DIR__ . '/ssl.crt',
        'ssl_key_file'          => __DIR__ . '/ssl.key'
    ]
];