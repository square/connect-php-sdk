# CustomerSort

### Description

Indicates the field to use for sorting customer profiles. For example, by total money spent with the merchant or the date of their first purchase.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**field** | getField() | setField($value) | **string** | The field to sort the results on. It could be the total money spent at the merchant, the date of the first visit (etc). See [CustomerSortField](#type-customersortfield) for possible values | [optional] 
**order** | getOrder() | setOrder($value) | **string** | Indicates the order in which results should be displayed based on the value of the sort field. String comparisons use standard alphabetic comparison to determine order. Strings representing numbers are sorted as strings. See [SortOrder](#type-sortorder) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

