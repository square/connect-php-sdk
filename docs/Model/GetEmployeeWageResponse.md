# GetEmployeeWageResponse

### Description

A response to a request to get an `EmployeeWage`. Contains the requested `EmployeeWage` objects. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**employee_wage** | getEmployeeWage() | setEmployeeWage($value) | [**\SquareConnect\Model\EmployeeWage**](EmployeeWage.md) | The requested &#x60;EmployeeWage&#x60; object. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

