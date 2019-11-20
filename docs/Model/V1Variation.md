# V1Variation

### Description

V1Variation
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The item variation&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The item variation&#39;s name. | [optional] 
**item_id** | getItemId() | setItemId($value) | **string** | The ID of the variation&#39;s associated item. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | Indicates the variation&#39;s list position when displayed in Square Point of Sale and the merchant dashboard. If more than one variation for the same item has the same ordinal value, those variations are displayed in alphabetical order | [optional] 
**pricing_type** | getPricingType() | setPricingType($value) | **string** | Indicates whether the item variation&#39;s price is fixed or determined at the time of sale. See [V1VariationPricingType](#type-v1variationpricingtype) for possible values | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The item variation&#39;s price, if any. | [optional] 
**sku** | getSku() | setSku($value) | **string** | The item variation&#39;s SKU, if any. | [optional] 
**track_inventory** | getTrackInventory() | setTrackInventory($value) | **bool** | If true, inventory tracking is active for the variation. | [optional] 
**inventory_alert_type** | getInventoryAlertType() | setInventoryAlertType($value) | **string** | Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its inventory_alert_threshold. See [V1VariationInventoryAlertType](#type-v1variationinventoryalerttype) for possible values | [optional] 
**inventory_alert_threshold** | getInventoryAlertThreshold() | setInventoryAlertThreshold($value) | **int** | If the inventory quantity for the variation is less than or equal to this value and inventory_alert_type is LOW_QUANTITY, the variation displays an alert in the merchant dashboard. | [optional] 
**user_data** | getUserData() | setUserData($value) | **string** | Arbitrary metadata associated with the variation. Cannot exceed 255 characters. | [optional] 
**v2_id** | getV2Id() | setV2Id($value) | **string** | The ID of the CatalogObject in the Connect v2 API. Objects that are shared across multiple locations share the same v2 ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

