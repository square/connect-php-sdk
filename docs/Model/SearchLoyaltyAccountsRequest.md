# SearchLoyaltyAccountsRequest

### Description

A request to search for loyalty accounts.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\SearchLoyaltyAccountsRequestLoyaltyAccountQuery**](SearchLoyaltyAccountsRequestLoyaltyAccountQuery.md) | The search criteria for the request. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The maximum number of results to include in the response. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to  this endpoint. Provide this to retrieve the next set of  results for the original query.  For more information,  see [Pagination](https://developer.squareup.com/docs/docs/basics/api101/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

