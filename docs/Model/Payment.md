# Payment

### Description

Represents a payment processed by the Square API.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | Unique ID for the payment. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | Timestamp of when the payment was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | Timestamp of when the payment was last updated, in RFC 3339 format. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money processed for this payment, not including &#x60;tip_money&#x60;. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. For more information, see [Working with monetary amounts](/build-basics/working-with-monetary-amounts). | 
**tip_money** | getTipMoney() | setTipMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount designated as a tip. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total money for the payment, including &#x60;amount_money&#x60; and &#x60;tip_money&#x60;. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. | [optional] 
**app_fee_money** | getAppFeeMoney() | setAppFeeMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money the developer is taking as a fee for facilitating the payment on behalf of the seller. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.  For more information, see [Take Payments and Collect Fees](/payments-api/take-payments-and-collect-fees).  Cannot be more than 90% of the &#x60;total_money&#x60; value. | [optional] 
**processing_fee** | getProcessingFee() | setProcessingFee($value) | [**\SquareConnect\Model\ProcessingFee[]**](ProcessingFee.md) | Processing fees and fee adjustments assessed by Square on this payment. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | Total amount of the payment refunded to-date. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Indicates whether the payment is &#x60;APPROVED&#x60;, &#x60;COMPLETED&#x60;, &#x60;CANCELED&#x60;, or &#x60;FAILED&#x60;. | [optional] 
**source_type** | getSourceType() | setSourceType($value) | **string** | The source type for this payment | [optional] 
**card_details** | getCardDetails() | setCardDetails($value) | [**\SquareConnect\Model\CardPaymentDetails**](CardPaymentDetails.md) | Non-confidential details about the source. Only populated if the &#x60;source_type&#x60; is &#x60;CARD&#x60;. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | ID of the location associated with the payment. | [optional] 
**order_id** | getOrderId() | setOrderId($value) | **string** | ID of the order associated with this payment. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | An optional ID that associates this payment with an entity in another system. | [optional] 
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | An optional customer_id to be entered by the developer when creating a payment. | [optional] 
**refund_ids** | getRefundIds() | setRefundIds($value) | **string[]** | List of &#x60;refund_id&#x60;s identifying refunds for this payment. | [optional] 
**buyer_email_address** | getBuyerEmailAddress() | setBuyerEmailAddress($value) | **string** | The buyer&#39;s e-mail address | [optional] 
**billing_address** | getBillingAddress() | setBillingAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The buyer&#39;s billing address | [optional] 
**shipping_address** | getShippingAddress() | setShippingAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The buyer&#39;s shipping address | [optional] 
**note** | getNote() | setNote($value) | **string** | An optional note to include when creating a payment | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

