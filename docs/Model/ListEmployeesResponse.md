# ListEmployeesResponse

### Description

Defines the fields that are included in the response body of a request to the ListEmployees endpoint.  One of `errors` or `employees` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**employees** | getEmployees() | setEmployees($value) | [**\SquareConnect\Model\Employee[]**](Employee.md) | List of employees returned from the request. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The token to be used to retrieve the next page of results. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

