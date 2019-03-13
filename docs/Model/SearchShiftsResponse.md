# SearchShiftsResponse

### Description

The response to a request for `Shift` objects. Contains the requested `Shift` objects. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**shifts** | getShifts() | setShifts($value) | [**\SquareConnect\Model\Shift[]**](Shift.md) | Shifts | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | Opaque cursor for fetching the next page. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

