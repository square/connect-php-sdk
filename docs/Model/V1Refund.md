# V1Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of refund | [optional] 
**reason** | **string** | The merchant-specified reason for the refund. | [optional] 
**refunded_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money refunded. This amount is always negative. | [optional] 
**created_at** | **string** | The time when the merchant initiated the refund for Square to process, in ISO 8601 format.. | [optional] 
**processed_at** | **string** | The time when Square processed the refund on behalf of the merchant, in ISO 8601 format. | [optional] 
**payment_id** | **string** | The Square-issued ID of the payment the refund is applied to. | [optional] 
**merchant_id** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


