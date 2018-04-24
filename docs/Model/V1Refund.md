# V1Refund

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | The type of refund | [optional] 
**reason** | getReason() | setReason($value) | **string** | The merchant-specified reason for the refund. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money refunded. This amount is always negative. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the merchant initiated the refund for Square to process, in ISO 8601 format. | [optional] 
**processed_at** | getProcessedAt() | setProcessedAt($value) | **string** | The time when Square processed the refund on behalf of the merchant, in ISO 8601 format. | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | A Square-issued ID associated with the refund. For single-tender refunds, payment_id is the ID of the original payment ID. For split-tender refunds, payment_id is the ID of the original tender. For exchange-based refunds (is_exchange &#x3D;&#x3D; true), payment_id is the ID of the original payment ID even if the payment includes other tenders. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** |  | [optional] 
**is_exchange** | getIsExchange() | setIsExchange($value) | **bool** | Indicates whether or not the refund is associated with an exchange. If is_exchange is true, the refund reflects the value of goods returned in the exchange not the total money refunded. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

