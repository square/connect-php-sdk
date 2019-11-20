# CatalogItemVariation

### Description

An item variation (i.e., product) in the Catalog object model. Each item may have a maximum of 250 item variations.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**item_id** | getItemId() | setItemId($value) | **string** | The ID of the &#x60;CatalogItem&#x60; associated with this item variation. Searchable. | [optional] 
**name** | getName() | setName($value) | **string** | The item variation&#39;s name. Searchable. This field has max length of 255 Unicode code points. | [optional] 
**sku** | getSku() | setSku($value) | **string** | The item variation&#39;s SKU, if any. Searchable. | [optional] 
**upc** | getUpc() | setUpc($value) | **string** | The item variation&#39;s UPC, if any. Searchable in the Connect API. This field is only exposed in the Connect API. It is not exposed in Square&#39;s Dashboard, Square Point of Sale app or Retail Point of Sale app. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | The order in which this item variation should be displayed. This value is read-only. On writes, the ordinal for each item variation within a parent &#x60;CatalogItem&#x60; is set according to the item variations&#39;s position. On reads, the value is not guaranteed to be sequential or unique. | [optional] 
**pricing_type** | getPricingType() | setPricingType($value) | **string** | Indicates whether the item variation&#39;s price is fixed or determined at the time of sale. See [CatalogPricingType](#type-catalogpricingtype) for possible values | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The item variation&#39;s price, if fixed pricing is used. | [optional] 
**location_overrides** | getLocationOverrides() | setLocationOverrides($value) | [**\SquareConnect\Model\ItemVariationLocationOverrides[]**](ItemVariationLocationOverrides.md) | Per-location price and inventory overrides. | [optional] 
**track_inventory** | getTrackInventory() | setTrackInventory($value) | **bool** | If &#x60;true&#x60;, inventory tracking is active for the variation. | [optional] 
**inventory_alert_type** | getInventoryAlertType() | setInventoryAlertType($value) | **string** | Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its &#x60;inventory_alert_threshold&#x60;. See [InventoryAlertType](#type-inventoryalerttype) for possible values | [optional] 
**inventory_alert_threshold** | getInventoryAlertThreshold() | setInventoryAlertThreshold($value) | **int** | If the inventory quantity for the variation is less than or equal to this value and &#x60;inventory_alert_type&#x60; is &#x60;LOW_QUANTITY&#x60;, the variation displays an alert in the merchant dashboard.  This value is always an integer. | [optional] 
**user_data** | getUserData() | setUserData($value) | **string** | Arbitrary user metadata to associate with the item variation. Searchable. This field has max length of 255 Unicode code points. | [optional] 
**service_duration** | getServiceDuration() | setServiceDuration($value) | **int** | If the &#x60;CatalogItem&#x60; that owns this item variation is of type &#x60;APPOINTMENTS_SERVICE&#x60;, then this is the duration of the service in milliseconds. For example, a 30 minute appointment would have the value &#x60;1800000&#x60;, which is equal to 30 (minutes) * 60 (seconds per minute) * 1000 (milliseconds per second). | [optional] 
**item_option_values** | getItemOptionValues() | setItemOptionValues($value) | [**\SquareConnect\Model\CatalogItemOptionValueForItemVariation[]**](CatalogItemOptionValueForItemVariation.md) | List of item option values associated with this item variation. Listed in the same order as the item options of the parent item. | [optional] [beta]
**measurement_unit_id** | getMeasurementUnitId() | setMeasurementUnitId($value) | **string** | ID of the ‘CatalogMeasurementUnit’ that is used to measure the quantity sold of this item variation. If left unset, the item will be sold in whole quantities. | [optional] [beta]

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

