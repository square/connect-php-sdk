# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The customer&#39;s unique ID. | 
**created_at** | **string** | The time when the customer was created, in RFC 3339 format. | 
**updated_at** | **string** | The time when the customer was last updated, in RFC 3339 format. | 
**cards** | [**\SquareConnect\Model\Card[]**](Card.md) | The non-confidential details of the customer&#39;s cards on file. | [optional] 
**given_name** | **string** | The customer&#39;s given (i.e., first) name. | [optional] 
**family_name** | **string** | The customer&#39;s family (i.e., last) name. | [optional] 
**nickname** | **string** | The customer&#39;s nickname. | [optional] 
**company_name** | **string** | The name of the customer&#39;s company. | [optional] 
**email_address** | **string** | The customer&#39;s email address. | [optional] 
**address** | [**\SquareConnect\Model\Address**](Address.md) | The customer&#39;s physical address. | [optional] 
**phone_number** | **string** | The customer&#39;s phone number. | [optional] 
**reference_id** | **string** | A second ID you can set to associate the customer with an entity in another system. | [optional] 
**note** | **string** | A note to associate with the customer. | [optional] 
**preferences** | [**\SquareConnect\Model\CustomerPreferences**](CustomerPreferences.md) | The customer&#39;s preferences. | [optional] 
**groups** | [**\SquareConnect\Model\CustomerGroupInfo[]**](CustomerGroupInfo.md) | The groups the customer belongs to. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


