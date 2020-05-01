# CustomerSegment

### Description

Represents a group of customer profiles that match one or more predefined filter criteria.   Segments (also known as Smart Groups) are defined and created within Customer Directory in the Square Dashboard or Point of Sale.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | Unique Square-generated ID for the segment. | [optional] 
**name** | getName() | setName($value) | **string** | Name of the segment. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the segment was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timestamp when the segment was last updated, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

