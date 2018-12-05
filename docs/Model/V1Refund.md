# V1Refund

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | The type of refund | [optional] 
**reason** | getReason() | setReason($value) | **string** | The merchant-specified reason for the refund. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money refunded. This amount is always negative. | [optional] 
**refunded_processing_fee_money** | getRefundedProcessingFeeMoney() | setRefundedProcessingFeeMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of processing fee money refunded. This amount is always positive. | [optional] 
**refunded_tax_money** | getRefundedTaxMoney() | setRefundedTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total amount of tax money refunded. This amount is always negative. | [optional] 
**refunded_additive_tax_money** | getRefundedAdditiveTaxMoney() | setRefundedAdditiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of additive tax money refunded. This amount is always negative. | [optional] 
**refunded_additive_tax** | getRefundedAdditiveTax() | setRefundedAdditiveTax($value) | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | All of the additive taxes associated with the refund. | [optional] 
**refunded_inclusive_tax_money** | getRefundedInclusiveTaxMoney() | setRefundedInclusiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of inclusive tax money refunded. This amount is always negative. | [optional] 
**refunded_inclusive_tax** | getRefundedInclusiveTax() | setRefundedInclusiveTax($value) | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | All of the inclusive taxes associated with the refund. | [optional] 
**refunded_tip_money** | getRefundedTipMoney() | setRefundedTipMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of tip money refunded. This amount is always negative. | [optional] 
**refunded_discount_money** | getRefundedDiscountMoney() | setRefundedDiscountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of discount money refunded. This amount is always positive. | [optional] 
**refunded_surcharge_money** | getRefundedSurchargeMoney() | setRefundedSurchargeMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of surcharge money refunded. This amount is always negative. | [optional] 
**refunded_surcharges** | getRefundedSurcharges() | setRefundedSurcharges($value) | [**\SquareConnect\Model\V1PaymentSurcharge[]**](V1PaymentSurcharge.md) | A list of all surcharges associated with the refund. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the merchant initiated the refund for Square to process, in ISO 8601 format. | [optional] 
**processed_at** | getProcessedAt() | setProcessedAt($value) | **string** | The time when Square processed the refund on behalf of the merchant, in ISO 8601 format. | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | A Square-issued ID associated with the refund. For single-tender refunds, payment_id is the ID of the original payment ID. For split-tender refunds, payment_id is the ID of the original tender. For exchange-based refunds (is_exchange &#x3D;&#x3D; true), payment_id is the ID of the original payment ID even if the payment includes other tenders. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** |  | [optional] 
**is_exchange** | getIsExchange() | setIsExchange($value) | **bool** | Indicates whether or not the refund is associated with an exchange. If is_exchange is true, the refund reflects the value of goods returned in the exchange not the total money refunded. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

