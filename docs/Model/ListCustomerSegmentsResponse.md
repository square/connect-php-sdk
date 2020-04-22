# ListCustomerSegmentsResponse

### Description

Defines the fields included in the response body for requests to __ListCustomerSegments__.  One of `errors` or `segments` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**segments** | getSegments() | setSegments($value) | [**\SquareConnect\Model\CustomerSegment[]**](CustomerSegment.md) | The list of customer segments belonging to the associated Square account. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor to be used in subsequent calls to __ListCustomerSegments__ to retrieve the next set of query results. Only present only if the request succeeded and additional results are available.  See the [Pagination guide](https://developer.squareup.com/docs/docs/working-with-apis/pagination) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

