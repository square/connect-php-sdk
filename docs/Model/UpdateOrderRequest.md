# UpdateOrderRequest

### Description

Defines the fields that are included in requests to the [UpdateOrder](#endpoint-orders-updateorder) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order** | getOrder() | setOrder($value) | [**\SquareConnect\Model\Order**](Order.md) | The [sparse order](https://developer.squareup.com/docs/orders-api/manage-orders#sparse-order-objects) containing only the fields to update and the version the update is being applied to. | [optional] 
**fields_to_clear** | getFieldsToClear() | setFieldsToClear($value) | **string[]** | The [dot notation paths](https://developer.squareup.com/docs/orders-api/manage-orders#on-dot-notation) fields to clear. For example, &#x60;line_items[uid].note&#x60; [Read more about Deleting fields](https://developer.squareup.com/docs/orders-api/manage-orders#delete-fields). | [optional] 
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A value you specify that uniquely identifies this update request  If you&#39;re unsure whether a particular update was applied to an order successfully, you can reattempt it with the same idempotency key without worrying about creating duplicate updates to the order. The latest order version will be returned.  See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

