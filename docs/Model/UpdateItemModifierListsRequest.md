# UpdateItemModifierListsRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**item_ids** | getItemIds() | setItemIds($value) | **string[]** | The [CatalogItem](#type-catalogitem)s whose [CatalogModifierList](#type-catalogmodifierlist)s are being updated. | 
**modifier_lists_to_enable** | getModifierListsToEnable() | setModifierListsToEnable($value) | **string[]** | The set of [CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to enable for the [CatalogItem](#type-catalogitem). | [optional] 
**modifier_lists_to_disable** | getModifierListsToDisable() | setModifierListsToDisable($value) | **string[]** | The set of [CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to disable for the [CatalogItem](#type-catalogitem). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

