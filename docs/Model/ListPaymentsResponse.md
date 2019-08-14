# ListPaymentsResponse

### Description

Defines the fields that are included in the response body of a request to the [ListPayments](#endpoint-payments-listpayments) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**payments** | getPayments() | setPayments($value) | [**\SquareConnect\Model\Payment[]**](Payment.md) | The requested list of &#x60;Payment&#x60;s. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If empty, this is the final response.  See [Pagination](/basics/api101/pagination) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

