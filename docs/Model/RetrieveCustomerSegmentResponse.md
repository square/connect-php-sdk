# RetrieveCustomerSegmentResponse

### Description

Defines the fields included in the response body for requests to __RetrieveCustomerSegment__.  One of `errors` or `segment` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**segment** | getSegment() | setSegment($value) | [**\SquareConnect\Model\CustomerSegment**](CustomerSegment.md) | The retrieved customer segment. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

