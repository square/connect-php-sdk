# CatalogItemOption

### Description

A group of variations for a `CatalogItem`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The item option&#39;s display name for the seller. Must be unique across all item options. Searchable. | [optional] 
**display_name** | getDisplayName() | setDisplayName($value) | **string** | The item option&#39;s display name for the customer. Searchable. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The item option&#39;s human-readable description. Displayed in the Square Point of Sale app for the seller and in the Online Store or on receipts for the buyer. | [optional] 
**show_colors** | getShowColors() | setShowColors($value) | **bool** | If true, display colors for entries in &#x60;values&#x60; when present. | [optional] 
**values** | getValues() | setValues($value) | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | A list of CatalogObjects containing the &#x60;CatalogItemOptionValue&#x60;s for this item. | [optional] 
**item_count** | getItemCount() | setItemCount($value) | **int** | The number of &#x60;CatalogItem&#x60;s currently associated with this item option. Present only if the &#x60;include_counts&#x60; was specified in the request. Any count over 100 will be returned as &#x60;100&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

