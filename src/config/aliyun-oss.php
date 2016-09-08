<?php

return [
    'access_id' => env('ALIYUN_OSS_ACCESS_ID'),
    'access_key' => env('ALIYUN_OSS_ACCESS_KEY'),
    'endpoint' => env('ALIYUN_OSS_ENDPOINT','oss-cn-shanghai.aliyuncs.com'),
    'callback' => env('ALIYUN_OSS_CALLBACK','http://callback.example.com/callback.php'),
    'bucket' => env('ALIYUN_OSS_BUCKET', 'example-bucket'),
    'cdn_endpoint' => env('CDN_ENDPOINT','cdn.example.com'),
    'img_endpoint' => env('IMG_ENDPOINT','example.img-cn-shanghai.aliyuncs.com'),
];