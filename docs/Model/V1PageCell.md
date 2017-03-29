# V1PageCell

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_id** | **string** | The unique identifier of the page the cell is included on. | [optional] 
**row** | **int** | The row of the cell. Always an integer between 0 and 4, inclusive. | [optional] 
**column** | **int** | The column of the cell. Always an integer between 0 and 4, inclusive. | [optional] 
**object_type** | **string[]** | The type of entity represented in the cell (ITEM, DISCOUNT, CATEGORY, or PLACEHOLDER). | [optional] 
**object_id** | **string** | The unique identifier of the entity represented in the cell. Not present for cells with an object_type of PLACEHOLDER. | [optional] 
**placeholder_type** | **string[]** | For a cell with an object_type of PLACEHOLDER, this value indicates the cell&#39;s special behavior. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


