<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 查询退款对象
 **/
class AlipayTradeFastpayRefundQueryRequest extends AlipayBase
{
    protected $apiMethodName ='alipay.trade.fastpay.refund.query';
}