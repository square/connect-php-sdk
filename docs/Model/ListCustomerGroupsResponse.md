# ListCustomerGroupsResponse

### Description

Defines the fields that are included in the response body of a request to the [ListCustomerGroups](#endpoint-listcustomergroups) endpoint.  One of `errors` or `groups` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**groups** | getGroups() | setGroups($value) | [**\SquareConnect\Model\CustomerGroup[]**](CustomerGroup.md) | A list of customer groups belonging to the current merchant. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor to retrieve the next set of results for your original query to the endpoint. This value is present only if the request succeeded and additional results are available.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

