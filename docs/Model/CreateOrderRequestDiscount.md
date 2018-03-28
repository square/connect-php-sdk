# CreateOrderRequestDiscount

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | Only used for catalog discounts. The catalog object ID for an existing [CatalogDiscount](#type-catalogdiscount).  Do not provide a value for this field if you provide values in other fields for an ad hoc discount. | [optional] 
**name** | getName() | setName($value) | **string** | Only used for ad hoc discounts. The discount&#39;s name. | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | Only used for ad hoc discounts. The percentage of the discount, as a string representation of a decimal number.  A value of &#x60;7.25&#x60; corresponds to a percentage of 7.25%. This value range between 0.0 up to 100.0 | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | Only used for ad hoc discounts. The monetary amount of the discount. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

