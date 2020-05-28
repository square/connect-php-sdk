# LoyaltyEventAccumulatePoints

### Description

Provides metadata when the event `type` is `ACCUMULATE_POINTS`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**loyalty_program_id** | getLoyaltyProgramId() | setLoyaltyProgramId($value) | **string** | The ID of the &#x60;loyalty program&#x60;. | [optional] 
**points** | getPoints() | setPoints($value) | **int** | The number of points accumulated by the event. | [optional] 
**order_id** | getOrderId() | setOrderId($value) | **string** | The ID of the &#x60;order&#x60; for which the buyer accumulated the points. This field is returned only if the Orders API is used to process orders. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

