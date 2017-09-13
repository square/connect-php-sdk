# Order

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The order&#39;s unique ID.  This value is only present for Order objects created by the Orders API through the [CreateOrder](#endpoint-createorder) endpoint. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the merchant location this order is associated with. | [optional] 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | A client specified identifier to associate an entity in another system with this order. | [optional] 
**line_items** | getLineItems() | setLineItems($value) | [**\SquareConnect\Model\OrderLineItem[]**](OrderLineItem.md) | The line items included in the order. Every order has at least one line item. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for the order. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total tax amount of money to collect for the order. | [optional] 
**total_discount_money** | getTotalDiscountMoney() | setTotalDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total discount amount of money to collect for the order. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

