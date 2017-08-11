# UpsertCatalogObjectRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A value you specify that uniquely identifies this request among all your requests. A common way to create a valid idempotency key is to use a Universally unique identifier (UUID).  If you&#39;re unsure whether a particular request was successful, you can reattempt it with the same idempotency key without worrying about creating duplicate objects.  See [Idempotency keys](#idempotencykeys) for more information. | 
**object** | getObject() | setObject($value) | [**\SquareConnect\Model\CatalogObject**](CatalogObject.md) | A [CatalogObject](#type-catalogobject) to be created or updated. The object&#39;s &#x60;is_deleted&#x60; field must not be set to &#x60;true&#x60;. When creating a new object, the object&#39;s ID must either start with a &#x60;#&#x60; character or be left blank. In either case it will be replaced with a server-generated ID. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

