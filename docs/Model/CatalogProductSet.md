# CatalogProductSet

### Description

Represents a collection of catalog objects for the purpose of applying a `PricingRule`. Including a catalog object will include all of its subtypes. For example, including a category in a product set will include all of its items and associated item variations in the product set. Including an item in a product set will also include its item variations.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | User-defined name for the product set. For example, \&quot;Clearance Items\&quot; or \&quot;Winter Sale Items\&quot;. | [optional] 
**product_ids_any** | getProductIdsAny() | setProductIdsAny($value) | **string[]** | Unique IDs for any &#x60;CatalogObject&#x60; included in this product set. Any number of these catalog objects can be in an order for a pricing rule to apply.  This can be used with &#x60;product_ids_all&#x60; in a parent &#x60;CatalogProductSet&#x60; to match groups of products for a bulk discount, such as a discount for an entree and side combo.  Only one of &#x60;product_ids_all&#x60;, &#x60;product_ids_any&#x60;, or &#x60;all_products&#x60; can be set.  Max: 500 catalog object IDs. | [optional] 
**product_ids_all** | getProductIdsAll() | setProductIdsAll($value) | **string[]** | Unique IDs for any &#x60;CatalogObject&#x60; included in this product set. All objects in this set must be included in an order for a pricing rule to apply.  Only one of &#x60;product_ids_all&#x60;, &#x60;product_ids_any&#x60;, or &#x60;all_products&#x60; can be set.  Max: 500 catalog object IDs. | [optional] 
**quantity_exact** | getQuantityExact() | setQuantityExact($value) | **int** | If set, there must be exactly this many items from &#x60;products_any&#x60; or &#x60;products_all&#x60; in the cart for the discount to apply.  Cannot be combined with either &#x60;quantity_min&#x60; or &#x60;quantity_max&#x60;. | [optional] 
**quantity_min** | getQuantityMin() | setQuantityMin($value) | **int** | If set, there must be at least this many items from &#x60;products_any&#x60; or &#x60;products_all&#x60; in a cart for the discount to apply. See &#x60;quantity_exact&#x60;. Defaults to 0 if &#x60;quantity_exact&#x60;, &#x60;quantity_min&#x60; and &#x60;quantity_max&#x60; are all unspecified. | [optional] 
**quantity_max** | getQuantityMax() | setQuantityMax($value) | **int** | If set, the pricing rule will apply to a maximum of this many items from &#x60;products_any&#x60; or &#x60;products_all&#x60;. | [optional] 
**all_products** | getAllProducts() | setAllProducts($value) | **bool** | If set to &#x60;true&#x60;, the product set will include every item in the catalog.  Only one of &#x60;product_ids_all&#x60;, &#x60;product_ids_any&#x60;, or &#x60;all_products&#x60; can be set. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

