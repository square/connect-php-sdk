# AccumulateLoyaltyPointsRequest

### Description

A request to accumulate points for a purchase.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**accumulate_points** | getAccumulatePoints() | setAccumulatePoints($value) | [**\SquareConnect\Model\LoyaltyEventAccumulatePoints**](LoyaltyEventAccumulatePoints.md) | The points to add to the account.  If you are using the Orders API to manage orders, you   specify the order ID. Otherwise, specify the  points to add. | 
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A unique string that identifies the &#x60;AccumulateLoyaltyPoints&#x60; request.  Keys can be any valid string but must be unique for every request. | 
**location_id** | getLocationId() | setLocationId($value) | **string** | The &#x60;location&#x60; where the purchase was made. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

