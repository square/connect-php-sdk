# ListCustomersRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional] 
**sort_field** | getSortField() | setSortField($value) | **string** | Indicates how Customers should be sorted. Default: &#x60;DEFAULT&#x60;. See [CustomerSortField](#type-customersortfield) for possible values. | [optional] 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | Indicates whether Customers should be sorted in ascending (&#x60;ASC&#x60;) or descending (&#x60;DESC&#x60;) order. Default: &#x60;ASC&#x60;. See [SortOrder](#type-sortorder) for possible values. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

