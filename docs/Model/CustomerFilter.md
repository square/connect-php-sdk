# CustomerFilter

### Description

Represents a set of `CustomerQuery` filters used to limit the set of `Customers` returned by SearchCustomers.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**creation_source** | getCreationSource() | setCreationSource($value) | [**\SquareConnect\Model\CustomerCreationSourceFilter**](CustomerCreationSourceFilter.md) | A filter to select customers based on their creation source. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | A filter to select customers based on when they were created. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | A filter to select customers based on when they were updated. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

