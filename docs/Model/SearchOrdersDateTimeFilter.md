# SearchOrdersDateTimeFilter

### Description

Filter for `Order` objects based on whether their `CREATED_AT`, `CLOSED_AT` or `UPDATED_AT` timestamps fall within a specified time range. You can specify the time range and which timestamp to filter for. You can filter for only one time range at a time.  For each time range, the start time and end time are inclusive. If the end time is absent, it defaults to the time of the first request for the cursor.  __Important:__ If you use the DateTimeFilter in a SearchOrders query, you must also set the `sort_field` in [OrdersSort](#type-searchorderordersort) to the same field you filter for. For example, if you set the `CLOSED_AT` field in DateTimeFilter, you must also set the `sort_field` in SearchOrdersSort to `CLOSED_AT`. Otherwise, SearchOrders will throw an error. [Learn more about filtering orders by time range](/orders-api/manage-orders#important-note-on-filtering-orders-by-time-range).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**created_at** | getCreatedAt() | setCreatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Time range for filtering on the &#x60;created_at&#x60; timestamp. If you use this value, you must also set the &#x60;sort_field&#x60; in the OrdersSearchSort object to &#x60;CREATED_AT&#x60;. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Time range for filtering on the &#x60;updated_at&#x60; timestamp. If you use this value, you must also set the &#x60;sort_field&#x60; in the OrdersSearchSort object to &#x60;UPDATED_AT&#x60;. | [optional] 
**closed_at** | getClosedAt() | setClosedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Time range for filtering on the &#x60;closed_at&#x60; timestamp. If you use this value, you must also set the &#x60;sort_field&#x60; in the OrdersSearchSort object to &#x60;CLOSED_AT&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

