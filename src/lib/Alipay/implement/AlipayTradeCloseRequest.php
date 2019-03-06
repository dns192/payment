<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 关闭订单
 * 统一收单交易关闭对象
 **/
class AlipayTradeCloseRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.close';
}