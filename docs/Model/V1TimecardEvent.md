# V1TimecardEvent

### Description

V1TimecardEvent

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The event&#39;s unique ID. | [optional] 
**event_type** | getEventType() | setEventType($value) | **string** | The ID of the timecard to list events for. See [V1TimecardEventEventType](#type-v1timecardeventeventtype) for possible values | [optional] 
**clockin_time** | getClockinTime() | setClockinTime($value) | **string** | The time the employee clocked in, in ISO 8601 format. | [optional] 
**clockout_time** | getClockoutTime() | setClockoutTime($value) | **string** | The time the employee clocked out, in ISO 8601 format. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the event was created, in ISO 8601 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

