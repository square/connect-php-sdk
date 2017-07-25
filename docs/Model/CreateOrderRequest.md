# CreateOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idempotency_key** | **string** | A value you specify that uniquely identifies this order among orders you&#39;ve created.  If you&#39;re unsure whether a particular order was created successfully, you can reattempt it with the same idempotency key without worrying about creating duplicate orders.  See [Idempotency keys](#idempotencykeys) for more information. | [optional] 
**reference_id** | **string** | An optional ID you can associate with the order for your own purposes (such as to associate the order with an entity ID in your own database).  This value cannot exceed 40 characters. | [optional] 
**line_items** | [**\SquareConnect\Model\CreateOrderRequestLineItem[]**](CreateOrderRequestLineItem.md) | The line items to associate with this order.  Each line item represents a different product to include in a purchase. | 
**taxes** | [**\SquareConnect\Model\CreateOrderRequestTax[]**](CreateOrderRequestTax.md) | The taxes to include on the order. | [optional] 
**discounts** | [**\SquareConnect\Model\CreateOrderRequestDiscount[]**](CreateOrderRequestDiscount.md) | The discounts to include on the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


