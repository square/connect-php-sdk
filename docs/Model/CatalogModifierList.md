# CatalogModifierList

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The [CatalogModifierList](#type-catalogmodifierlist)&#39;s name. Searchable. This field has max length of 255 Unicode code points. | [optional] 
**selection_type** | getSelectionType() | setSelectionType($value) | **string** | Indicates whether multiple options from the [CatalogModifierList](#type-catalogmodifierlist) can be applied to a single [CatalogItem](#type-catalogitem). See [CatalogModifierListSelectionType](#type-catalogmodifierlistselectiontype) for all possible values. | [optional] 
**modifiers** | getModifiers() | setModifiers($value) | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The options included in the [CatalogModifierList](#type-catalogmodifierlist). You must include at least one [CatalogModifier](#type-catalogmodifier). Each [CatalogObject](#type-catalogobject) must have type &#x60;MODIFIER&#x60; and contain [CatalogModifier](#type-catalogmodifier) data. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

