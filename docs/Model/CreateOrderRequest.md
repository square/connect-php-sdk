# CreateOrderRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order** | getOrder() | setOrder($value) | [**\SquareConnect\Model\Order**](Order.md) | The order to create. If this field is set, then the only other top-level field that can be set is the idempotency_key. | [optional] 
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A value you specify that uniquely identifies this order among orders you&#39;ve created.  If you&#39;re unsure whether a particular order was created successfully, you can reattempt it with the same idempotency key without worrying about creating duplicate orders.  See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more information. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | __Deprecated__: Please set the reference_id on the nested &#x60;order&#x60; field instead.  An optional ID you can associate with the order for your own purposes (such as to associate the order with an entity ID in your own database).  This value cannot exceed 40 characters. | [optional] [deprecated]
**line_items** | getLineItems() | setLineItems($value) | [**\SquareConnect\Model\CreateOrderRequestLineItem[]**](CreateOrderRequestLineItem.md) | __Deprecated__: Please set the line_items on the nested &#x60;order&#x60; field instead.  The line items to associate with this order.  Each line item represents a different product to include in a purchase. | [optional] [deprecated]
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\CreateOrderRequestTax[]**](CreateOrderRequestTax.md) | __Deprecated__: Please set the taxes on the nested &#x60;order&#x60; field instead.  The taxes to include on the order. | [optional] [deprecated]
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\CreateOrderRequestDiscount[]**](CreateOrderRequestDiscount.md) | __Deprecated__: Please set the discounts on the nested &#x60;order&#x60; field instead.  The discounts to include on the order. | [optional] [deprecated]

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

