# ImportMsgRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**syncFromOldSystem** | **int** | 该字段只能填1或2，其他值是非法值 1表示实时消息导入，消息计入未读计数 2表示历史消息导入，消息不计入未读 | 
**fromAccount** | **string** | 消息发送方 UserID，用于指定发送消息方 | 
**toAccount** | **string** | 消息接收方 UserID | 
**msgSeq** | **int** | 消息序列号（32位无符号整数），后台会根据该字段去重及进行同秒内消息的排序，详细规则请看本接口的功能说明。若不填该字段，则由后台填入随机数 | [optional] 
**msgRandom** | **int** | 消息随机数（32位无符号整数），后台用于同一秒内的消息去重。请确保该字段填的是随机 | 
**msgTimeStamp** | **int** | 消息时间戳，UNIX 时间戳，单位为秒。后台会根据该字段去重，详细规则请看本接口的功能说明。 | 
**msgBody** | [**\TencentCloud\IM\Model\TIMMsgElement[]**](TIMMsgElement.md) | 消息内容，具体格式请参考（https://cloud.tencent.com/document/product/269/2720）消息格式描述（注意，一条消息可包括多种消息元素，MsgBody 为 Array 类型） | 
**cloudCustomData** | **string** | 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


