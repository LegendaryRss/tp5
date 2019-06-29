<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
//        $config = array(
//             'APPID' => 'wx426b3015555a46be',
//             'MCHID' => '1900009851',
//             'KEY' => '8934e7d15453e97507ef794cf7b0519d',
//             'APPSECRET' => '7813490da6f1265e4901ffb80afaa36f'
//        );

 		require_once APP_PATH.'common/WxpayAPI/php_sdk_v3.0.9/lib/WxPay.Api.php';
        require_once APP_PATH.'common/WxpayAPI/php_sdk_v3.0.9/lib/WxPay.Config.php';
 		$config = new \WxPayConfig();

 		$input = new \WxPayUnifiedOrder();
 		// 设置商品描述
 		$input->SetBody('测试商品');
 		// 设置订单号
 		$input->SetOut_trade_no(date('YmdHis'));
 		// 设置订单金额（单位：分）
 		$input->SetTotal_fee('1');
 		// 设置异步通知地址
 		$input->SetNotify_url('http://localhost/tp5/public/index.php/index/Notify/index');
 		// 设置交易类型
 		$input->SetTrade_type('NATIVE');
 		// 设置商品ID
 		$input->SetProduct_id('123456780');
 		// 调用统一下单API
 		$result = \WxPayAPI::unifiedOrder($config,$input);
        print_r($result);
 		// 生成二维码图片
 		$code_url = $result['code_url'];

 		$img = '<img src=https://www.kuaizhan.com/common/encode-png?large=true&data='.urlencode($code_url).' />';
 		echo $img;
    }

}
