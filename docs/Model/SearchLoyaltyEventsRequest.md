# SearchLoyaltyEventsRequest

### Description

A request to search for loyalty events.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\LoyaltyEventQuery**](LoyaltyEventQuery.md) | A set of one or more predefined query filters to apply when  searching for loyalty events. The endpoint performs a logical AND to  evaluate multiple filters and performs a logical OR on arrays   that specifies multiple field values. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The maximum number of results to include in the response.  The last page might contain fewer events.  The default is 30 events. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query. For more information, see [Pagination](https://developer.squareup.com/docs/docs/basics/api101/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

