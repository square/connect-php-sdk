# CashPaymentDetails

### Description

Additional details about CASH type payments.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**buyer_supplied_money** | getBuyerSuppliedMoney() | setBuyerSuppliedMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount and currency of the money supplied by the buyer. | 
**change_back_money** | getChangeBackMoney() | setChangeBackMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of change due back to the buyer. Read Only field calculated from the amount_money and buyer_supplied_money fields. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

