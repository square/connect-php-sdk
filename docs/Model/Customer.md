# Customer

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The customer&#39;s unique ID. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the customer was created, in RFC 3339 format. | 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The time when the customer was last updated, in RFC 3339 format. | 
**cards** | getCards() | setCards($value) | [**\SquareConnect\Model\Card[]**](Card.md) | The non-confidential details of the customer&#39;s cards on file. | [optional] 
**given_name** | getGivenName() | setGivenName($value) | **string** | The customer&#39;s given (i.e., first) name. | [optional] 
**family_name** | getFamilyName() | setFamilyName($value) | **string** | The customer&#39;s family (i.e., last) name. | [optional] 
**nickname** | getNickname() | setNickname($value) | **string** | The customer&#39;s nickname. | [optional] 
**company_name** | getCompanyName() | setCompanyName($value) | **string** | The name of the customer&#39;s company. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The customer&#39;s email address. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The customer&#39;s physical address. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The customer&#39;s phone number. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | A second ID you can set to associate the customer with an entity in another system. | [optional] 
**note** | getNote() | setNote($value) | **string** | A note to associate with the customer. | [optional] 
**preferences** | getPreferences() | setPreferences($value) | [**\SquareConnect\Model\CustomerPreferences**](CustomerPreferences.md) | The customer&#39;s preferences. | [optional] 
**groups** | getGroups() | setGroups($value) | [**\SquareConnect\Model\CustomerGroupInfo[]**](CustomerGroupInfo.md) | The groups the customer belongs to. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

