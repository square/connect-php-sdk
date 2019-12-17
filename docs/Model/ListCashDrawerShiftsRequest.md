# ListCashDrawerShiftsRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the location to query for a list of cash drawer shifts. | 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The order in which cash drawer shifts are listed in the response, based on their opened_at field. Default value: ASC See [SortOrder](#type-sortorder) for possible values | [optional] 
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | The inclusive start time of the query on opened_at, in ISO 8601 format. | [optional] 
**end_time** | getEndTime() | setEndTime($value) | **string** | The exclusive end date of the query on opened_at, in ISO 8601 format. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | Number of cash drawer shift events in a page of results (200 by default, 1000 max). | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | Opaque cursor for fetching the next page of results. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

