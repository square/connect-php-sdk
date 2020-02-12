# ListPaymentsRequest

### Description

Retrieves a list of refunds taken by the account making the request.  Max results per page: 100

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | Timestamp for the beginning of the reporting period, in RFC 3339 format. Inclusive. Default: The current time minus one year. | [optional] 
**end_time** | getEndTime() | setEndTime($value) | **string** | Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time. | [optional] 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The order in which results are listed. - &#x60;ASC&#x60; - oldest to newest - &#x60;DESC&#x60; - newest to oldest (default). | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | Limit results to the location supplied. By default, results are returned for all locations associated with the merchant. | [optional] 
**total** | getTotal() | setTotal($value) | **int** | The exact amount in the total_money for a &#x60;Payment&#x60;. | [optional] 
**last_4** | getLast4() | setLast4($value) | **string** | The last 4 digits of &#x60;Payment&#x60; card. | [optional] 
**card_brand** | getCardBrand() | setCardBrand($value) | **string** | The brand of &#x60;Payment&#x60; card. For example, &#x60;VISA&#x60; | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

