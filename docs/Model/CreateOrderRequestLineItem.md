# CreateOrderRequestLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the line item. This value cannot exceed 500 characters. | [optional] 
**quantity** | **string** | The quantity to purchase, as a string representation of a number. Currently, only integer values are supported. | 
**base_price_money** | [**\SquareConnect\Model\Money**](Money.md) | The base price for a single unit of the line item&#39;s associated variation. If a line item represents a Custom Amount instead of a particular product, this field indicates that amount. | [optional] 
**variation_name** | **string** | The variation_name of the line item. This value cannot exceed 255 characters.  If not set, the default name is &#x60;Regular&#x60;.  Do not provide a value for this field if you provide a value for the &#x60;name&#x60; and the &#x60;base_price_money&#x60;. | [optional] 
**note** | **string** | The note of the line item. This value cannot exceed 50 characters. | [optional] 
**catalog_object_id** | **string** | The catalog object id from existing [CatalogItemVariation](#type-catalogitemvariation).  Do not provide a value for this field if you provide a value for the &#x60;name&#x60; and the &#x60;base_price_money&#x60;. | [optional] 
**modifiers** | [**\SquareConnect\Model\CreateOrderRequestModifier[]**](CreateOrderRequestModifier.md) | The item modifier catalog object ids from exsiting [CatalogModifier](#type-catalogmodifier)s.  Do not provide a value for this field if you provide a value for the &#x60;name&#x60; and the &#x60;base_price_money&#x60;. | [optional] 
**taxes** | [**\SquareConnect\Model\CreateOrderRequestTax[]**](CreateOrderRequestTax.md) | The taxes to include on the line item. | [optional] 
**discounts** | [**\SquareConnect\Model\CreateOrderRequestDiscount[]**](CreateOrderRequestDiscount.md) | The discounts to include on the line item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


