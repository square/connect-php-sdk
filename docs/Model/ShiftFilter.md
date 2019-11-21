# ShiftFilter

### Description

Defines a filter used in a search for `Shift` records. `AND` logic is used by Square's servers to apply each filter property specified.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_ids** | getLocationIds() | setLocationIds($value) | **string[]** | Fetch shifts for the specified location. | [optional] 
**employee_ids** | getEmployeeIds() | setEmployeeIds($value) | **string[]** | Fetch shifts for the specified employee. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Fetch a &#x60;Shift&#x60; instance by &#x60;Shift.status&#x60;. See [ShiftFilterStatus](#type-shiftfilterstatus) for possible values | [optional] 
**start** | getStart() | setStart($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Fetch &#x60;Shift&#x60;s that start in the time range - Inclusive. | [optional] 
**end** | getEnd() | setEnd($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Fetch the &#x60;Shift&#x60;s that end in the time range - Inclusive. | [optional] 
**workday** | getWorkday() | setWorkday($value) | [**\SquareConnect\Model\ShiftWorkday**](ShiftWorkday.md) | Fetch the &#x60;Shift&#x60;s based on workday date range. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

