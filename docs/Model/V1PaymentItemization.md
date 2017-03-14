# V1PaymentItemization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The item&#39;s name. | [optional] 
**quantity** | **float** | The quantity of the item purchased. This can be a decimal value. | [optional] 
**itemization_type** | **string** | The type of purchase that the itemization represents, such as an ITEM or CUSTOM_AMOUNT | [optional] 
**item_detail** | [**\SquareConnect\Model\V1PaymentItemDetail**](V1PaymentItemDetail.md) | Details of the item, including its unique identifier and the identifier of the item variation purchased. | [optional] 
**notes** | **string** | Notes entered by the merchant about the item at the time of payment, if any. | [optional] 
**item_variation_name** | **string** | The name of the item variation purchased, if any. | [optional] 
**total_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total cost of the item, including all taxes and discounts. | [optional] 
**single_quantity_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The cost of a single unit of this item. | [optional] 
**gross_sales_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total cost of the itemization and its modifiers, not including taxes or discounts. | [optional] 
**discount_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all discounts applied to the itemization. This value is always negative or zero. | [optional] 
**net_sales_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The sum of gross_sales_money and discount_money. | [optional] 
**taxes** | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | All taxes applied to this itemization. | [optional] 
**discounts** | [**\SquareConnect\Model\V1PaymentDiscount[]**](V1PaymentDiscount.md) | All discounts applied to this itemization. | [optional] 
**modifiers** | [**\SquareConnect\Model\V1PaymentModifier[]**](V1PaymentModifier.md) | All modifier options applied to this itemization. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


