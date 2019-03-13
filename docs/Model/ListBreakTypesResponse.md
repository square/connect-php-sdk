# ListBreakTypesResponse

### Description

The response to a request for a set of `BreakTypes`. Contains the requested `BreakType` objects. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**break_types** | getBreakTypes() | setBreakTypes($value) | [**\SquareConnect\Model\BreakType[]**](BreakType.md) | A page of &#x60;BreakType&#x60; results. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | Value supplied in the subsequent request to fetch the next next page of Break Type results. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

