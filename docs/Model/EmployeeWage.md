# EmployeeWage

### Description

The hourly wage rate that an employee will earn on a `Shift` for doing the job specified by the `title` property of this object.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | UUID for this object. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The &#x60;Employee&#x60; that this wage is assigned to. | 
**title** | getTitle() | setTitle($value) | **string** | The job title that this wage relates to. | [optional] 
**hourly_rate** | getHourlyRate() | setHourlyRate($value) | [**\SquareConnect\Model\Money**](Money.md) | Can be a custom-set hourly wage or the calculated effective hourly wage based on annual wage and hours worked per week. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

