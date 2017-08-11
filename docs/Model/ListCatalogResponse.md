# ListCatalogResponse

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | The set of [Error](#type-error)s encountered. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to be used in a subsequent request. If unset, this is the final response. See [Paginating results](#paginatingresults) for more information. | [optional] 
**objects** | getObjects() | setObjects($value) | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The [CatalogObject](#type-catalogobject)s returned. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

