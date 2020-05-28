# Customer

### Description

Represents a Square customer profile, which can have one or more cards on file associated with it.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | A unique Square-assigned ID for the customer profile. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the customer profile was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timestamp when the customer profile was last updated, in RFC 3339 format. | [optional] 
**cards** | getCards() | setCards($value) | [**\SquareConnect\Model\Card[]**](Card.md) | Payment details of cards stored on file for the customer profile. | [optional] 
**given_name** | getGivenName() | setGivenName($value) | **string** | The given (i.e., first) name associated with the customer profile. | [optional] 
**family_name** | getFamilyName() | setFamilyName($value) | **string** | The family (i.e., last) name associated with the customer profile. | [optional] 
**nickname** | getNickname() | setNickname($value) | **string** | A nickname for the customer profile. | [optional] 
**company_name** | getCompanyName() | setCompanyName($value) | **string** | A business name associated with the customer profile. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The email address associated with the customer profile. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The physical address associated with the customer profile. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The 11-digit phone number associated with the customer profile. | [optional] 
**birthday** | getBirthday() | setBirthday($value) | **string** | The birthday associated with the customer profile, in RFC-3339 format. Year is optional, timezone and times are not allowed. For example: &#x60;0000-09-01T00:00:00-00:00&#x60; indicates a birthday on September 1st. &#x60;1998-09-01T00:00:00-00:00&#x60; indications a birthday on September 1st __1998__. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | An optional, second ID used to associate the customer profile with an entity in another system. | [optional] 
**note** | getNote() | setNote($value) | **string** | A custom note associated with the customer profile. | [optional] 
**preferences** | getPreferences() | setPreferences($value) | [**\SquareConnect\Model\CustomerPreferences**](CustomerPreferences.md) | Represents general customer preferences. | [optional] 
**groups** | getGroups() | setGroups($value) | [**\SquareConnect\Model\CustomerGroupInfo[]**](CustomerGroupInfo.md) | The customer groups and segments the customer belongs to. This deprecated field has been replaced with  the dedicated &#x60;group_ids&#x60; for customer groups and the dedicated &#x60;segment_ids&#x60; field for customer segments. You can retrieve information about a given customer group and segment respectively using the Customer Groups API and Customer Segments API. | [optional] [deprecated]
**creation_source** | getCreationSource() | setCreationSource($value) | **string** | A creation source represents the method used to create the customer profile. See [CustomerCreationSource](#type-customercreationsource) for possible values | [optional] 
**group_ids** | getGroupIds() | setGroupIds($value) | **string[]** | The IDs of customer groups the customer belongs to. | [optional] [beta]
**segment_ids** | getSegmentIds() | setSegmentIds($value) | **string[]** | The IDs of segments the customer belongs to. | [optional] [beta]

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

