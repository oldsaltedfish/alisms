<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/28
 * Time: 15:14
 */

class TestCase extends Orchestra\Testbench\TestCase
{

    protected function getEnvironmentSetUp($app)
    {
        // make sure, our .env file is loaded
        $app->useEnvironmentPath(__DIR__.'/..');
        $app->bootstrapWith([\Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class]);
        $app['config']->set('alisms',[
            'region_id'         => env('ALI_SMS_REGION_ID', 'cn-hangzhou'), // regionid
            'access_key'        => env('ALI_SMS_ACCESS_KEY_ID', '111111'), // accessKey
            'access_secret'     => env('ALI_SMS_ACCESS_SECRET', 'xxxxxxxxx'), // accessSecret
            'sign_name'         => env('ALI_SMS_SIGN_NAME', 'pc'), // 签名
            'version'           => env('ALI_SMS_VERSION', '2017-05-25'), // 签名
        ]);
        parent::getEnvironmentSetUp($app);
    }

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
        $this->assertIsBool(\Wuliaowyh\AliSms\Facades\AliSms::send('18616257971', 'SMS_168305466', ['code'=>'xxxx', 'order'=>'xxxxx']));
    }
}