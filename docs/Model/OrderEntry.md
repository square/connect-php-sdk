# OrderEntry

### Description

A lightweight description of an [Order](#type-order) that is returned when `returned_entries` is true on a [SearchOrderRequest](#type-searchorderrequest)

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order_id** | getOrderId() | setOrderId($value) | **string** | The id of the Order | [optional] 
**version** | getVersion() | setVersion($value) | **int** | Version number which is incremented each time an update is committed to the order. Orders that were not created through the API will not include a version and thus cannot be updated.  [Read more about working with versions](https://developer.squareup.com/docs/orders-api/manage-orders#update-orders). | [optional] [beta]
**location_id** | getLocationId() | setLocationId($value) | **string** | The location id the Order belongs to. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

