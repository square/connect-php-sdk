# SearchCustomersResponse

### Description

Defines the fields that are included in the response body of a request to the SearchCustomers endpoint.  One of `errors` or `customers` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**customers** | getCustomers() | setCustomers($value) | [**\SquareConnect\Model\Customer[]**](Customer.md) | An array of &#x60;Customer&#x60; objects that match a query. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor that can be used during subsequent calls to SearchCustomers to retrieve the next set of results associated with the original query. Pagination cursors are only present when a request succeeds and additional results are available.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

