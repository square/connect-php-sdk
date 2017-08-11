# V1Payment

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The payment&#39;s unique identifier. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** | The unique identifier of the merchant that took the payment. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the payment was created, in ISO 8601 format. | [optional] 
**creator_id** | getCreatorId() | setCreatorId($value) | **string** | The unique identifier of the Square account that took the payment. | [optional] 
**device** | getDevice() | setDevice($value) | [**\SquareConnect\Model\Device**](Device.md) | The device that took the payment. | [optional] 
**payment_url** | getPaymentUrl() | setPaymentUrl($value) | **string** | The URL of the payment&#39;s detail page in the merchant dashboard. The merchant must be signed in to the merchant dashboard to view this page. | [optional] 
**receipt_url** | getReceiptUrl() | setReceiptUrl($value) | **string** | The URL of the receipt for the payment. Note that for split tender payments, this URL corresponds to the receipt for the first tender listed in the payment&#39;s tender field. Each Tender object has its own receipt_url field you can use to get the other receipts associated with a split tender payment. | [optional] 
**inclusive_tax_money** | getInclusiveTaxMoney() | setInclusiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The sum of all inclusive taxes associated with the payment. | [optional] 
**additive_tax_money** | getAdditiveTaxMoney() | setAdditiveTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The sum of all additive taxes associated with the payment. | [optional] 
**tax_money** | getTaxMoney() | setTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all taxes applied to the payment. This is always the sum of inclusive_tax_money and additive_tax_money. | [optional] 
**tip_money** | getTipMoney() | setTipMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all tips applied to the payment. | [optional] 
**discount_money** | getDiscountMoney() | setDiscountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all discounts applied to the payment. | [optional] 
**total_collected_money** | getTotalCollectedMoney() | setTotalCollectedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all discounts applied to the payment. | [optional] 
**processing_fee_money** | getProcessingFeeMoney() | setProcessingFeeMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all processing fees collected by Square for the payment. | [optional] 
**net_total_money** | getNetTotalMoney() | setNetTotalMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount to be deposited into the merchant&#39;s bank account for the payment. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all refunds applied to the payment. | [optional] 
**swedish_rounding_money** | getSwedishRoundingMoney() | setSwedishRoundingMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) |  | [optional] 
**gross_sales_money** | getGrossSalesMoney() | setGrossSalesMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) |  | [optional] 
**net_sales_money** | getNetSalesMoney() | setNetSalesMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) |  | [optional] 
**inclusive_tax** | getInclusiveTax() | setInclusiveTax($value) | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | All of the inclusive taxes associated with the payment. | [optional] 
**additive_tax** | getAdditiveTax() | setAdditiveTax($value) | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | All of the additive taxes associated with the payment. | [optional] 
**tender** | getTender() | setTender($value) | [**\SquareConnect\Model\V1Tender[]**](V1Tender.md) | All of the additive taxes associated with the payment. | [optional] 
**refunds** | getRefunds() | setRefunds($value) | [**\SquareConnect\Model\V1Refund[]**](V1Refund.md) | All of the refunds applied to the payment. | [optional] 
**itemizations** | getItemizations() | setItemizations($value) | [**\SquareConnect\Model\V1PaymentItemization[]**](V1PaymentItemization.md) | The items purchased in the payment. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

