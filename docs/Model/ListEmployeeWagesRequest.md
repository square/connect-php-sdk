# ListEmployeeWagesRequest

### Description

A request for a set of `EmployeeWage` objects

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | Filter wages returned to only those that are associated with the specified employee. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | Maximum number of Employee Wages to return per page. Can range between 1 and 200. The default is the maximum at 200. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | Pointer to the next page of Employee Wage results to fetch. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

