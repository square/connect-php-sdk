# V1SettlementEntry

### Description

V1SettlementEntry

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | The settlement&#39;s unique identifier. | [optional] 
**type** | getType() | setType($value) | **string** | The settlement&#39;s current status. See [V1SettlementEntryType](#type-v1settlemententrytype) for possible values | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total amount of money this entry contributes to the total settlement amount. | [optional] 
**fee_money** | getFeeMoney() | setFeeMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of all Square fees associated with this settlement entry. This value is always negative or zero. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

