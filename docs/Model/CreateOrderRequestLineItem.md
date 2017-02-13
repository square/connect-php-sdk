# CreateOrderRequestLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the line item. This value cannot exceed 500 characters. | 
**quantity** | **string** | The quantity to purchase, as a string representation of a number. Currently, only integer values are supported. | 
**base_price_money** | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item&#39;s associated variation. If a line item represents a Custom Amount instead of a particular product, this field indicates that amount. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


