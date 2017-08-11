# CatalogQuerySortedAttribute

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**attribute_name** | getAttributeName() | setAttributeName($value) | **string** | The attribute whose value should be used as the sort key. | 
**initial_attribute_value** | getInitialAttributeValue() | setInitialAttributeValue($value) | **string** | The first attribute value to be returned by the query. Ascending sorts will return only objects with this value or greater, while descending sorts will return only objects with this value or less. If unset, start at the beginning (for ascending sorts) or end (for descending sorts). | [optional] 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The desired [SortOrder](#type-sortorder), &#x60;\&quot;ASC\&quot;&#x60; (ascending) or &#x60;\&quot;DESC\&quot;&#x60; (descending). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

