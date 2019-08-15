# CompletePaymentResponse

### Description

Return value from a [CompletePayment](#endpoint-payments-completepayment) call.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request | [optional] 
**payment** | getPayment() | setPayment($value) | [**\SquareConnect\Model\Payment**](Payment.md) | The successfully completed &#x60;Payment&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

