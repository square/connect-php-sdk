# V1CashDrawerEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The event&#39;s unique ID. | [optional] 
**employee_id** | **string** | The ID of the employee that created the event. | [optional] 
**event_type** | **string** | The type of event that occurred. | [optional] 
**event_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that was added to or removed from the cash drawer because of the event. This value can be positive (for added money) or negative (for removed money). | [optional] 
**created_at** | **string** | The time when the event occurred, in ISO 8601 format. | [optional] 
**description** | **string** | An optional description of the event, entered by the employee that created it. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


