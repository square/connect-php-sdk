# ListCatalogRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor returned in the previous response. Leave unset for an initial request. See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional] 
**types** | getTypes() | setTypes($value) | **string** | An optional case-insensitive, comma-separated list of object types to retrieve, for example &#x60;ITEM,ITEM_VARIATION,CATEGORY,IMAGE&#x60;.  The legal values are taken from the CatalogObjectType enum: &#x60;ITEM&#x60;, &#x60;ITEM_VARIATION&#x60;, &#x60;CATEGORY&#x60;, &#x60;DISCOUNT&#x60;, &#x60;TAX&#x60;, &#x60;MODIFIER&#x60;, &#x60;MODIFIER_LIST&#x60;, or &#x60;IMAGE&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

