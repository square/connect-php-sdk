# RetrieveInventoryChangesResponse

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**changes** | getChanges() | setChanges($value) | [**\SquareConnect\Model\InventoryChange[]**](InventoryChange.md) | The set of inventory changes for the requested object and locations. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If unset, this is the final response.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

