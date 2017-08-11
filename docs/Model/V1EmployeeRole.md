# V1EmployeeRole

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The role&#39;s unique ID, Can only be set by Square. | [optional] 
**name** | getName() | setName($value) | **string** | The role&#39;s merchant-defined name. | 
**permissions** | getPermissions() | setPermissions($value) | **string[]** | The role&#39;s permissions. | 
**is_owner** | getIsOwner() | setIsOwner($value) | **bool** | If true, employees with this role have all permissions, regardless of the values indicated in permissions. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the employee entity was created, in ISO 8601 format. Is set by Square when the Role is created. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the employee entity was most recently updated, in ISO 8601 format. Is set by Square when the Role updated. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

