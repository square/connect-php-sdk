# CreateOrderRequestLineItem

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | Only used for ad hoc line items. The name of the line item. This value cannot exceed 500 characters.  Do not provide a value for this field if you provide values in catalog_object_id. | [optional] 
**quantity** | getQuantity() | setQuantity($value) | **string** | The quantity to purchase, as a string representation of a number.  This string must have a positive integer value. | 
**base_price_money** | getBasePriceMoney() | setBasePriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | Only used for ad hoc line items. The base price for a single unit of the line item&#39;s associated variation.  Do not provide a value for this field if you provide a value for the &#x60;catalog_object_id&#x60;. | [optional] 
**variation_name** | getVariationName() | setVariationName($value) | **string** | Only used for ad hoc line items. The variation name of the line item. This value cannot exceed 255 characters.  If this value is not set for an ad hoc line item, the default value of &#x60;Regular&#x60; is used.  Do not provide a value for this field if you provide a value for the &#x60;catalog_object_id&#x60;. | [optional] 
**note** | getNote() | setNote($value) | **string** | The note of the line item. This value cannot exceed 50 characters. | [optional] 
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | Only used for Catalog line items. The catalog object ID from existing [CatalogItemVariation](#type-catalogitemvariation).  Do not provide a value for this field if you provide a value for &#x60;name&#x60; and &#x60;base_price_money&#x60;. | [optional] 
**modifiers** | getModifiers() | setModifiers($value) | [**\SquareConnect\Model\CreateOrderRequestModifier[]**](CreateOrderRequestModifier.md) | Only used for Catalog line items. The modifiers to include on the line item. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\CreateOrderRequestTax[]**](CreateOrderRequestTax.md) | The taxes to include on the line item. | [optional] 
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\CreateOrderRequestDiscount[]**](CreateOrderRequestDiscount.md) | The discounts to include on the line item. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

