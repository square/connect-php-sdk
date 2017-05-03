# BatchDeleteCatalogObjectsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_ids** | **string[]** | The IDs of the [CatalogObject](#type-catalogobject)s to be deleted. When an object is deleted, other objects in the graph that depend on that object will be deleted as well (for example, deleting a [CatalogItem](#type-catalogitem) will delete its [CatalogItemVariation](#type-catalogitemvariation)s). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


