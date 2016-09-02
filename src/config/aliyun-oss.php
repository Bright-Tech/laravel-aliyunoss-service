<?php

return [
    'access_id' => env('ALIYUN_OSS_ACCESS_ID'),
    'access_key' => env('ALIYUN_OSS_ACCESS_KEY'),
    'endpoint' => env('ALIYUN_OSS_ENDPOINT'),
    'callback' => env('ALIYUN_OSS_CALLBACK'),
    'bucket' => env('ALIYUN_OSS_BUCKET'),
    'cdn_endpoint' => env('CDN_ENDPOINT',''),
    'img_endpoint' => env('IMG_ENDPOINT',''),
];