<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 移动端--手机网站
 * 手机网站支付接口2.0
 **/
class AlipayTradeWapPayRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.wap.pay';
}