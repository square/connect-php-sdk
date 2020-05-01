# OrderCreated

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order_id** | getOrderId() | setOrderId($value) | **string** | The order&#39;s unique ID. | [optional] 
**version** | getVersion() | setVersion($value) | **int** | Version number which is incremented each time an update is committed to the order. Orders that were not created through the API will not include a version and thus cannot be updated.  [Read more about working with versions](https://developer.squareup.com/docs/docs/orders-api/manage-orders#update-orders) | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the merchant location this order is associated with. | [optional] 
**state** | getState() | setState($value) | **string** | The state of the order. See [OrderState](#type-orderstate) for possible values | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | Timestamp for when the order was created in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

