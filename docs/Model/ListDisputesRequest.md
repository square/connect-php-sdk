# ListDisputesRequest

### Description

Defines request parameters for the ListDisputes endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query. For more information, see [Paginating](https://developer.squareup.com/docs/basics/api101/pagination). | [optional] 
**states** | getStates() | setStates($value) | **string[]** | The dispute states to filter the result. If not specified, the endpoint returns all open disputes (dispute status is not &#x60;INQUIRY_CLOSED&#x60;, &#x60;WON&#x60;, or &#x60;LOST&#x60;). See [DisputeState](#type-disputestate) for possible values | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the location for which to return  a list of disputes. If not specified, the endpoint returns all open disputes (dispute status is not &#x60;INQUIRY_CLOSED&#x60;, &#x60;WON&#x60;, or  &#x60;LOST&#x60;) associated with all locations. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

