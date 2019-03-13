# V1ListCashDrawerShiftsRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order** | getOrder() | setOrder($value) | **string** | The order in which cash drawer shifts are listed in the response, based on their created_at field. Default value: ASC See [SortOrder](#type-sortorder) for possible values | [optional] 
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time minus 90 days. | [optional] 
**end_time** | getEndTime() | setEndTime($value) | **string** | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

