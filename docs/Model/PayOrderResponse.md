# PayOrderResponse

### Description

Defines the fields that are included in the response body of a request to the [PayOrder](#endpoint-payorder) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**order** | getOrder() | setOrder($value) | [**\SquareConnect\Model\Order**](Order.md) | The paid, updated &#x60;order&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

