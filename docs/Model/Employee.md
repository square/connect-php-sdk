# Employee

### Description

An employee created in the **Square Dashboard** account of a business.  Used by the Labor API.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | UUID for this &#x60;Employee&#x60;. | [optional] 
**first_name** | getFirstName() | setFirstName($value) | **string** | Given (first) name of the employee. | [optional] 
**last_name** | getLastName() | setLastName($value) | **string** | Family (last) name of the employee | [optional] 
**email** | getEmail() | setEmail($value) | **string** | Email of the employee | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | Phone number of the employee in E.164 format, i.e. \&quot;+12125554250\&quot; | [optional] 
**location_ids** | getLocationIds() | setLocationIds($value) | **string[]** | A list of location IDs where this employee has access. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Specifies the status of the employee being fetched. See [EmployeeStatus](#type-employeestatus) for possible values | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

