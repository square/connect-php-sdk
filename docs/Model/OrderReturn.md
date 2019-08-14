# OrderReturn

### Description

The set of line items, service charges, taxes, discounts, tips, etc. being returned in an Order.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**uid** | getUid() | setUid($value) | **string** | Unique ID that identifies the return only within this order. | [optional] 
**source_order_id** | getSourceOrderId() | setSourceOrderId($value) | **string** | Order which contains the original sale of these returned line items. This will be unset for unlinked returns. | [optional] 
**return_line_items** | getReturnLineItems() | setReturnLineItems($value) | [**\SquareConnect\Model\OrderReturnLineItem[]**](OrderReturnLineItem.md) | Collection of line items which are being returned. | [optional] 
**return_service_charges** | getReturnServiceCharges() | setReturnServiceCharges($value) | [**\SquareConnect\Model\OrderReturnServiceCharge[]**](OrderReturnServiceCharge.md) | Collection of service charges which are being returned. | [optional] 
**return_taxes** | getReturnTaxes() | setReturnTaxes($value) | [**\SquareConnect\Model\OrderReturnTax[]**](OrderReturnTax.md) | Collection of references to taxes being returned for an order, including the total applied tax amount to be returned. The taxes must reference a top-level tax ID from the source order. | [optional] 
**return_discounts** | getReturnDiscounts() | setReturnDiscounts($value) | [**\SquareConnect\Model\OrderReturnDiscount[]**](OrderReturnDiscount.md) | Collection of references to discounts being returned for an order, including the total applied discount amount to be returned. The discounts must reference a top-level discount ID from the source order. | [optional] 
**rounding_adjustment** | getRoundingAdjustment() | setRoundingAdjustment($value) | [**\SquareConnect\Model\OrderRoundingAdjustment**](OrderRoundingAdjustment.md) | A positive or negative rounding adjustment to the total value being returned. Commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency. | [optional] 
**return_amounts** | getReturnAmounts() | setReturnAmounts($value) | [**\SquareConnect\Model\OrderMoneyAmounts**](OrderMoneyAmounts.md) | Aggregate monetary value being returned by this Return entry. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

