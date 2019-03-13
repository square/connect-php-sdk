# CreateBreakTypeResponse

### Description

The response to the request to create a `BreakType`. Contains the created `BreakType` object. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**break_type** | getBreakType() | setBreakType($value) | [**\SquareConnect\Model\BreakType**](BreakType.md) | The &#x60;BreakType&#x60; that was created by the request. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

