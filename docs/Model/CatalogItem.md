# CatalogItem

### Description

An item (i.e., product family) in the Catalog object model.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The item&#39;s name. Searchable. This field must not be empty. This field has max length of 512 Unicode code points. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The item&#39;s description. Searchable. This field has max length of 4096 Unicode code points. | [optional] 
**abbreviation** | getAbbreviation() | setAbbreviation($value) | **string** | The text of the item&#39;s display label in the Square Point of Sale app. Only up to the first five characters of the string are used. Searchable. This field has max length of 24 Unicode code points. | [optional] 
**label_color** | getLabelColor() | setLabelColor($value) | **string** | The color of the item&#39;s display label in the Square Point of Sale app. This must be a valid hex color code. | [optional] 
**available_online** | getAvailableOnline() | setAvailableOnline($value) | **bool** | If &#x60;true&#x60;, the item can be added to shipping orders from the merchant&#39;s online store. | [optional] 
**available_for_pickup** | getAvailableForPickup() | setAvailableForPickup($value) | **bool** | If &#x60;true&#x60;, the item can be added to pickup orders from the merchant&#39;s online store. | [optional] 
**available_electronically** | getAvailableElectronically() | setAvailableElectronically($value) | **bool** | If &#x60;true&#x60;, the item can be added to electronically fulfilled orders from the merchant&#39;s online store. | [optional] 
**category_id** | getCategoryId() | setCategoryId($value) | **string** | The ID of the item&#39;s category, if any. | [optional] 
**tax_ids** | getTaxIds() | setTaxIds($value) | **string[]** | A set of IDs indicating the taxes enabled for this item. When updating an item, any taxes listed here will be added to the item. Taxes may also be added to or deleted from an item using &#x60;UpdateItemTaxes&#x60;. | [optional] 
**modifier_list_info** | getModifierListInfo() | setModifierListInfo($value) | [**\SquareConnect\Model\CatalogItemModifierListInfo[]**](CatalogItemModifierListInfo.md) | A set of &#x60;CatalogItemModifierListInfo&#x60; objects representing the modifier lists that apply to this item, along with the overrides and min and max limits that are specific to this item. Modifier lists may also be added to or deleted from an item using &#x60;UpdateItemModifierLists&#x60;. | [optional] 
**variations** | getVariations() | setVariations($value) | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | A list of CatalogObjects containing the &#x60;CatalogItemVariation&#x60;s for this item. | [optional] 
**product_type** | getProductType() | setProductType($value) | **string** | The product type of the item. May not be changed once an item has been created.  Only items of product type &#x60;REGULAR&#x60; or &#x60;APPOINTMENTS_SERVICE&#x60; may be created by this API; items with other product types are read-only. See [CatalogItemProductType](#type-catalogitemproducttype) for possible values | [optional] 
**skip_modifier_screen** | getSkipModifierScreen() | setSkipModifierScreen($value) | **bool** | If &#x60;false&#x60;, the Square Point of Sale app will present the &#x60;CatalogItem&#x60;&#39;s details screen immediately, allowing the merchant to choose &#x60;CatalogModifier&#x60;s before adding the item to the cart.  This is the default behavior.  If &#x60;true&#x60;, the Square Point of Sale app will immediately add the item to the cart with the pre-selected modifiers, and merchants can edit modifiers by drilling down onto the item&#39;s details.  Third-party clients are encouraged to implement similar behaviors. | [optional] 
**item_options** | getItemOptions() | setItemOptions($value) | [**\SquareConnect\Model\CatalogItemOptionForItem[]**](CatalogItemOptionForItem.md) | List of item options IDs for this item. Used to manage and group item variations in a specified order.  Maximum: 6 item options. | [optional] [beta]

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

