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
$getAppidGroupListRequest = new \TencentCloud\IM\Model\GetAppidGroupListRequest(); // \TencentCloud\IM\Model\GetAppidGroupListRequest |
//TODO: Set the request parameters


try {
    $result = $apiInstance->getAppidGroupList($random, $getAppidGroupListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAppidGroupList: ', $e->getMessage(), PHP_EOL;
}
?>