# ListMerchantsResponse

### Description

The response object returned by the [ListMerchant](#endpoint-listmerchant) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**merchant** | getMerchant() | setMerchant($value) | [**\SquareConnect\Model\Merchant[]**](Merchant.md) | The requested &#x60;Merchant&#x60; entities. | [optional] 
**cursor** | getCursor() | setCursor($value) | **int** | If the  response is truncated, the cursor to use in next  request to fetch next set of objects. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

