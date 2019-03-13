# SearchShiftsRequest

### Description

A request for a filtered and sorted set of `Shift` objects.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\ShiftQuery**](ShiftQuery.md) | Query filters. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | number of resources in a page (200 by default). | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | opaque cursor for fetching the next page. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

