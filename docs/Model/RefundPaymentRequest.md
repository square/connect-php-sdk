# RefundPaymentRequest

### Description

Refunds a payment.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A unique string that identifies this RefundPayment request. Key can be any valid string but must be unique for every RefundPayment request. For more information, see [Idempotency keys](https://developer.squareup.com/docs/working-with-apis/idempotency). | 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money to refund.  Cannot be more than the &#x60;total_money&#x60; value of the payment minus the total amount of all previously completed refunds for this payment.  Must be specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. See [Working with monetary amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts) for details.  The currency code must match the currency associated with the business that is charging the card. | 
**app_fee_money** | getAppFeeMoney() | setAppFeeMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | Amount of money the developer will contribute to help cover the refunded amount. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.  Value cannot be more than the &#x60;amount_money&#x60;.  You can specify this parameter in a refund request only if the same parameter was also included when taking the payment. This is part of the application fee  scenario the API supports. For more information, see [Collect Fees](https://developer.squareup.com/docs/payments-api/take-payments-and-collect-fees) | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | Unique ID of the payment being refunded. | 
**reason** | getReason() | setReason($value) | **string** | A description of the reason for the refund. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

