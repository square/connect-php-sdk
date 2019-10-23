# AdditionalRecipientReceivable

### Description

Represents a monetary distribution of part of a [Transaction](#type-transaction)'s amount for Transactions which included additional recipients. The location of this receivable is that same as the one specified in the [AdditionalRecipient](#type-additionalrecipient).
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The additional recipient receivable&#39;s unique ID, issued by Square payments servers. | 
**transaction_id** | getTransactionId() | setTransactionId($value) | **string** | The ID of the transaction that the additional recipient receivable was applied to. | 
**transaction_location_id** | getTransactionLocationId() | setTransactionLocationId($value) | **string** | The ID of the location that created the receivable. This is the location ID on the associated transaction. | 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of the receivable. This will always be non-negative. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the additional recipient receivable was created, in RFC 3339 format. | [optional] 
**refunds** | getRefunds() | setRefunds($value) | [**\SquareConnect\Model\AdditionalRecipientReceivableRefund[]**](AdditionalRecipientReceivableRefund.md) | Any refunds of the receivable that have been applied. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

