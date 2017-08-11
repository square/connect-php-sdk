# V1UpdateOrderRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**action** | getAction() | setAction($value) | **string** | The action to perform on the order (COMPLETE, CANCEL, or REFUND). | 
**shipped_tracking_number** | getShippedTrackingNumber() | setShippedTrackingNumber($value) | **string** | The tracking number of the shipment associated with the order. Only valid if action is COMPLETE. | [optional] 
**completed_note** | getCompletedNote() | setCompletedNote($value) | **string** | A merchant-specified note about the completion of the order. Only valid if action is COMPLETE. | [optional] 
**refunded_note** | getRefundedNote() | setRefundedNote($value) | **string** | A merchant-specified note about the refunding of the order. Only valid if action is REFUND. | [optional] 
**canceled_note** | getCanceledNote() | setCanceledNote($value) | **string** | A merchant-specified note about the canceling of the order. Only valid if action is CANCEL. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

