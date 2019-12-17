# CashDrawerShiftEvent

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The unique ID of the event. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The ID of the employee that created the event. | [optional] 
**event_type** | getEventType() | setEventType($value) | **string** | The type of cash drawer shift event. See [CashDrawerEventType](#type-cashdrawereventtype) for possible values | [optional] 
**event_money** | getEventMoney() | setEventMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money that was added to or removed from the cash drawer in the event. The amount can be positive (for added money), negative (for removed money), or zero (for other tender type payments). | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The event time in ISO 8601 format. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | An optional description of the event, entered by the employee that created the event. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

