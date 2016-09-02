<?php
namespace bright_tech\laravel\aliyun_oss;

use OSS\OssClient;
use OSS\OssPostClient;
use OSS\OssUtilities;


/**
 * Class WechatService
 * @package bright_tech\laravel\wechat
 *
 *
 */
class AliyunOssService
{

    /**
     *
     * @var string
     */
    protected $accessId = '';

    /**
     *
     * @var string
     */
    protected $accessKey = '';

    /**
     * callback url
     * @var string
     */
    public $callback;

    /**
     * 例如 bright-xyj.oss-cn-beijing.aliyuncs.com
     * @var string
     */
    protected $endpoint;

    /**
     * bucket名称
     * @var string
     */
    protected $bucket;

    /**
     * CDN域名,不使用CDN 不需设置
     * @var string
     */
    protected $cdnEndpoint;

    /**
     * 图片服务域名,不使用图片服务不需设置
     * 如果使用图片服务,则设置为图片服务的域名(使用CDN加速的请设置为图片CDN的域名)
     * @var string
     */
    protected $imgEndpoint;

    /**
     * @var OssClient
     */
    protected $ossClient;

    /**
     * @var
     */
    protected $ossPostClient;

    /**
     * @var
     */
    protected $ossUtilities;


    /**
     * AliyunOssService constructor.
     *
     * @param $accessId
     * @param $accessKey
     * @param $endpoint
     * @param $callback
     * @param $bucket
     * @param string $cdnEndpoint CDN域名,不使用CDN 不需设置
     * @param string $imgEndpoint 图片服务域名,不使用图片服务不需设置
     */
    public function __construct($accessId, $accessKey, $endpoint, $callback, $bucket, $cdnEndpoint = null, $imgEndpoint = null)
    {
        $this->accessId = $accessId;
        $this->accessKey = $accessKey;
        $this->endpoint = $endpoint;
        $this->callback = $callback;
        $this->bucket = $bucket;
        $this->cdnEndpoint = $cdnEndpoint;
        $this->imgEndpoint = $imgEndpoint;
    }


    public function getOssClient()
    {
        if (!$this->ossClient) {
            $this->ossClient = new OssClient($this->accessId, $this->accessKey, $this->endpoint);
        }
        return $this->ossClient;
    }

    public function getOssPostClient()
    {
        if (!$this->ossPostClient) {
            $this->ossPostClient = new OssPostClient($this->accessId, $this->accessKey, $this->endpoint);
        }
        return $this->ossPostClient;
    }

    public function getOssUtilities()
    {
        if (!$this->ossUtilities) {
            $this->ossUtilities = new OssUtilities($this->accessId, $this->accessKey, $this->endpoint);
        }
        return $this->ossUtilities;
    }

}
