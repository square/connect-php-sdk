# InventoryCount

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The Square generated ID of the [CatalogObject](#type-catalogobject) being tracked. | [optional] 
**catalog_object_type** | getCatalogObjectType() | setCatalogObjectType($value) | **string** | The [CatalogObjectType](#type-catalogobjecttype) of the [CatalogObject](#type-catalogobject) being tracked. Tracking is only supported for the &#x60;ITEM_VARIATION&#x60; type. | [optional] 
**state** | getState() | setState($value) | **string** | The current [InventoryState](#type-inventorystate) for the related quantity of items. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The Square ID of the [Location](#type-location) where the related quantity of items are being tracked. | [optional] 
**quantity** | getQuantity() | setQuantity($value) | **string** | The number of items in the count as a decimal string. Fractional quantities are not supported. | [optional] 
**calculated_at** | getCalculatedAt() | setCalculatedAt($value) | **string** | A read-only timestamp in RFC 3339 format that indicates when Square received the most recent physical count or adjustment that had an affect on the estimated count. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

