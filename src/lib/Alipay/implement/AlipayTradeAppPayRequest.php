<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * app支付接口2.0对象
 **/
class AlipayTradeAppPayRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.app.pay';
}