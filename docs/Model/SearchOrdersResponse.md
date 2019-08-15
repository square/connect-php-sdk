# SearchOrdersResponse

### Description

Only one of `order_entries` or `orders` fields will be set, depending on whether `return_entries` was set on the [SearchOrdersRequest](#type-searchorderrequest).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order_entries** | getOrderEntries() | setOrderEntries($value) | [**\SquareConnect\Model\OrderEntry[]**](OrderEntry.md) | List of [OrderEntries](#type-orderentry) that fit the query conditions. Populated only if &#x60;return_entries&#x60; was set to &#x60;true&#x60; in the request. | [optional] 
**orders** | getOrders() | setOrders($value) | [**\SquareConnect\Model\Order[]**](Order.md) | List of [Order](#type-order) objects that match query conditions. Populated only if &#x60;return_entries&#x60; in the request is set to &#x60;false&#x60;. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If unset, this is the final response. See [Pagination](/basics/api101/pagination) for more information. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | [Errors](#type-error) encountered during the search. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

