<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            // \Swoft\Devtool\Middleware\DevToolMiddleware::class,
            // \Swoft\Session\Middleware\SessionMiddleware::class,
        ]
    ],
    'httpRouter'       => [
        'ignoreLastSlash'  => false, // 是否忽略最后一个斜杠，设置false后，/user/index和/user/index/是两个不同的路由
        'tmpCacheNumber' => 1000,// 缓存路由数，最近一1000条(缓存到路由对象的，重启后失效，只会缓存动态路由)
        'matchAll'       => '', // 匹配所有，所有请求都会匹配到这个uri或闭包
        'currentGroupPrefix' => '', // 将会给所有的路由设置前缀(例如：/api) !!请谨慎使用!!
    ],
    'requestParser'    => [
        'parsers' => [

        ],
    ],
    'view'             => [
        'viewsPath' => '@resources/views/',
    ],
    'cache'            => [
        'driver' => 'redis',
    ],
    'demoRedis' => [
        'class' => \Swoft\Redis\Redis::class,
        'poolName' => 'demoRedis'
    ]
];
