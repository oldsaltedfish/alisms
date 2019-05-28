<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/28
 * Time: 10:03
 */

return [
    'region_id'         => env('ALI_SMS_REGION_ID', 'cn-hangzhou'), // regionid
    'access_key'        => env('ALI_SMS_ACCESS_KEY_ID', '111111'), // accessKey
    'access_secret'     => env('ALI_SMS_ACCESS_SECRET', 'xxxxxxxxx'), // accessSecret
    'sign_name'         => env('ALI_SMS_SIGN_NAME', 'pc'), // 签名
    'version'           => env('ALI_SMS_VERSION', '2017-05-25'), // 签名
];