# V1Variation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The item variation&#39;s unique ID. | [optional] 
**name** | **string** | The item variation&#39;s name. | [optional] 
**item_id** | **string** | The ID of the variation&#39;s associated item. | [optional] 
**pricing_type** | **string** | Indicates whether the item variation&#39;s price is fixed or determined at the time of sale. | [optional] 
**price_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The item variation&#39;s price, if any. | [optional] 
**sku** | **string** | The item variation&#39;s SKU, if any. | [optional] 
**track_inventory** | **bool** | If true, inventory tracking is active for the variation. | [optional] 
**inventory_alert_type** | **string** | Indicates whether the item variation displays an alert when its inventory quantity is less than or equal to its inventory_alert_threshold. | [optional] 
**inventory_alert_threshold** | **int** | If the inventory quantity for the variation is less than or equal to this value and inventory_alert_type is LOW_QUANTITY, the variation displays an alert in the merchant dashboard. | [optional] 
**user_data** | **string** | Arbitrary metadata associated with the variation. Cannot exceed 255 characters. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


