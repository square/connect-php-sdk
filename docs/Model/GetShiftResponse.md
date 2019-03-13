# GetShiftResponse

### Description

A response to request to get a `Shift`. Contains the requested `Shift` object. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**shift** | getShift() | setShift($value) | [**\SquareConnect\Model\Shift**](Shift.md) | The requested &#x60;Shift&#x60;. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

