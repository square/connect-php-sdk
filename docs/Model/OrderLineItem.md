# OrderLineItem

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The name of the line item. | [optional] 
**quantity** | getQuantity() | setQuantity($value) | **string** | The quantity of the product to purchase. Currently, this string must have an integer value. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\OrderLineItemTax[]**](OrderLineItemTax.md) | The taxes applied to this line item. | [optional] 
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\OrderLineItemDiscount[]**](OrderLineItemDiscount.md) | The discounts applied to this line item. | [optional] 
**base_price_money** | getBasePriceMoney() | setBasePriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total tax amount of money to collect for the line item. | [optional] 
**total_discount_money** | getTotalDiscountMoney() | setTotalDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total discount amount of money to collect for the line item. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for this line item. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

