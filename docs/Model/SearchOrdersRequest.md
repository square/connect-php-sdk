# SearchOrdersRequest

### Description

The request does not have any required fields. When given no query criteria, SearchOrders will return all results for all of the merchant’s locations. When fetching additional pages using a `cursor`, the `query` must be equal to the `query` used to fetch the first page of results.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_ids** | getLocationIds() | setLocationIds($value) | **string[]** | The location IDs for the orders to query. The caller must have access to all provided locations.  Min: 1 &#x60;location_ids&#x60;. Max: 10 &#x60;location_ids&#x60;. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query. See [Pagination](/basics/api101/pagination) for more information. | [optional] 
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\SearchOrdersQuery**](SearchOrdersQuery.md) | Query conditions used to filter or sort the results. Note that when fetching additional pages using a &#x60;cursor&#x60;, the &#x60;query&#x60; must be equal to the &#x60;query&#x60; used to fetch the first page of results. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | Number of results to be returned in a single page. SearchOrders may use a smaller limit than specified depending on server load. If the response includes a &#x60;cursor&#x60; field, you can use it to retrieve the next set of results. Default: &#x60;500&#x60; | [optional] 
**return_entries** | getReturnEntries() | setReturnEntries($value) | **bool** | If set to &#x60;true&#x60;, SearchOrders will return [&#x60;OrderEntry&#x60;](#type-orderentry) objects instead of &#x60;Order&#x60; objects. &#x60;OrderEntry&#x60; objects are lightweight descriptions of orders that include &#x60;order_id&#x60;s.  Default: &#x60;false&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

