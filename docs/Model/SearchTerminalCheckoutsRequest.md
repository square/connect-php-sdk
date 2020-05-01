# SearchTerminalCheckoutsRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\TerminalCheckoutQuery**](TerminalCheckoutQuery.md) | Query the terminal checkouts based on given conditions and sort order. Calling SearchTerminalCheckouts without an explicitly query parameter will return all available checkouts with the default sort order. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | Limit the number of results returned for a single request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

