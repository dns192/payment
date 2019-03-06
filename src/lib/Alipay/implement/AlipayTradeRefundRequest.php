<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 交易退款
 * 统一收单交易退款接口
 **/
class AlipayTradeRefundRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.refund';
}