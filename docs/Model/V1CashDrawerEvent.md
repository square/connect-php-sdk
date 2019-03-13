# V1CashDrawerEvent

### Description

V1CashDrawerEvent

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The event&#39;s unique ID. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The ID of the employee that created the event. | [optional] 
**event_type** | getEventType() | setEventType($value) | **string** | The type of event that occurred. See [V1CashDrawerEventEventType](#type-v1cashdrawereventeventtype) for possible values | [optional] 
**event_money** | getEventMoney() | setEventMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that was added to or removed from the cash drawer because of the event. This value can be positive (for added money) or negative (for removed money). | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the event occurred, in ISO 8601 format. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | An optional description of the event, entered by the employee that created it. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

