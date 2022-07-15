# FriendGetResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userDataItem** | **object[]** |  | [optional] 
**standardSequence** | **int** | 标配好友数据的 Sequence，客户端可以保存该 Sequence，下次请求时通过请求的 StandardSequence 字段返回给后台 | [optional] 
**customSequence** | **int** | 自定义好友数据的 Sequence，客户端可以保存该 Sequence，下次请求时通过请求的 CustomSequence 字段返回给后台 | [optional] 
**friendNum** | **int** | 好友总数 | [optional] 
**completeFlag** | **int** | 分页的结束标识，非0值表示已完成全量拉取 | [optional] 
**nextStartIndex** | **int** | 分页接口下一页的起始位置 | [optional] 
**errorDisplay** | **string** | 详细的客户端展示信息 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


