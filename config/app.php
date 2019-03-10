<?php
/**
 * 请在下面放置任何您需要的应用配置
 */
return array(
  
    /**
     * 支付相关配置
     */
    'Pay' => array(
        //微信配置文件
        'wechat' => array(
            //证书目录
            'sslPath'   => '',
            //证书名称，不带_cert.pem和_key.pem，比如证书名称为wechat_apiclient_cert.pem，则这里填wechat_apiclient
            'sslName'   => '',
            //证书密钥
            'key'       => '',
            //回调地址
            'notifyUrl' => '',
            'type'      => 'wechat',
            'appId'     => '',
            'appSecret' => '',
            'mchId'     => 0,
            'sub_appid' => '',//服务商选填
            'sub_mch_id'=> 0,//服务商必填
        ),
        'ali' => array(
            // 证书目录
            'sslPath'   => '',
            // 阿里公钥文件名
            'publicKey' => '',
          	// 商户私钥文件名
            'sslName'   => '',
			// 支付宝公钥内容sslPath存在优先,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
			'rsaPublicKey' => '',
          	// 商户私钥内容sslPath存在优先		
          	'rsaPrivateKey' => '',
            'type'      => 'ali',
            // 回调地址
            'notifyUrl' => '',
            // 应用ID,您的APPID。
            'appId'     => '',
            // 卖家支付宝用户ID 2018100761614471  非必需
            'mchId'     => '',
        ),
    ),  
  
);
