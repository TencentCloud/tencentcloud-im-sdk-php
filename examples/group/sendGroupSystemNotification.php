<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

use TencentCloud\IM\Configuration;

$config = new Configuration();
$config->setSdkappid(0);
$config->setIdentifier("");
$config->setKey("");

$apiInstance = new TencentCloud\IM\Api\GroupApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$random = 56; // int |
$sendGroupSystemNotificationRequest = new \TencentCloud\IM\Model\SendGroupSystemNotificationRequest(); // \TencentCloud\IM\Model\SendGroupSystemNotificationRequest |
//TODO: Set the request parameters
$sendGroupSystemNotificationRequest->setGroupId("");
$sendGroupSystemNotificationRequest->setContent("");

try {
    $result = $apiInstance->sendGroupSystemNotification($random, $sendGroupSystemNotificationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->sendGroupSystemNotification: ', $e->getMessage(), PHP_EOL;
}
?>