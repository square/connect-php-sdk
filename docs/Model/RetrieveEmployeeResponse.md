# RetrieveEmployeeResponse

### Description

Defines the fields that are included in the response body of a request to the RetrieveEmployee endpoint.  One of `errors` or `employee` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**employee** | getEmployee() | setEmployee($value) | [**\SquareConnect\Model\Employee**](Employee.md) | The response object. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

