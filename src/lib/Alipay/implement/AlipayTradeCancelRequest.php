<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**
 * 交易撤销
 * 统一收单交易撤销对象
 **/
class AlipayTradeCancelRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.cancel';
}