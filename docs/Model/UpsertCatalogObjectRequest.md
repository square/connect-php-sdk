# UpsertCatalogObjectRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A value you specify that uniquely identifies this request among all your requests. A common way to create a valid idempotency key is to use a Universally unique identifier (UUID).  If you&#39;re unsure whether a particular request was successful, you can reattempt it with the same idempotency key without worrying about creating duplicate objects.  See [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) for more information. | 
**object** | getObject() | setObject($value) | [**\SquareConnect\Model\CatalogObject**](CatalogObject.md) | A CatalogObject to be created or updated.  - For updates, the object must be active (the &#x60;is_deleted&#x60; field is not &#x60;true&#x60;). - For creates, the object ID must start with &#x60;#&#x60;. The provided ID is replaced with a server-generated ID. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

