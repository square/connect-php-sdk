# InventoryChange

### Description

Represents a single physical count, inventory, adjustment, or transfer that is part of the history of inventory changes for a particular `CatalogObject`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | Indicates how the inventory change was applied. See &#x60;InventoryChangeType&#x60; for all possible values. See [InventoryChangeType](#type-inventorychangetype) for possible values | [optional] 
**physical_count** | getPhysicalCount() | setPhysicalCount($value) | [**\SquareConnect\Model\InventoryPhysicalCount**](InventoryPhysicalCount.md) | Contains details about the physical count when &#x60;type&#x60; is &#x60;PHYSICAL_COUNT&#x60; and unset for all other types. | [optional] 
**adjustment** | getAdjustment() | setAdjustment($value) | [**\SquareConnect\Model\InventoryAdjustment**](InventoryAdjustment.md) | Contains details about the inventory adjustment when &#x60;type&#x60; is &#x60;ADJUSTMENT&#x60; and unset for all other types. | [optional] 
**transfer** | getTransfer() | setTransfer($value) | [**\SquareConnect\Model\InventoryTransfer**](InventoryTransfer.md) | Contains details about the inventory transfer when &#x60;type&#x60; is &#x60;TRANSFER&#x60; and unset for all other types. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

