# ShiftWage

### Description

The hourly wage rate used to compensate an employee for this shift.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**title** | getTitle() | setTitle($value) | **string** | The name of the job performed during this shift. Square labor-reporting UIs may group shifts together by title. | [optional] 
**hourly_rate** | getHourlyRate() | setHourlyRate($value) | [**\SquareConnect\Model\Money**](Money.md) | Can be a custom-set hourly wage or the calculated effective hourly wage based on annual wage and hours worked per week. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

