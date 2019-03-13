# V1Employee

### Description

Represents one of a business's employees.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The employee&#39;s unique ID. | [optional] 
**first_name** | getFirstName() | setFirstName($value) | **string** | The employee&#39;s first name. | 
**last_name** | getLastName() | setLastName($value) | **string** | The employee&#39;s last name. | 
**role_ids** | getRoleIds() | setRoleIds($value) | **string[]** | The ids of the employee&#39;s associated roles. Currently, you can specify only one or zero roles per employee. | [optional] 
**authorized_location_ids** | getAuthorizedLocationIds() | setAuthorizedLocationIds($value) | **string[]** | The IDs of the locations the employee is allowed to clock in at. | [optional] 
**email** | getEmail() | setEmail($value) | **string** | The employee&#39;s email address. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | CWhether the employee is ACTIVE or INACTIVE. Inactive employees cannot sign in to Square Register.Merchants update this field from the Square Dashboard. See [V1EmployeeStatus](#type-v1employeestatus) for possible values | [optional] 
**external_id** | getExternalId() | setExternalId($value) | **string** | An ID the merchant can set to associate the employee with an entity in another system. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the employee entity was created, in ISO 8601 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the employee entity was most recently updated, in ISO 8601 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

