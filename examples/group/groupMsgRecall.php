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
$groupMsgRecallRequest = new \TencentCloud\IM\Model\GroupMsgRecallRequest(); // \TencentCloud\IM\Model\GroupMsgRecallRequest |
//TODO: Set the request parameters
$groupMsgRecallRequest->setGroupId("");
$groupMsgRecallRequest->setMsgSeqList(array(0 => array("MsgSeq" => 1)));
try {
    $result = $apiInstance->groupMsgRecall($random, $groupMsgRecallRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupMsgRecall: ', $e->getMessage(), PHP_EOL;
}
?>