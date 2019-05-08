# BusinessHoursPeriod

### Description

Represents a period of time during which a business location is open.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**day_of_week** | getDayOfWeek() | setDayOfWeek($value) | **string** | The day of week for this time period. See [DayOfWeek](#type-dayofweek) for possible values | [optional] 
**start_local_time** | getStartLocalTime() | setStartLocalTime($value) | **string** | The start time of a business hours period, specified in local time using partial-time RFC3339 format. | [optional] 
**end_local_time** | getEndLocalTime() | setEndLocalTime($value) | **string** | The end time of a business hours period, specified in local time using partial-time RFC3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

