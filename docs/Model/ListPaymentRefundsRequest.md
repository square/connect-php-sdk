# ListPaymentRefundsRequest

### Description

Retrieves a list of refunds for the account making the request.  Max results per page: 100

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | Timestamp for the beginning of the requested reporting period, in RFC 3339 format.  Default: The current time minus one year. | [optional] 
**end_time** | getEndTime() | setEndTime($value) | **string** | Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time. | [optional] 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The order in which results are listed. - &#x60;ASC&#x60; - oldest to newest - &#x60;DESC&#x60; - newest to oldest (default). | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | ID of location associated with payment. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | If provided, only refunds with the given status are returned. For a list of refund status values, see &#x60;PaymentRefund&#x60;.  Default: If omitted refunds are returned regardless of status. | [optional] 
**source_type** | getSourceType() | setSourceType($value) | **string** | If provided, only refunds with the given source type are returned. - &#x60;CARD&#x60; - List refunds only for payments where card was specified as payment source.  Default: If omitted refunds are returned regardless of source type. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

