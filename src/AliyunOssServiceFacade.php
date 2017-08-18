<?php
namespace bright_tech\laravel\aliyun_oss;

use Illuminate\Support\Facades\Facade;


/**
 * Class AliyunOssServiceFacade
 * @package bright_tech\laravel\aliyun_oss
 */
class AliyunOssServiceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oss';
    }

}
