# SearchOrdersSort

### Description

Sorting criteria for a SearchOrders request. Results can only be sorted by a timestamp field.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**sort_field** | getSortField() | setSortField($value) | **string** | The field to sort by.  __Important:__ When using a &#x60;DateTimeFilter&#x60;, &#x60;sort_field&#x60; must match the timestamp field that the DateTimeFilter uses to filter. For example, If you set your &#x60;sort_field&#x60; to &#x60;CLOSED_AT&#x60; and you use a DateTimeFilter, your DateTimeFilter must filter for orders by their &#x60;CLOSED_AT&#x60; date. If this field does not match the timestamp field in &#x60;DateTimeFilter&#x60;, SearchOrders will return an error.  Default: &#x60;CREATED_AT&#x60;. See [SearchOrdersSortField](#type-searchorderssortfield) for possible values | 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The chronological order in which results are returned. Defaults to &#x60;DESC&#x60;. See [SortOrder](#type-sortorder) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

