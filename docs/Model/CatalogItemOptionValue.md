# CatalogItemOptionValue

### Description

An enumerated value that can link a [CatalogItemVariation(#type-catalogitemvariation) to an item option as one of its item option values.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**item_option_id** | getItemOptionId() | setItemOptionId($value) | **string** | Unique ID of the associated item option. | [optional] 
**name** | getName() | setName($value) | **string** | Name of this item option value. Searchable. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The option value&#39;s human-readable description. | [optional] 
**color** | getColor() | setColor($value) | **string** | The HTML color for this value in the format #FFRRGGBB or #RRGGBB (e.g., \&quot;#ff8d4e85\&quot;). Only displayed if parent Item Option&#39;s &#x60;show_colors&#x60; flag is enabled. value. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | Determines where this option value appears in a list of option values. | [optional] 
**item_variation_count** | getItemVariationCount() | setItemVariationCount($value) | **int** | The number of [CatalogItemVariation(#type-catalogitemvariation)s that currently make use of this Item Option value. Present only if &#x60;retrieve_counts&#x60; was specified on the request used to retrieve the parent Item Option of this value.  Maximum: 100 counts. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

