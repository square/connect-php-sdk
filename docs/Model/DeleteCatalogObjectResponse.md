# DeleteCatalogObjectResponse

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on any errors encountered. | [optional] 
**deleted_object_ids** | getDeletedObjectIds() | setDeletedObjectIds($value) | **string[]** | The IDs of all catalog objects deleted by this request. Multiple IDs may be returned when associated objects are also deleted, for example a catalog item variation will be deleted (and its ID included in this field) when its parent catalog item is deleted. | [optional] 
**deleted_at** | getDeletedAt() | setDeletedAt($value) | **string** | The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of this deletion in RFC 3339 format, e.g., &#x60;2016-09-04T23:59:33.123Z&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

