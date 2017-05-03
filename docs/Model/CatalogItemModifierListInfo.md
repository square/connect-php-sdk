# CatalogItemModifierListInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**modifier_list_id** | **string** | The ID of the [CatalogModifierList](#type-catalogmodifierlist) controlled by this [CatalogModifierListInfo](#type-catalogmodifierlistinfo). | 
**modifier_overrides** | [**\SquareConnect\Model\CatalogModifierOverride[]**](CatalogModifierOverride.md) | A set of [CatalogModifierOverride](#type-catalogmodifieroverride) objects that override whether a given [CatalogModifier](#type-catalogmodifier) is enabled by default. | [optional] 
**min_selected_modifiers** | **int** | If zero or larger, the smallest number of [CatalogModifier](#type-catalogmodifier)s that must be selected from this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 
**max_selected_modifiers** | **int** | If zero or larger, the largest number of [CatalogModifier](#type-catalogmodifier)s that can be selected from this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 
**enabled** | **bool** | If &#x60;true&#x60;, enable this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


