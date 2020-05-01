# OrderFulfillmentUpdatedUpdate

### Description

Information about fulfillment updates.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**fulfillment_uid** | getFulfillmentUid() | setFulfillmentUid($value) | **string** | Unique ID that identifies the fulfillment only within this order. | [optional] 
**old_state** | getOldState() | setOldState($value) | **string** | The state of the fulfillment before the change. Will not be populated if the fulfillment is created with this new Order version. See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values | [optional] 
**new_state** | getNewState() | setNewState($value) | **string** | The state of the fulfillment after the change. May be equal to old_state if a non-state field was changed on the fulfillment (e.g. tracking number). See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

