<?php
namespace Dns192\Payment\lib\Alipay\implement;
use Dns192\Payment\lib\Alipay\AlipayBase;
/**-----未查找到官方文档
 * 统一收单下单并支付页面接口
 **/
class AlipayTradePagePayRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.page.pay';
}