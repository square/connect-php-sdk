# CatalogQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sorted_attribute_query** | [**\SquareConnect\Model\CatalogQuerySortedAttribute**](CatalogQuerySortedAttribute.md) | A query that returns all objects, sorted by the given attribute. | [optional] 
**exact_query** | [**\SquareConnect\Model\CatalogQueryExact**](CatalogQueryExact.md) | A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive value. | [optional] 
**prefix_query** | [**\SquareConnect\Model\CatalogQueryPrefix**](CatalogQueryPrefix.md) | A query that returns only objects for which the given (string-valued) attribute has the given case-insensitive prefix. | [optional] 
**range_query** | [**\SquareConnect\Model\CatalogQueryRange**](CatalogQueryRange.md) | A query that returns only objects for which the given (integer-valued) attribute lies in the given range. | [optional] 
**text_query** | [**\SquareConnect\Model\CatalogQueryText**](CatalogQueryText.md) | A query that returns only objects whose searchable attributes contain all of the given keywords as prefixes. For example, if a [CatalogItem](#type-catalogitem) contains attributes &#x60;{\&quot;name\&quot;: \&quot;t-shirt\&quot;}&#x60; and &#x60;{\&quot;description\&quot;: \&quot;Small, Purple\&quot;}&#x60;, it will be matched by the query &#x60;{\&quot;keywords\&quot;: [\&quot;shirt\&quot;, \&quot;sma\&quot;, \&quot;purp\&quot;]}&#x60;. | [optional] 
**items_for_tax_query** | [**\SquareConnect\Model\CatalogQueryItemsForTax**](CatalogQueryItemsForTax.md) | A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogTax](#type-catalogtax)es enabled. | [optional] 
**items_for_modifier_list_query** | [**\SquareConnect\Model\CatalogQueryItemsForModifierList**](CatalogQueryItemsForModifierList.md) | A query that returns all [CatalogItem](#type-catalogitem)s that have any of the given [CatalogModifierList](#type-catalogmodifierlist)s enabled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


