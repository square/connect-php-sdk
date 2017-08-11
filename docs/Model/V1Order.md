# V1Order

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**id** | getId() | setId($value) | **string** | The order&#39;s unique identifier. | [optional] 
**buyer_email** | getBuyerEmail() | setBuyerEmail($value) | **string** | The email address of the order&#39;s buyer. | [optional] 
**recipient_name** | getRecipientName() | setRecipientName($value) | **string** | The name of the order&#39;s buyer. | [optional] 
**recipient_phone_number** | getRecipientPhoneNumber() | setRecipientPhoneNumber($value) | **string** | The phone number to use for the order&#39;s delivery. | [optional] 
**state** | getState() | setState($value) | **string** | Whether the tax is an ADDITIVE tax or an INCLUSIVE tax. | [optional] 
**shipping_address** | getShippingAddress() | setShippingAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The address to ship the order to. | [optional] 
**subtotal_money** | getSubtotalMoney() | setSubtotalMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of all items purchased in the order, before taxes and shipping. | [optional] 
**total_shipping_money** | getTotalShippingMoney() | setTotalShippingMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The shipping cost for the order. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all taxes applied to the order. | [optional] 
**total_price_money** | getTotalPriceMoney() | setTotalPriceMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total cost of the order. | [optional] 
**total_discount_money** | getTotalDiscountMoney() | setTotalDiscountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all discounts applied to the order. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the order was created, in ISO 8601 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the order was last modified, in ISO 8601 format. | [optional] 
**expires_at** | getExpiresAt() | setExpiresAt($value) | **string** | The time when the order expires if no action is taken, in ISO 8601 format. | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | The unique identifier of the payment associated with the order. | [optional] 
**buyer_note** | getBuyerNote() | setBuyerNote($value) | **string** | A note provided by the buyer when the order was created, if any. | [optional] 
**completed_note** | getCompletedNote() | setCompletedNote($value) | **string** | A note provided by the merchant when the order&#39;s state was set to COMPLETED, if any | [optional] 
**refunded_note** | getRefundedNote() | setRefundedNote($value) | **string** | A note provided by the merchant when the order&#39;s state was set to REFUNDED, if any. | [optional] 
**canceled_note** | getCanceledNote() | setCanceledNote($value) | **string** | A note provided by the merchant when the order&#39;s state was set to CANCELED, if any. | [optional] 
**tender** | getTender() | setTender($value) | [**\SquareConnect\Model\V1Tender**](V1Tender.md) | The tender used to pay for the order. | [optional] 
**order_history** | getOrderHistory() | setOrderHistory($value) | [**\SquareConnect\Model\V1OrderHistoryEntry[]**](V1OrderHistoryEntry.md) | The history of actions associated with the order. | [optional] 
**promo_code** | getPromoCode() | setPromoCode($value) | **string** | The promo code provided by the buyer, if any. | [optional] 
**btc_receive_address** | getBtcReceiveAddress() | setBtcReceiveAddress($value) | **string** | For Bitcoin transactions, the address that the buyer sent Bitcoin to. | [optional] 
**btc_price_satoshi** | getBtcPriceSatoshi() | setBtcPriceSatoshi($value) | **float** | For Bitcoin transactions, the price of the buyer&#39;s order in satoshi (100 million satoshi equals 1 BTC). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

