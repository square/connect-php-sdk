# LoyaltyReward

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-assigned ID of the loyalty reward. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | The status of a loyalty reward. See [LoyaltyRewardStatus](#type-loyaltyrewardstatus) for possible values | [optional] 
**loyalty_account_id** | getLoyaltyAccountId() | setLoyaltyAccountId($value) | **string** | The Square-assigned ID of the &#x60;loyalty account&#x60; to which the reward belongs. | 
**reward_tier_id** | getRewardTierId() | setRewardTierId($value) | **string** | The Square-assigned ID of the &#x60;reward tier&#x60; used to create the reward. | 
**points** | getPoints() | setPoints($value) | **int** | The number of loyalty points used for the reward. | [optional] 
**order_id** | getOrderId() | setOrderId($value) | **string** | The Square-assigned ID of the &#x60;order&#x60; to which the reward is attached. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the reward was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timestamp when the reward was last updated, in RFC 3339 format. | [optional] 
**redeemed_at** | getRedeemedAt() | setRedeemedAt($value) | **string** | The timestamp when the reward was redeemed, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

