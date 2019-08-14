# OrderLineItem

### Description

Represents a line item in an order. Each line item describes a different product to purchase, with its own quantity and price details.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**uid** | getUid() | setUid($value) | **string** | Unique ID that identifies the line item only within this order. | [optional] 
**name** | getName() | setName($value) | **string** | The name of the line item. | [optional] 
**quantity** | getQuantity() | setQuantity($value) | **string** | The quantity purchased, formatted as a decimal number. For example: &#x60;\&quot;3\&quot;&#x60;.  Line items with a &#x60;quantity_unit&#x60; can have non-integer quantities. For example: &#x60;\&quot;1.70000\&quot;&#x60;. | 
**quantity_unit** | getQuantityUnit() | setQuantityUnit($value) | [**\SquareConnect\Model\OrderQuantityUnit**](OrderQuantityUnit.md) | The unit and precision that this line item&#39;s quantity is measured in. | [optional] 
**note** | getNote() | setNote($value) | **string** | The note of the line item. | [optional] 
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The [CatalogItemVariation](#type-catalogitemvariation) id applied to this line item. | [optional] 
**variation_name** | getVariationName() | setVariationName($value) | **string** | The name of the variation applied to this line item. | [optional] 
**modifiers** | getModifiers() | setModifiers($value) | [**\SquareConnect\Model\OrderLineItemModifier[]**](OrderLineItemModifier.md) | The [CatalogModifier](#type-catalogmodifier)s applied to this line item. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\OrderLineItemTax[]**](OrderLineItemTax.md) | A list of taxes applied to this line item. On read or retrieve, this list includes both item-level taxes and any order-level taxes apportioned to this item. When creating an Order, set your item-level taxes in this list.  This field has been deprecated in favour of &#x60;applied_taxes&#x60;. Usage of both this field and &#x60;applied_taxes&#x60; when creating an order will result in an error. Usage of this field when sending requests to the UpdateOrder endpoint will result in an error. | [optional] 
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\OrderLineItemDiscount[]**](OrderLineItemDiscount.md) | A list of discounts applied to this line item. On read or retrieve, this list includes both item-level discounts and any order-level discounts apportioned to this item. When creating an Order, set your item-level discounts in this list.  This field has been deprecated in favour of &#x60;applied_discounts&#x60;. Usage of both this field and &#x60;applied_discounts&#x60; when creating an order will result in an error. Usage of this field when sending requests to the UpdateOrder endpoint will result in an error. | [optional] 
**applied_taxes** | getAppliedTaxes() | setAppliedTaxes($value) | [**\SquareConnect\Model\OrderLineItemAppliedTax[]**](OrderLineItemAppliedTax.md) | The list of references to taxes applied to this line item. Each &#x60;OrderLineItemAppliedTax&#x60; has a &#x60;tax_uid&#x60; that references the &#x60;uid&#x60; of a top-level &#x60;OrderLineItemTax&#x60; applied to the line item. On reads, the amount applied is populated.  An &#x60;OrderLineItemAppliedTax&#x60; will be automatically created on every line item for all &#x60;ORDER&#x60; scoped taxes added to the order. &#x60;OrderLineItemAppliedTax&#x60; records for &#x60;LINE_ITEM&#x60; scoped taxes must be added in requests for the tax to apply to any line items.  To change the amount of a tax, modify the referenced top-level tax. | [optional] 
**applied_discounts** | getAppliedDiscounts() | setAppliedDiscounts($value) | [**\SquareConnect\Model\OrderLineItemAppliedDiscount[]**](OrderLineItemAppliedDiscount.md) | The list of references to discounts applied to this line item. Each &#x60;OrderLineItemAppliedDiscount&#x60; has a &#x60;discount_uid&#x60; that references the &#x60;uid&#x60; of a top-level &#x60;OrderLineItemDiscounts&#x60; applied to the line item. On reads, the amount applied is populated.  An &#x60;OrderLineItemAppliedDiscount&#x60; will be automatically created on every line item for all &#x60;ORDER&#x60; scoped discounts that are added to the order. &#x60;OrderLineItemAppliedDiscount&#x60; records for &#x60;LINE_ITEM&#x60; scoped discounts must be added in requests for the discount to apply to any line items.  To change the amount of a discount, modify the referenced top-level discount. | [optional] 
**base_price_money** | getBasePriceMoney() | setBasePriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item. | [optional] 
**variation_total_price_money** | getVariationTotalPriceMoney() | setVariationTotalPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total price of all item variations sold in this line item. Calculated as &#x60;base_price_money&#x60; multiplied by &#x60;quantity&#x60;. Does not include modifiers. | [optional] 
**gross_sales_money** | getGrossSalesMoney() | setGrossSalesMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money made in gross sales for this line item. Calculated as the sum of the variation&#39;s total price and each modifier&#39;s total price. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total tax amount of money to collect for the line item. | [optional] 
**total_discount_money** | getTotalDiscountMoney() | setTotalDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total discount amount of money to collect for the line item. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for this line item. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

