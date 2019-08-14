# GetPaymentRefundResponse

### Description

Defines the fields that are included in the response body of a request to the [GetRefund](#endpoint-refunds-getpaymentrefund) endpoint.  Note: if there are errors processing the request, the refund field may not be present, or it may be present in a FAILED state.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**refund** | getRefund() | setRefund($value) | [**\SquareConnect\Model\PaymentRefund**](PaymentRefund.md) | The requested &#x60;PaymentRefund&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

