# OrderLineItemTax

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The tax&#39;s name. | [optional] 
**type** | getType() | setType($value) | **string** | Indicates the calculation method used to apply the tax.  See [OrderLineItemTaxType](#type-orderlineitemtaxtype) for possible values. | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | The percentage of the tax, as a string representation of a decimal number.  A value of &#x60;7.25&#x60; corresponds to a percentage of 7.25%. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of the money applied by the tax in an order. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

