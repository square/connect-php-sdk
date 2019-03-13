# UpdateWorkweekConfigResponse

### Description

The response to a request to update a `WorkweekConfig` object. Contains the updated `WorkweekConfig` object. May contain a set of `Error` objects if the request resulted in errors.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**workweek_config** | getWorkweekConfig() | setWorkweekConfig($value) | [**\SquareConnect\Model\WorkweekConfig**](WorkweekConfig.md) | The response object. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

