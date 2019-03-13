# TimeRange

### Description

Represents a generic time range. The start and end values are represented in RFC-3339 format. Time ranges are customized to be inclusive or exclusive based on the needs of a particular endpoint. Refer to the relevent endpoint-specific documentation to determine how time ranges are handled.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**start_at** | getStartAt() | setStartAt($value) | **string** | A datetime value in RFC-3339 format indicating when the time range starts. | [optional] 
**end_at** | getEndAt() | setEndAt($value) | **string** | A datetime value in RFC-3339 format indicating when the time range ends. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

