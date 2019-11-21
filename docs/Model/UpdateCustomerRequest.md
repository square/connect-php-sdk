# UpdateCustomerRequest

### Description

Defines the body parameters that can be provided in a request to the UpdateCustomer endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**given_name** | getGivenName() | setGivenName($value) | **string** | The given (i.e., first) name associated with the customer profile. | [optional] 
**family_name** | getFamilyName() | setFamilyName($value) | **string** | The family (i.e., last) name associated with the customer profile. | [optional] 
**company_name** | getCompanyName() | setCompanyName($value) | **string** | A business name associated with the customer profile. | [optional] 
**nickname** | getNickname() | setNickname($value) | **string** | A nickname for the customer profile. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The email address associated with the customer profile. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The physical address associated with the customer profile. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The 11-digit phone number associated with the customer profile. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | An optional, second ID used to associate the customer profile with an entity in another system. | [optional] 
**note** | getNote() | setNote($value) | **string** | A custom note associated with the customer profile. | [optional] 
**birthday** | getBirthday() | setBirthday($value) | **string** | The birthday associated with the customer profile, in RFC-3339 format. Year is optional, timezone and times are not allowed. For example: &#x60;0000-09-01T00:00:00-00:00&#x60; indicates a birthday on September 1st. &#x60;1998-09-01T00:00:00-00:00&#x60; indications a birthday on September 1st __1998__. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

