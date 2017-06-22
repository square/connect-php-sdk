# OrderLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the line item. | [optional] 
**quantity** | **string** | The quantity of the product to purchase. Currently, this string must have an integer value. | [optional] 
**taxes** | [**\SquareConnect\Model\OrderLineItemTax[]**](OrderLineItemTax.md) | The taxes applied to this line item. | [optional] 
**discounts** | [**\SquareConnect\Model\OrderLineItemDiscount[]**](OrderLineItemDiscount.md) | The discounts applied to this line item. | [optional] 
**base_price_money** | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item. | [optional] 
**total_tax_money** | [**\SquareConnect\Model\Money**](Money.md) | The total tax amount of money to collect for the line item. | [optional] 
**total_discount_money** | [**\SquareConnect\Model\Money**](Money.md) | The total discount amount of money to collect for the line item. | [optional] 
**total_money** | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for this line item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


