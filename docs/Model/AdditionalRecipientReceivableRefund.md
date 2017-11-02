# AdditionalRecipientReceivableRefund

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The receivable refund&#39;s unique ID, issued by Square payments servers. | 
**receivable_id** | getReceivableId() | setReceivableId($value) | **string** | The ID of the receivable that the refund was applied to. | 
**refund_id** | getRefundId() | setRefundId($value) | **string** | The ID of the refund that is associated to this receivable refund. | 
**transaction_location_id** | getTransactionLocationId() | setTransactionLocationId($value) | **string** | The ID of the location that created the receivable. This is the location ID on the associated transaction. | 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of the refund. This will always be non-negative. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the refund was created, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

