# V1Employee

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The employee&#39;s unique ID. | [optional] 
**first_name** | **string** | The employee&#39;s first name. | 
**last_name** | **string** | The employee&#39;s last name. | 
**role_ids** | **string[]** | The ids of the employee&#39;s associated roles. Currently, you can specify only one or zero roles per employee. | [optional] 
**authorized_location_ids** | **string[]** | The IDs of the locations the employee is allowed to clock in at. | [optional] 
**email** | **string** | The employee&#39;s email address. | [optional] 
**status** | **string** | CWhether the employee is ACTIVE or INACTIVE. Inactive employees cannot sign in to Square Register.Merchants update this field from the Square Dashboard. | [optional] 
**external_id** | **string** | An ID the merchant can set to associate the employee with an entity in another system. | [optional] 
**created_at** | **string** | The time when the employee entity was created, in ISO 8601 format. | [optional] 
**updated_at** | **string** | The time when the employee entity was most recently updated, in ISO 8601 format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


