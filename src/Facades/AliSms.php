<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/28
 * Time: 9:56
 */

namespace Wuliaowyh\AliSms\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static void send($phone, $templateCode, $params)($path = null)
 * @see \Wuliaowyh\AliSms\AliSms
 */
class AliSms extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Wuliaowyh\AliSms\AliSms::class;
    }
}