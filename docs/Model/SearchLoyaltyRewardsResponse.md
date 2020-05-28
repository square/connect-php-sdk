# SearchLoyaltyRewardsResponse

### Description

A response that includes the loyalty rewards satisfying the search criteria.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**rewards** | getRewards() | setRewards($value) | [**\SquareConnect\Model\LoyaltyReward[]**](LoyaltyReward.md) | The loyalty rewards that satisfy the search criteria. These are returned in descending order by &#x60;updated_at&#x60;. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent  request. If empty, this is the final response. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

