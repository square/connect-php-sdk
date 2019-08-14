# OrderFulfillmentPickupDetails

### Description

Contains details necessary to fulfill a pickup order.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**recipient** | getRecipient() | setRecipient($value) | [**\SquareConnect\Model\OrderFulfillmentRecipient**](OrderFulfillmentRecipient.md) | Information on the person meant to pick up this fulfillment from a physical location. | [optional] 
**expires_at** | getExpiresAt() | setExpiresAt($value) | **string** | The [timestamp](#workingwithdates) indicating when this fulfillment will expire if it is not accepted. Must be in RFC 3339 format e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. Expiration time can only be set up to 7 days in the future. If &#x60;expires_at&#x60; is not set, this pickup fulfillment will be automatically accepted when placed. | [optional] 
**auto_complete_duration** | getAutoCompleteDuration() | setAutoCompleteDuration($value) | **string** | The duration of time after which an open and accepted pickup fulfillment will automatically move to the &#x60;COMPLETED&#x60; state. Must be in RFC3339 duration format e.g., \&quot;P1W3D\&quot;.  If not set, this pickup fulfillment will remain accepted until it is canceled or completed. | [optional] 
**schedule_type** | getScheduleType() | setScheduleType($value) | **string** | The schedule type of the pickup fulfillment. Defaults to &#x60;SCHEDULED&#x60;. See [OrderFulfillmentPickupDetailsScheduleType](#type-orderfulfillmentpickupdetailsscheduletype) for possible values | [optional] 
**pickup_at** | getPickupAt() | setPickupAt($value) | **string** | The [timestamp](#workingwithdates) that represents the start of the pickup window. Must be in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. For fulfillments with the schedule type &#x60;ASAP&#x60;, this is automatically set to the current time plus the expected duration to prepare the fulfillment. | [optional] 
**pickup_window_duration** | getPickupWindowDuration() | setPickupWindowDuration($value) | **string** | The window of time in which the order should be picked up after the &#x60;pickup_at&#x60; timestamp. Must be in RFC3339 duration format, e.g., \&quot;P1W3D\&quot;. Can be used as an informational guideline for merchants. | [optional] 
**prep_time_duration** | getPrepTimeDuration() | setPrepTimeDuration($value) | **string** | The duration of time it takes to prepare this fulfillment. Must be in RFC3339 duration format, e.g., \&quot;P1W3D\&quot;. | [optional] 
**note** | getNote() | setNote($value) | **string** | A note meant to provide additional instructions about the pickup fulfillment displayed in the Square Point of Sale and set by the API. | [optional] 
**placed_at** | getPlacedAt() | setPlacedAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment was placed. Must be in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**accepted_at** | getAcceptedAt() | setAcceptedAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment was accepted. In RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**rejected_at** | getRejectedAt() | setRejectedAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment was rejected. In RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**ready_at** | getReadyAt() | setReadyAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment is marked as ready for pickup. In RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**expired_at** | getExpiredAt() | setExpiredAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment expired. In RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**picked_up_at** | getPickedUpAt() | setPickedUpAt($value) | **string** | The [timestamp](#workingwithdates) indicating when the fulfillment was picked up by the recipient. In RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**canceled_at** | getCanceledAt() | setCanceledAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was canceled. | [optional] 
**cancel_reason** | getCancelReason() | setCancelReason($value) | **string** | A description of why the pickup was canceled. Max length: 100 characters. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

