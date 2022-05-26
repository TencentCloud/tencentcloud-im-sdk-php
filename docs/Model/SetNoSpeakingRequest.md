# SetNoSpeakingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**setAccount** | **string** | 设置禁言配置的帐号 | 
**c2CmsgNospeakingTime** | **int** | 单聊消息禁言时间，单位为秒，非负整数，最大值为4294967295（十六进制 0xFFFFFFFF） 0表示取消该帐号的单聊消息禁言 4294967295表示该帐号被设置永久禁言 其它值表示该帐号具体的禁言时间 | [optional] 
**groupmsgNospeakingTime** | **int** | 群组消息禁言时间，单位为秒，非负整数，最大值为4294967295（十六进制 0xFFFFFFFF） 0表示取消该帐号的群组消息禁言  4294967295表示该帐号被设置永久禁言 其它值表示该帐号的具体禁言时间 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


