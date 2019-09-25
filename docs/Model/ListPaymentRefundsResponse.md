# ListPaymentRefundsResponse

### Description

Defines the fields that are included in the response body of a request to the [ListPaymentRefunds](#endpoint-refunds-listpaymentrefunds) endpoint.  One of `errors` or `refunds` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**refunds** | getRefunds() | setRefunds($value) | [**\SquareConnect\Model\PaymentRefund[]**](PaymentRefund.md) | The list of requested refunds. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If empty, this is the final response.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

