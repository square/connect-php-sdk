# CatalogItemVariation

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**item_id** | getItemId() | setItemId($value) | **string** | The ID of the [CatalogItem](#type-catalogitem) associated with this item variation. Searchable. | [optional] 
**name** | getName() | setName($value) | **string** | The item variation&#39;s name. Searchable. | [optional] 
**sku** | getSku() | setSku($value) | **string** | The item variation&#39;s SKU, if any. Searchable. | [optional] 
**upc** | getUpc() | setUpc($value) | **string** | The item variation&#39;s UPC, if any. Searchable. | [optional] 
**pricing_type** | getPricingType() | setPricingType($value) | **string** | Indicates whether the item variation&#39;s price is fixed or determined at the time of sale. See [CatalogPricingType](#type-catalogpricingtype) for all possible values. | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The item variation&#39;s price, if fixed pricing is used. | [optional] 
**location_overrides** | getLocationOverrides() | setLocationOverrides($value) | [**\SquareConnect\Model\ItemVariationLocationOverrides[]**](ItemVariationLocationOverrides.md) | Per-[location][#type-location] price and inventory overrides. | [optional] 
**track_inventory** | getTrackInventory() | setTrackInventory($value) | **bool** | If &#x60;true&#x60;, inventory tracking is active for the variation. | [optional] 
**inventory_alert_type** | getInventoryAlertType() | setInventoryAlertType($value) | **string** | Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its &#x60;inventory_alert_threshold&#x60;. See [InventoryAlertType](#type-inventoryalerttype) for all possible values. | [optional] 
**inventory_alert_threshold** | getInventoryAlertThreshold() | setInventoryAlertThreshold($value) | **int** | If the inventory quantity for the variation is less than or equal to this value and &#x60;inventory_alert_type&#x60; is &#x60;LOW_QUANTITY&#x60;, the variation displays an alert in the merchant dashboard.  This value is always an integer. | [optional] 
**user_data** | getUserData() | setUserData($value) | **string** | Arbitrary user metadata to associate with the item variation. Cannot exceed 255 characters. Searchable. | [optional] 
**service_duration** | getServiceDuration() | setServiceDuration($value) | **int** | If the [CatalogItem](#type-catalogitem) that owns this item variation is of type &#x60;APPOINTMENTS_SERVICE&#x60;, then this is the duration of the service in milliseconds. For example, a 30 minute appointment would have the value &#x60;1800000&#x60;, which is equal to 30 (minutes) * 60 (seconds per minute) * 1000 (milliseconds per second). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

