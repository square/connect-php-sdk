# CatalogModifier

### Description

A modifier in the Catalog object model.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The modifier name. Searchable. This field has max length of 255 Unicode code points. | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The modifier price. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | Determines where this &#x60;CatalogModifier&#x60; appears in the &#x60;CatalogModifierList&#x60;. | [optional] 
**modifier_list_id** | getModifierListId() | setModifierListId($value) | **string** | The ID of the &#x60;CatalogModifierList&#x60; associated with this modifier. Searchable. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

