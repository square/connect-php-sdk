# LoyaltyProgram

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-assigned ID of the loyalty program. Updates to  the loyalty program do not modify the identifier. | 
**status** | getStatus() | setStatus($value) | **string** | Whether the program is currently active. See [LoyaltyProgramStatus](#type-loyaltyprogramstatus) for possible values | 
**reward_tiers** | getRewardTiers() | setRewardTiers($value) | [**\SquareConnect\Model\LoyaltyProgramRewardTier[]**](LoyaltyProgramRewardTier.md) | The list of rewards for buyers, sorted by ascending points. | 
**expiration_policy** | getExpirationPolicy() | setExpirationPolicy($value) | [**\SquareConnect\Model\LoyaltyProgramExpirationPolicy**](LoyaltyProgramExpirationPolicy.md) | If present, details for how points expire. | [optional] 
**terminology** | getTerminology() | setTerminology($value) | [**\SquareConnect\Model\LoyaltyProgramTerminology**](LoyaltyProgramTerminology.md) | A cosmetic name for the “points” currency. | 
**location_ids** | getLocationIds() | setLocationIds($value) | **string[]** | The &#x60;locations&#x60; at which the program is active. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the program was created, in RFC 3339 format. | 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timestamp when the reward was last updated, in RFC 3339 format. | 
**accrual_rules** | getAccrualRules() | setAccrualRules($value) | [**\SquareConnect\Model\LoyaltyProgramAccrualRule[]**](LoyaltyProgramAccrualRule.md) | Defines how buyers can earn loyalty points. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

