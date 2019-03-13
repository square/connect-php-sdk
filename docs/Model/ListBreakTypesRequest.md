# ListBreakTypesRequest

### Description

A request for a filtered set of `BreakType` objects

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | Filter Break Types returned to only those that are associated with the specified location. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | Maximum number of Break Types to return per page. Can range between 1 and 200. The default is the maximum at 200. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | Pointer to the next page of Break Type results to fetch. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

