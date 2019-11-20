# ListEmployeesRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | Filter employees returned to only those that are associated with the specified location. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Specifies the EmployeeStatus to filter the employee by. See [EmployeeStatus](#type-employeestatus) for possible values | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The number of employees to be returned on each page. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The token required to retrieve the specified page of results. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

