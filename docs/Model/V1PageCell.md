# V1PageCell

### Description

V1PageCell
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**page_id** | getPageId() | setPageId($value) | **string** | The unique identifier of the page the cell is included on. | [optional] 
**row** | getRow() | setRow($value) | **int** | The row of the cell. Always an integer between 0 and 4, inclusive. | [optional] 
**column** | getColumn() | setColumn($value) | **int** | The column of the cell. Always an integer between 0 and 4, inclusive. | [optional] 
**object_type** | getObjectType() | setObjectType($value) | **string** | The type of entity represented in the cell (ITEM, DISCOUNT, CATEGORY, or PLACEHOLDER). See [V1PageCellObjectType](#type-v1pagecellobjecttype) for possible values | [optional] 
**object_id** | getObjectId() | setObjectId($value) | **string** | The unique identifier of the entity represented in the cell. Not present for cells with an object_type of PLACEHOLDER. | [optional] 
**placeholder_type** | getPlaceholderType() | setPlaceholderType($value) | **string** | For a cell with an object_type of PLACEHOLDER, this value indicates the cell&#39;s special behavior. See [V1PageCellPlaceholderType](#type-v1pagecellplaceholdertype) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

