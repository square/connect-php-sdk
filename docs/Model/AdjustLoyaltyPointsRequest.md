# AdjustLoyaltyPointsRequest

### Description

A request to adjust (add or subtract) points manually.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A unique string that identifies this &#x60;AdjustLoyaltyPoints&#x60; request.  Keys can be any valid string, but must be unique for every request. | 
**adjust_points** | getAdjustPoints() | setAdjustPoints($value) | [**\SquareConnect\Model\LoyaltyEventAdjustPoints**](LoyaltyEventAdjustPoints.md) | The points to adjust (add or subtract) and the reason for the adjustment. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

