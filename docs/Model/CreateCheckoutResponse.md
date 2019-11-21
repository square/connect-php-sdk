# CreateCheckoutResponse

### Description

Defines the fields that are included in the response body of a request to the [CreateCheckout](#endpoint-createcheckout) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**checkout** | getCheckout() | setCheckout($value) | [**\SquareConnect\Model\Checkout**](Checkout.md) | The newly created checkout. If the same request was made with the same idempotency_key, this will be the checkout created with the idempotency_key. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

