<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
    // tam thoi simple nhat la cu xai * tuc la cho phep tat ca, sau nay hieu thi e chinh sua sau.
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0,
     // roi khoi dong lai cai api di xem.
     // duoc roi dung ko, có 1 cai api bị sai kia. cH:OD em ty 
     //nó không hiện dữ liệu anh :((
         // e co custom cai header o dau ko?
         //
];
