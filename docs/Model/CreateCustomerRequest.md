# CreateCustomerRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | The idempotency key for the request. See the [Idempotency](/basics/api101/idempotency) guide for more information. | [optional] 
**given_name** | getGivenName() | setGivenName($value) | **string** | The customer&#39;s given (i.e., first) name. | [optional] 
**family_name** | getFamilyName() | setFamilyName($value) | **string** | The customer&#39;s family (i.e., last) name. | [optional] 
**company_name** | getCompanyName() | setCompanyName($value) | **string** | The name of the customer&#39;s company. | [optional] 
**nickname** | getNickname() | setNickname($value) | **string** | A nickname for the customer. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The customer&#39;s email address. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The customer&#39;s physical address. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The customer&#39;s phone number. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | An optional second ID you can set to associate the customer with an entity in another system. | [optional] 
**note** | getNote() | setNote($value) | **string** | An optional note to associate with the customer. | [optional] 
**birthday** | getBirthday() | setBirthday($value) | **string** | The customer birthday in RFC-3339 format. Year is optional, timezone and times are not allowed. Example: &#x60;0000-09-01T00:00:00-00:00&#x60; for a birthday on September 1st. &#x60;1998-09-01T00:00:00-00:00&#x60; for a birthday on September 1st 1998. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

