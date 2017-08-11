# CreateOrderRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | An optional ID you can associate with the order for your own purposes (such as to associate the order with an entity ID in your own database).  This value cannot exceed 40 characters. | [optional] 
**line_items** | getLineItems() | setLineItems($value) | [**\SquareConnect\Model\CreateOrderRequestLineItem[]**](CreateOrderRequestLineItem.md) | The line items to associate with this order.  Each line item represents a different product (or a custom monetary amount) to include in a purchase. | 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\CreateOrderRequestTax[]**](CreateOrderRequestTax.md) | The taxes include the custom taxes. | [optional] 
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\CreateOrderRequestDiscount[]**](CreateOrderRequestDiscount.md) | The discounts include the custom discounts . | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

