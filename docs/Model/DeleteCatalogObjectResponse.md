# DeleteCatalogObjectResponse

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | The set of [Error](#type-error)s encountered. | [optional] 
**deleted_object_ids** | getDeletedObjectIds() | setDeletedObjectIds($value) | **string[]** | The IDs of all [CatalogObject](#type-catalogobject)s deleted by this request. Multiple IDs may be returned when associated objects are also deleted, for example a [CatalogItemVariation](#type-catalogitemvariation) will be deleted (and its ID included in this field) when its parent [CatalogItem](#type-catalogitem) is deleted. | [optional] 
**deleted_at** | getDeletedAt() | setDeletedAt($value) | **string** | The database [timestamp](#workingwithdates) of this deletion in RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

