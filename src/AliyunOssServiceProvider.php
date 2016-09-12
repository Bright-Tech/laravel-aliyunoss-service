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
            $config = config('aliyun-oss');
            return new AliyunOssService($config['access_id'], $config['access_key'], $config['endpoint'], $config['bucket'], $config['cdn_endpoint'], $config['img_endpoint']);
        });
    }
}
