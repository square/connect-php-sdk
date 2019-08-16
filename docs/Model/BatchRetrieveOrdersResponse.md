# BatchRetrieveOrdersResponse

### Description

Defines the fields that are included in the response body of a request to the BatchRetrieveOrders endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**orders** | getOrders() | setOrders($value) | [**\SquareConnect\Model\Order[]**](Order.md) | The requested orders. This will omit any requested orders that do not exist. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

