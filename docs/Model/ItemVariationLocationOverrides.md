# ItemVariationLocationOverrides

### Description

Price and inventory alerting overrides for a `CatalogItemVariation` at a specific `Location`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the &#x60;Location&#x60;. | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The price of the &#x60;CatalogItemVariation&#x60; at the given &#x60;Location&#x60;, or blank for variable pricing. | [optional] 
**pricing_type** | getPricingType() | setPricingType($value) | **string** | The pricing type (fixed or variable) for the &#x60;CatalogItemVariation&#x60; at the given &#x60;Location&#x60;. See [CatalogPricingType](#type-catalogpricingtype) for possible values | [optional] 
**track_inventory** | getTrackInventory() | setTrackInventory($value) | **bool** | If &#x60;true&#x60;, inventory tracking is active for the &#x60;CatalogItemVariation&#x60; at this &#x60;Location&#x60;. | [optional] 
**inventory_alert_type** | getInventoryAlertType() | setInventoryAlertType($value) | **string** | Indicates whether the &#x60;CatalogItemVariation&#x60; displays an alert when its inventory quantity is less than or equal to its &#x60;inventory_alert_threshold&#x60;. See [InventoryAlertType](#type-inventoryalerttype) for possible values | [optional] 
**inventory_alert_threshold** | getInventoryAlertThreshold() | setInventoryAlertThreshold($value) | **int** | If the inventory quantity for the variation is less than or equal to this value and &#x60;inventory_alert_type&#x60; is &#x60;LOW_QUANTITY&#x60;, the variation displays an alert in the merchant dashboard.  This value is always an integer. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

