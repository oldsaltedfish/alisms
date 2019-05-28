<?php
/**
 * Created by PhpStorm.
 * User: wyh
 * Date: 2019/5/28
 * Time: 9:56
 */

namespace Wuliaowyh\AliSms;


use AlibabaCloud\Client\AlibabaCloud;

class AliSms
{

    protected $rpcClient;
    protected $config;

    /**
     * AliSms constructor.
     * @param array $config
     * @throws \AlibabaCloud\Client\Exception\ClientException
     */
    public function __construct(array $config = [])
    {
        if(empty($config)){
            $config = config('alisms');
        }
        $this->config = $config;
        AlibabaCloud::accessKeyClient($config['access_key'],$config['access_secret'])
            ->regionId($config['region_id'])->name($config['access_key']);

        $this->rpcClient = AlibabaCloud::rpc()
            ->client($config['access_key'])
            ->product('Dysmsapi')
            ->version($config['version'])
            ->action('SendSms')
            ->method('POST');
    }

    /**
     * @param $phone
     * @param $templateCode
     * @param $params
     * @return \AlibabaCloud\Client\Result\Result
     * @throws \AlibabaCloud\Client\Exception\ClientException
     * @throws \AlibabaCloud\Client\Exception\ServerException
     */
    public function send($phone, $templateCode, $params){
        return $this->rpcClient->options([
            'query' => [
                'PhoneNumbers' => $phone,
                'SignName' => $this->config['sign_name'],
                'TemplateCode' => $templateCode,
                'TemplateParam' => json_encode($params),
            ],
        ])->request();
    }
}