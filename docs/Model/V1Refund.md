# V1Refund

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | The type of refund | [optional] 
**reason** | getReason() | setReason($value) | **string** | The merchant-specified reason for the refund. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money refunded. This amount is always negative. | [optional] 
**refunded_processing_fee_money** | getRefundedProcessingFeeMoney() | setRefundedProcessingFeeMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of processing fee money refunded. | [optional] 
**refunded_additive_tax_money** | getRefundedAdditiveTaxMoney() | setRefundedAdditiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of additive tax money refunded. | [optional] 
**refunded_inclusive_tax_money** | getRefundedInclusiveTaxMoney() | setRefundedInclusiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of inclusive tax money refunded. | [optional] 
**refunded_tip_money** | getRefundedTipMoney() | setRefundedTipMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of tip money refunded. | [optional] 
**refunded_discount_money** | getRefundedDiscountMoney() | setRefundedDiscountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of discount money refunded. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the merchant initiated the refund for Square to process, in ISO 8601 format.. | [optional] 
**processed_at** | getProcessedAt() | setProcessedAt($value) | **string** | The time when Square processed the refund on behalf of the merchant, in ISO 8601 format. | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | The Square-issued ID of the payment the refund is applied to. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** |  | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

