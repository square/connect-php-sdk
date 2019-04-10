# RetrieveCustomerResponse

### Description

Defines the fields that are included in the response body of a request to the RetrieveCustomer endpoint.  One of `errors` or `customer` is present in a given response (never both).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**customer** | getCustomer() | setCustomer($value) | [**\SquareConnect\Model\Customer**](Customer.md) | The requested customer. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

