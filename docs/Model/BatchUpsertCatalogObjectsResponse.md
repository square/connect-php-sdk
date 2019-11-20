# BatchUpsertCatalogObjectsResponse

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on any errors that encountered. | [optional] 
**objects** | getObjects() | setObjects($value) | [**\SquareConnect\Model\CatalogObject[]**](CatalogObject.md) | The created successfully created CatalogObjects. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of this update in RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**id_mappings** | getIdMappings() | setIdMappings($value) | [**\SquareConnect\Model\CatalogIdMapping[]**](CatalogIdMapping.md) | The mapping between client and server IDs for this upsert. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

