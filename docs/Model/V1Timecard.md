# V1Timecard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The timecard&#39;s unique ID. | [optional] 
**employee_id** | **string** | The ID of the employee the timecard is associated with. | 
**deleted** | **bool** | If true, the timecard was deleted by the merchant, and it is no longer valid. | [optional] 
**clockin_time** | **string** | The clock-in time for the timecard, in ISO 8601 format. | [optional] 
**clockout_time** | **string** | The clock-out time for the timecard, in ISO 8601 format. Provide this value only if importing timecard information from another system. | [optional] 
**clockin_location_id** | **string** | The ID of the location the employee clocked in from, if any. | [optional] 
**clockout_location_id** | **string** | The ID of the location the employee clocked out from. Provide this value only if importing timecard information from another system. | [optional] 
**created_at** | **string** | The time when the timecard was created, in ISO 8601 format. | [optional] 
**updated_at** | **string** | The time when the timecard was most recently updated, in ISO 8601 format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


