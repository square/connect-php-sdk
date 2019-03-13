# V1Timecard

### Description

Represents a timecard for an employee.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The timecard&#39;s unique ID. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The ID of the employee the timecard is associated with. | 
**deleted** | getDeleted() | setDeleted($value) | **bool** | If true, the timecard was deleted by the merchant, and it is no longer valid. | [optional] 
**clockin_time** | getClockinTime() | setClockinTime($value) | **string** | The clock-in time for the timecard, in ISO 8601 format. | [optional] 
**clockout_time** | getClockoutTime() | setClockoutTime($value) | **string** | The clock-out time for the timecard, in ISO 8601 format. Provide this value only if importing timecard information from another system. | [optional] 
**clockin_location_id** | getClockinLocationId() | setClockinLocationId($value) | **string** | The ID of the location the employee clocked in from. We strongly reccomend providing a clockin_location_id. Square uses the clockin_location_id to determine a timecard’s timezone and overtime rules. | [optional] 
**clockout_location_id** | getClockoutLocationId() | setClockoutLocationId($value) | **string** | The ID of the location the employee clocked out from. Provide this value only if importing timecard information from another system. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the timecard was created, in ISO 8601 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the timecard was most recently updated, in ISO 8601 format. | [optional] 
**regular_seconds_worked** | getRegularSecondsWorked() | setRegularSecondsWorked($value) | **float** | The total number of regular (non-overtime) seconds worked in the timecard. | [optional] 
**overtime_seconds_worked** | getOvertimeSecondsWorked() | setOvertimeSecondsWorked($value) | **float** | The total number of overtime seconds worked in the timecard. | [optional] 
**doubletime_seconds_worked** | getDoubletimeSecondsWorked() | setDoubletimeSecondsWorked($value) | **float** | The total number of doubletime seconds worked in the timecard. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

