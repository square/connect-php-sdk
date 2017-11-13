# AdditionalRecipient

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | The location ID for a recipient (other than the merchant) receiving a portion of this tender. | 
**description** | getDescription() | setDescription($value) | **string** | The description of the additional recipient. | 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money distributed to the recipient. | 
**receivable_id** | getReceivableId() | setReceivableId($value) | **string** | The unique ID for this [AdditionalRecipientReceivable](#type-additionalrecipientreceivable), assigned by the server. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

