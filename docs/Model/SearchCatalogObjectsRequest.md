# SearchCatalogObjectsRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor returned in the previous response. Leave unset for an initial request. See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional] 
**object_types** | getObjectTypes() | setObjectTypes($value) | **string[]** | The desired set of object types to appear in the search results. The legal values are taken from the CatalogObjectType enum: &#x60;\&quot;ITEM\&quot;&#x60;, &#x60;\&quot;ITEM_VARIATION\&quot;&#x60;, &#x60;\&quot;CATEGORY\&quot;&#x60;, &#x60;\&quot;DISCOUNT\&quot;&#x60;, &#x60;\&quot;TAX\&quot;&#x60;, &#x60;\&quot;MODIFIER\&quot;&#x60;, or &#x60;\&quot;MODIFIER_LIST\&quot;&#x60;. See [CatalogObjectType](#type-catalogobjecttype) for possible values | [optional] 
**include_deleted_objects** | getIncludeDeletedObjects() | setIncludeDeletedObjects($value) | **bool** | If &#x60;true&#x60;, deleted objects will be included in the results. Deleted objects will have their &#x60;is_deleted&#x60; field set to &#x60;true&#x60;. | [optional] 
**include_related_objects** | getIncludeRelatedObjects() | setIncludeRelatedObjects($value) | **bool** | If &#x60;true&#x60;, the response will include additional objects that are related to the requested object, as follows:  If a CatalogItem is returned in the object field of the response, its associated CatalogCategory, CatalogTax objects, CatalogImage objects and CatalogModifierList objects will be included in the &#x60;related_objects&#x60; field of the response.  If a CatalogItemVariation is returned in the object field of the response, its parent CatalogItem will be included in the &#x60;related_objects&#x60; field of the response. | [optional] 
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | Return objects modified after this [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates), in RFC 3339 format, e.g., &#x60;2016-09-04T23:59:33.123Z&#x60;. The timestamp is exclusive - objects with a timestamp equal to &#x60;begin_time&#x60; will not be included in the response. | [optional] 
**query** | getQuery() | setQuery($value) | [**\SquareConnect\Model\CatalogQuery**](CatalogQuery.md) | A query to be used to filter or sort the results. If no query is specified, the entire catalog will be returned. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | A limit on the number of results to be returned in a single page. The limit is advisory - the implementation may return more or fewer results. If the supplied limit is negative, zero, or is higher than the maximum limit of 1,000, it will be ignored. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

