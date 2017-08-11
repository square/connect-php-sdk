# V1Settlement

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The settlement&#39;s unique identifier. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | The settlement&#39;s current status. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money involved in the settlement. A positive amount indicates a deposit, and a negative amount indicates a withdrawal. This amount is never zero. | [optional] 
**initiated_at** | getInitiatedAt() | setInitiatedAt($value) | **string** | The time when the settlement was submitted for deposit or withdrawal, in ISO 8601 format. | [optional] 
**bank_account_id** | getBankAccountId() | setBankAccountId($value) | **string** | The Square-issued unique identifier for the bank account associated with the settlement. | [optional] 
**entries** | getEntries() | setEntries($value) | [**\SquareConnect\Model\V1SettlementEntry[]**](V1SettlementEntry.md) | The entries included in this settlement. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

