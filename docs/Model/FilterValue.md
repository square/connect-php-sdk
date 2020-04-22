# FilterValue

### Description

A filter to select resources based on an exact field value. For any given value, the value can only be in one property. Depending on the field, either all properties can be set or only a subset will be available.  Refer to the documentation of the field.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**all** | getAll() | setAll($value) | **string[]** | A list of terms that must be present on the field of the resource. | [optional] 
**any** | getAny() | setAny($value) | **string[]** | A list of terms where at least one of them must be present on the field of the resource. | [optional] 
**none** | getNone() | setNone($value) | **string[]** | A list of terms that must not be present on the field the resource | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

