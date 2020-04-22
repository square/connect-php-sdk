# CustomerGroup

### Description

Represents a group of customer profiles.   Customer groups can be created, modified, and have their membership defined either via  the Customers API or within Customer Directory in the Square Dashboard or Point of Sale.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | Unique Square-generated ID for the customer group. | [optional] 
**name** | getName() | setName($value) | **string** | Name of the customer group. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the customer group was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timesamp when the customer group was last updated, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

