# V1Timecard

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The timecard&#39;s unique ID. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The ID of the employee the timecard is associated with. | 
**deleted** | getDeleted() | setDeleted($value) | **bool** | If true, the timecard was deleted by the merchant, and it is no longer valid. | [optional] 
**clockin_time** | getClockinTime() | setClockinTime($value) | **string** | The clock-in time for the timecard, in ISO 8601 format. | [optional] 
**clockout_time** | getClockoutTime() | setClockoutTime($value) | **string** | The clock-out time for the timecard, in ISO 8601 format. Provide this value only if importing timecard information from another system. | [optional] 
**clockin_location_id** | getClockinLocationId() | setClockinLocationId($value) | **string** | The ID of the location the employee clocked in from, if any. | [optional] 
**clockout_location_id** | getClockoutLocationId() | setClockoutLocationId($value) | **string** | The ID of the location the employee clocked out from. Provide this value only if importing timecard information from another system. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the timecard was created, in ISO 8601 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the timecard was most recently updated, in ISO 8601 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

