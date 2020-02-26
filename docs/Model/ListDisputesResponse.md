# ListDisputesResponse

### Description

Defines fields in a ListDisputes response.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**disputes** | getDisputes() | setDisputes($value) | [**\SquareConnect\Model\Dispute[]**](Dispute.md) | The list of Disputes. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If unset, this is the final response. For more information, see [Paginating](https://developer.squareup.com/docs/basics/api101/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

