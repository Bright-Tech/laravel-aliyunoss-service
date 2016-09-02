<?php
namespace bright_tech\laravel\aliyun_oss;


use Illuminate\Support\ServiceProvider;

class AliyunOssServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config/aliyun-oss.php' => config_path('aliyun-oss.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AliyunOssService::class, function ($app) {
            $configWechat = config('aliyun-oss');
            return new WechatService($configWechat['appid'], $configWechat['secret'], \Cache::store());
        });
    }
}
