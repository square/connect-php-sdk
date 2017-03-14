# V1UpdateOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action to perform on the order (COMPLETE, CANCEL, or REFUND). | 
**shipped_tracking_number** | **string** | The tracking number of the shipment associated with the order. Only valid if action is COMPLETE. | [optional] 
**completed_note** | **string** | A merchant-specified note about the completion of the order. Only valid if action is COMPLETE. | [optional] 
**refunded_note** | **string** | A merchant-specified note about the refunding of the order. Only valid if action is REFUND. | [optional] 
**canceled_note** | **string** | A merchant-specified note about the canceling of the order. Only valid if action is CANCEL. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


