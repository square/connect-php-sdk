# V1CreateRefundRequest

### Description

V1CreateRefundRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | The ID of the payment to refund. If you are creating a &#x60;PARTIAL&#x60; refund for a split tender payment, instead provide the id of the particular tender you want to refund. | 
**type** | getType() | setType($value) | **string** | TThe type of refund (FULL or PARTIAL). See [V1CreateRefundRequestType](#type-v1createrefundrequesttype) for possible values | 
**reason** | getReason() | setReason($value) | **string** | The reason for the refund. | 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money to refund. Required only for PARTIAL refunds. | [optional] 
**request_idempotence_key** | getRequestIdempotenceKey() | setRequestIdempotenceKey($value) | **string** | An optional key to ensure idempotence if you issue the same PARTIAL refund request more than once. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

