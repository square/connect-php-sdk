# V1AdjustInventoryRequest

### Description

V1AdjustInventoryRequest
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**quantity_delta** | getQuantityDelta() | setQuantityDelta($value) | **float** | The number to adjust the variation&#39;s quantity by. | [optional] 
**adjustment_type** | getAdjustmentType() | setAdjustmentType($value) | **string** | The reason for the inventory adjustment. See [V1AdjustInventoryRequestAdjustmentType](#type-v1adjustinventoryrequestadjustmenttype) for possible values | [optional] 
**memo** | getMemo() | setMemo($value) | **string** | A note about the inventory adjustment. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

## Adjustment Types
adjustment_type | Description
------------ | ------------ |
 SALE | Deduct from inventory
 RECEIVE_STOCK | Add to inventory
 MANUAL_ADJUST | 


[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

