<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/26
 * Time: 15:17
 */
return [
    'insideapi'=> [
        'debug'     => true,
        'token'    => '',
        'access_key'    => '',
        'guzzle' => [
            'timeout' => 3.0, // 超时时间（秒）
            'verify' => false, // 关掉 SSL 认证（强烈不建议！！！）
        ],
    ]
];