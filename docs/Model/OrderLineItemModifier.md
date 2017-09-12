# OrderLineItemModifier

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The catalog object id referencing [CatalogModifier](#type-catalogmodifier). | [optional] 
**name** | getName() | setName($value) | **string** | The name of the item modifier. | [optional] 
**base_price_money** | getBasePriceMoney() | setBasePriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The base price of the item modifier. | [optional] 
**total_price_money** | getTotalPriceMoney() | setTotalPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total price of the item modifier for its line item. This is the modifier&#39;s base_price_money multiplied by the line item&#39;s quantity. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

