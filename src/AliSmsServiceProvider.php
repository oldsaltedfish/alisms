<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/27
 * Time: 17:23
 */

namespace Wuliaowyh\AliSms;


use Illuminate\Support\ServiceProvider;

class AliSmsServiceProvider extends ServiceProvider
{
    public function register (){
        $this->mergeConfigFrom(__DIR__.'/../config/alisms.php', 'alisms');
        $this->app->singleton(AliSms::class, function () {
            return new AliSms();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/alisms.php' => config_path('alisms.php'),
        ]);
    }
}