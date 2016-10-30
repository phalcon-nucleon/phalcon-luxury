<?php

return [
    /*
    +-------------------------------------------------------------------+
    | Application configuration                                         |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'app' => [
        'base_uri'       => '/',
    ],
    /*
    +-------------------------------------------------------------------+
    | Database configuration                                            |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'database'    => [
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'test',
        'charset'  => 'utf8',
    ],
    /*
    +-------------------------------------------------------------------+
    | Cache configuration                                               |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'cache'       => [
        'default' => [
            'adapter' => 'Data',
            'driver'  => 'File',
            'options' => ['cacheDir' => __DIR__ . '/../storage/caches/'],
        ]
    ],

    'paths'   => [
        'app'        => __DIR__ . '/../App/',
        'migrations' => __DIR__ . '/../migrations/',
        'views'      => __DIR__ . '/../resources/views/',
        'storage'    => __DIR__ . '/../storage/',
        'datas'      => __DIR__ . '/../storage/datas/',
        'log'        => __DIR__ . '/../storage/logs/',
        'vendor'     => __DIR__ . '/../vendor/',
        'base'       => '/',
    ],
    /*
    +-------------------------------------------------------------------+
    | Session configuration                                             |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'session'     => [
        'adapter' => 'Files', // Files, Memcache, Libmemcached, Redis
        'id'      => 'phalcon-luxury'
    ],
    /*
    +-------------------------------------------------------------------+
    | View configuration                                                |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'view'        => [
        'views_dir'     => __DIR__ . '/../resources/views/',
        'compiled_path' => __DIR__ . '/../storage/views/',
    ],
    /*
    +-------------------------------------------------------------------+
    | Logger configuration                                              |
    +-------------------------------------------------------------------+
    |                                                                   |
    |                                                                   |
    |                                                                   |
    +-------------------------------------------------------------------+
     */
    'log'         => [
        'adapter' => 'multiple',
        'path'    => __DIR__ . '/../storage/logs',
        'options' => []
    ],
    /*
    +-------------------------------------------------------------------+
    | Error configuration                                               |
    +-------------------------------------------------------------------+
    | Handling all error raised in application.                         |
    | Auto dispatching on ErrorController                               |
    +-------------------------------------------------------------------+
     */
    'error'       => [
        'formatter'  => [
            'formatter'  => \Phalcon\Logger\Formatter\Line::class,
            'format'     => '[%date%][%type%] %message%',
            'dateFormat' => 'Y-m-d H:i:s O'
        ],
        'namespace'  => 'App\Http\Controllers',
        'controller' => 'errors',
        'action'     => 'index',
    ]
];
