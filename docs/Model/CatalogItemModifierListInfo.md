# CatalogItemModifierListInfo

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**modifier_list_id** | getModifierListId() | setModifierListId($value) | **string** | The ID of the [CatalogModifierList](#type-catalogmodifierlist) controlled by this [CatalogModifierListInfo](#type-catalogmodifierlistinfo). | 
**modifier_overrides** | getModifierOverrides() | setModifierOverrides($value) | [**\SquareConnect\Model\CatalogModifierOverride[]**](CatalogModifierOverride.md) | A set of [CatalogModifierOverride](#type-catalogmodifieroverride) objects that override whether a given [CatalogModifier](#type-catalogmodifier) is enabled by default. | [optional] 
**min_selected_modifiers** | getMinSelectedModifiers() | setMinSelectedModifiers($value) | **int** | If zero or larger, the smallest number of [CatalogModifier](#type-catalogmodifier)s that must be selected from this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 
**max_selected_modifiers** | getMaxSelectedModifiers() | setMaxSelectedModifiers($value) | **int** | If zero or larger, the largest number of [CatalogModifier](#type-catalogmodifier)s that can be selected from this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 
**enabled** | getEnabled() | setEnabled($value) | **bool** | If &#x60;true&#x60;, enable this [CatalogModifierList](#type-catalogmodifierlist). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

