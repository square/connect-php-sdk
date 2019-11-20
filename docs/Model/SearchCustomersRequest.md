# SearchCustomersRequest

### Description

Defines the fields included in the request body for the SearchCustomers endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**cursor** | getCursor() | setCursor($value) | **string** | Include the pagination cursor in subsequent calls to this endpoint to retrieve the next set of results associated with the original query.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | A limit on the number of results to be returned in a single page. The limit is advisory - the implementation may return more or fewer results. If the supplied limit is negative, zero, or is higher than the maximum limit of 1,000, it will be ignored. | [optional] 
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\CustomerQuery**](CustomerQuery.md) | Query customers based on the given conditions and sort order. Calling SearchCustomers without an explicit query parameter will return all customers ordered alphabetically based on &#x60;given_name&#x60; and &#x60;family_name&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

