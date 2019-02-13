# OrderFulfillmentPickupDetails

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**recipient** | getRecipient() | setRecipient($value) | [**\SquareConnect\Model\OrderFulfillmentRecipient**](OrderFulfillmentRecipient.md) | The recipient of this pickup fulfillment. | [optional] 
**expires_at** | getExpiresAt() | setExpiresAt($value) | **string** | The expiry [timestamp](#workingwithdates) in RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. This timestamp indicates when the pickup fulfillment will expire if it is not accepted by the merchant. Expiration time can only be set up to 7 days in the future. If not set, this pickup fulfillment will be automatically accepted when placed. | [optional] 
**auto_complete_duration** | getAutoCompleteDuration() | setAutoCompleteDuration($value) | **string** | The auto completion duration in RFC3339 duration format, e.g., \&quot;P1W3D\&quot;. If set, an open and accepted pickup fulfillment will automatically move to the &#x60;COMPLETED&#x60; state after this period of time. If not set, this pickup fulfillment will remain accepted until it is canceled or completed. | [optional] 
**schedule_type** | getScheduleType() | setScheduleType($value) | **string** | The schedule type of the pickup fulfillment. Defaults to &#x60;SCHEDULED&#x60;. | [optional] 
**pickup_at** | getPickupAt() | setPickupAt($value) | **string** | The pickup [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. For fulfillments with the schedule type &#x60;ASAP&#x60;, this is automatically set to the current time plus the expected duration to prepare the fulfillment. This represents the start of the pickup window. | [optional] 
**pickup_window_duration** | getPickupWindowDuration() | setPickupWindowDuration($value) | **string** | The pickup window duration in RFC3339 duration format, e.g., \&quot;P1W3D\&quot;. This duration represents the window of time for which the order should be picked up after the &#x60;pickup_at&#x60; time. Can be used as an informational guideline for merchants. | [optional] 
**prep_time_duration** | getPrepTimeDuration() | setPrepTimeDuration($value) | **string** | The preparation time duration in RFC3339 duration format, e.g., \&quot;P1W3D\&quot;. This duration indicates how long it takes the merchant to prepare this fulfillment. | [optional] 
**note** | getNote() | setNote($value) | **string** | A general note about the pickup fulfillment.  Notes are useful for providing additional instructions and are displayed in Square apps. | [optional] 
**placed_at** | getPlacedAt() | setPlacedAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was placed. | [optional] 
**accepted_at** | getAcceptedAt() | setAcceptedAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was accepted by the merchant. | [optional] 
**rejected_at** | getRejectedAt() | setRejectedAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was rejected. | [optional] 
**ready_at** | getReadyAt() | setReadyAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the merchant set the fulfillment as ready for pickup. | [optional] 
**expired_at** | getExpiredAt() | setExpiredAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment expired. | [optional] 
**picked_up_at** | getPickedUpAt() | setPickedUpAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was picked up by the recipient. | [optional] 
**canceled_at** | getCanceledAt() | setCanceledAt($value) | **string** | The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;, indicating when the fulfillment was canceled by the merchant or buyer. | [optional] 
**cancel_reason** | getCancelReason() | setCancelReason($value) | **string** | A description of why the pickup was canceled. Max length is 100 characters. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

