# SearchCatalogObjectsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\SquareConnect\Model\Error[]**](Error.md) | The set of [Error](#type-error)s encountered. | [optional] 
**cursor** | **string** | The pagination cursor to be used in a subsequent request. If unset, this is the final response. See [Paginating results](#paginatingresults) for more information. | [optional] 
**objects** | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The [CatalogObject](#type-catalogobject)s returned. | [optional] 
**related_objects** | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | A list of [CatalogObject](#type-catalogobject)s referenced by the objects in the &#x60;objects&#x60; field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


