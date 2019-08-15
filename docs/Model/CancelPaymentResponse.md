# CancelPaymentResponse

### Description

Return value from the [CancelPayment](#endpoint-payments-cancelpayment) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**payment** | getPayment() | setPayment($value) | [**\SquareConnect\Model\Payment**](Payment.md) | The successfully canceled &#x60;Payment&#x60; object. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

