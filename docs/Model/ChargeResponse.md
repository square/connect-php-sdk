# ChargeResponse

### Description

Defines the fields that are included in the response body of a request to the [Charge](#endpoint-charge) endpoint.  One of `errors` or `transaction` is present in a given response (never both).
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**transaction** | getTransaction() | setTransaction($value) | [**\SquareConnect\Model\Transaction**](Transaction.md) | The created transaction. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

