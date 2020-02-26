# CreateDisputeEvidenceFileRequest

### Description

Defines parameters for a CreateDisputeEvidenceFile request.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | Unique ID. For more information, see [Idempotency](https://developer.squareup.com/docs/docs/working-with-apis/idempotency). | 
**evidence_type** | getEvidenceType() | setEvidenceType($value) | **string** | The type of evidence you are uploading. See [DisputeEvidenceType](#type-disputeevidencetype) for possible values | [optional] 
**content_type** | getContentType() | setContentType($value) | **string** | The MIME type of the uploaded file. One of image/heic, image/heif, image/jpeg, application/pdf,  image/png, image/tiff. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

