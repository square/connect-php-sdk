# CustomerSort

### Description

Indicates the field to use for sorting customer profiles.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**field** | getField() | setField($value) | **string** | Indicates the information used to sort the results. For example, by creation date.  Default: &#x60;DEFAULT&#x60;. See [CustomerSortField](#type-customersortfield) for possible values | [optional] 
**order** | getOrder() | setOrder($value) | **string** | Indicates the order in which results should be displayed based on the value of the sort field. String comparisons use standard alphabetic comparison to determine order. Strings representing numbers are sorted as strings.  Default: &#x60;ASC&#x60;. See [SortOrder](#type-sortorder) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

