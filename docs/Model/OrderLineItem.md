# OrderLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The line item&#39;s ID, unique only within this order. | [optional] 
**name** | **string** | The name of the line item. | [optional] 
**quantity** | **string** | The quantity of the product to purchase. Currently, this string must have an integer value. | [optional] 
**base_price_money** | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item&#39;s associated variation.  If a line item represents a Custom Amount instead of a particular product, this field indicates that amount. | [optional] 
**total_money** | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for this line item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


