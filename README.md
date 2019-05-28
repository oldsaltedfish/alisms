# 阿里云短信

发送短信
```php
/**
 * $phone 手机号
 * $phone 模板编号
 * $params 模板参数
 */
\Wuliaowyh\AliSms\Facades\AliSms::send($phone, $templateCode, $params);
```