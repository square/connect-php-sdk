# Employee

### Description

An employee object that is used by the external API.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | UUID for this object. | [optional] 
**first_name** | getFirstName() | setFirstName($value) | **string** | The employee&#39;s first name. | [optional] 
**last_name** | getLastName() | setLastName($value) | **string** | The employee&#39;s last name. | [optional] 
**email** | getEmail() | setEmail($value) | **string** | The employee&#39;s email address | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The employee&#39;s phone number in E.164 format, i.e. \&quot;+12125554250\&quot; | [optional] 
**location_ids** | getLocationIds() | setLocationIds($value) | **string[]** | A list of location IDs where this employee has access to. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Specifies the status of the employees being fetched. See [EmployeeStatus](#type-employeestatus) for possible values | [optional] 
**is_owner** | getIsOwner() | setIsOwner($value) | **bool** | Whether this employee is the owner of the merchant. Each merchant has one owner employee, and that employee has full authority over the account. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

