# V1Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of refund | [optional] 
**reason** | **string** | The merchant-specified reason for the refund. | [optional] 
**refunded_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money refunded. This amount is always negative. | [optional] 
**refunded_processing_fee_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of processing fee money refunded. | [optional] 
**refunded_additive_tax_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of additive tax money refunded. | [optional] 
**refunded_inclusive_tax_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of inclusive tax money refunded. | [optional] 
**refunded_tip_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of tip money refunded. | [optional] 
**refunded_discount_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of discount money refunded. | [optional] 
**created_at** | **string** | The time when the merchant initiated the refund for Square to process, in ISO 8601 format.. | [optional] 
**processed_at** | **string** | The time when Square processed the refund on behalf of the merchant, in ISO 8601 format. | [optional] 
**payment_id** | **string** | The Square-issued ID of the payment the refund is applied to. | [optional] 
**merchant_id** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


