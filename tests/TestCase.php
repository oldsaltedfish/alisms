<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/28
 * Time: 15:14
 */

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Wuliaowyh\AliSms\AliSmsServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'AliSms' => 'Wuliaowyh\AliSms\Facades\AliSms'
        ];
    }

    /**
     *  @test
     *  @expectException        Exception
     */
    public function send(){
        $this->assertIsBool(\Wuliaowyh\AliSms\Facades\AliSms::send('xxxxxxxxx', 'SMS_xxxx', ['code'=>'xxxx']));
    }
}