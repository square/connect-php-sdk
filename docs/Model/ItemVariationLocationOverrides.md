# ItemVariationLocationOverrides

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the [location](#type-location). | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The price of the [CatalogItemVariation](#type-catalogitemvariation) at the given [location](#type-location), or blank for variable pricing. | [optional] 
**pricing_type** | getPricingType() | setPricingType($value) | **string** | The pricing type (fixed or variable) for the [CatalogItemVariation](#type-catalogitemvariation) at the given [location](#type-location). See [CatalogPricingType](#type-catalogpricingtype) for all possible values. | [optional] 
**track_inventory** | getTrackInventory() | setTrackInventory($value) | **bool** | If &#x60;true&#x60;, inventory tracking is active for the [CatalogItemVariation](#type-catalogitemvariation) at this [location](#type-location). | [optional] 
**inventory_alert_type** | getInventoryAlertType() | setInventoryAlertType($value) | **string** | Indicates whether the [CatalogItemVariation](#type-catalogitemvariation) displays an alert when its inventory quantity is less than or equal to its &#x60;inventory_alert_threshold&#x60;. See [InventoryAlertType](#type-inventoryalerttype) for all possible values. | [optional] 
**inventory_alert_threshold** | getInventoryAlertThreshold() | setInventoryAlertThreshold($value) | **int** | If the inventory quantity for the variation is less than or equal to this value and &#x60;inventory_alert_type&#x60; is &#x60;LOW_QUANTITY&#x60;, the variation displays an alert in the merchant dashboard.  This value is always an integer. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

