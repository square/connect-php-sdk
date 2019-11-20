# InventoryCount

### Description

Represents Square's estimated quantity of items in a particular state at a particular location based on the known history of physical counts and inventory adjustments.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The Square generated ID of the &#x60;CatalogObject&#x60; being tracked. | [optional] 
**catalog_object_type** | getCatalogObjectType() | setCatalogObjectType($value) | **string** | The &#x60;CatalogObjectType&#x60; of the &#x60;CatalogObject&#x60; being tracked. Tracking is only supported for the &#x60;ITEM_VARIATION&#x60; type. | [optional] 
**state** | getState() | setState($value) | **string** | The current &#x60;InventoryState&#x60; for the related quantity of items. See [InventoryState](#type-inventorystate) for possible values | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The Square ID of the &#x60;Location&#x60; where the related quantity of items are being tracked. | [optional] 
**quantity** | getQuantity() | setQuantity($value) | **string** | The number of items affected by the estimated count as a decimal string. Can support up to 5 digits after the decimal point.  _Important_: The Point of Sale app and Dashboard do not currently support decimal quantities. If a Point of Sale app or Dashboard attempts to read a decimal quantity on inventory counts or adjustments, the quantity will be rounded down to the nearest integer. For example, &#x60;2.5&#x60; will become &#x60;2&#x60;, and &#x60;-2.5&#x60; will become &#x60;-3&#x60;. Read [Decimal Quantities (BETA)](https://developer.squareup.com/docs/docs/inventory-api/what-it-does#decimal-quantities-beta) for more information. | [optional] [beta]
**calculated_at** | getCalculatedAt() | setCalculatedAt($value) | **string** | A read-only timestamp in RFC 3339 format that indicates when Square received the most recent physical count or adjustment that had an affect on the estimated count. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

