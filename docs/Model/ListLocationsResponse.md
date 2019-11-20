# ListLocationsResponse

### Description

Defines the fields that are included in the response body of a request to the __ListLocations__ endpoint.  One of `errors` or `locations` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**locations** | getLocations() | setLocations($value) | [**\SquareConnect\Model\Location[]**](Location.md) | The business locations. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

