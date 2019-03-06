<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 线下--条码支付/声波支付
 * 用于在线下场景交易一次创建并支付掉
 **/
class AlipayTradePayRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.pay';
}