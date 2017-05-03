# CatalogModifierList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The [CatalogModifierList](#type-catalogmodifierlist)&#39;s name. Searchable. | 
**selection_type** | **string** | Indicates whether multiple options from the [CatalogModifierList](#type-catalogmodifierlist) can be applied to a single [CatalogItem](#type-catalogitem). See [CatalogModifierListSelectionType](#type-catalogmodifierlistselectiontype) for all possible values. | [optional] 
**modifiers** | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The options included in the [CatalogModifierList](#type-catalogmodifierlist). You must include at least one [CatalogModifier](#type-catalogmodifier). Each [CatalogObject](#type-catalogobject) must have type &#x60;MODIFIER&#x60; and contain [CatalogModifier](#type-catalogmodifier) data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


