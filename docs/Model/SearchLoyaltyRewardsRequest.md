# SearchLoyaltyRewardsRequest

### Description

A request to search for loyalty rewards.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\SearchLoyaltyRewardsRequestLoyaltyRewardQuery**](SearchLoyaltyRewardsRequestLoyaltyRewardQuery.md) | The search criteria for the request.  If empty, the endpoint retrieves all loyalty rewards in the loyalty program. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The maximum number of results to return in the response. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to  this endpoint. Provide this to retrieve the next set of  results for the original query. For more information,  see [Pagination](https://developer.squareup.com/docs/docs/basics/api101/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

