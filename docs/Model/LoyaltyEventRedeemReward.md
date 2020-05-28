# LoyaltyEventRedeemReward

### Description

Provides metadata when the event `type` is `REDEEM_REWARD`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**loyalty_program_id** | getLoyaltyProgramId() | setLoyaltyProgramId($value) | **string** | The ID of the &#x60;loyalty program&#x60;. | 
**reward_id** | getRewardId() | setRewardId($value) | **string** | The ID of the redeemed &#x60;loyalty reward&#x60;. This field is returned only if the event source is &#x60;LOYALTY_API&#x60;. | [optional] 
**order_id** | getOrderId() | setOrderId($value) | **string** | The ID of the &#x60;order&#x60; that redeemed the reward. This field is returned only if the Orders API is used to process orders. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

