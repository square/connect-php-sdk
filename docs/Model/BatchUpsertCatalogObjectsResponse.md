# BatchUpsertCatalogObjectsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\SquareConnect\Model\Error[]**](Error.md) | The set of [Error](#type-error)s encountered. | [optional] 
**objects** | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The created [CatalogObject](#type-catalogobject)s | [optional] 
**updated_at** | **string** | The database [timestamp](#workingwithdates) of this update in RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**id_mappings** | [**\SquareConnect\Model\CatalogIdMapping[]**](CatalogIdMapping.md) | The mapping between client and server IDs for this Upsert. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


