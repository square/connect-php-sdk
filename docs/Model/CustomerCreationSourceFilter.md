# CustomerCreationSourceFilter

### Description

Creation source filter.  If one or more creation sources are set, customer profiles are included in, or excluded from, the result if they match at least one of the filter criteria.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**values** | getValues() | setValues($value) | **string[]** | The list of creation sources used as filtering criteria. See [CustomerCreationSource](#type-customercreationsource) for possible values | [optional] 
**rule** | getRule() | setRule($value) | **string** | Indicates whether a customer profile matching the filter criteria should be included in the result or excluded from the result.  Default: &#x60;INCLUDE&#x60;. See [CustomerInclusionExclusion](#type-customerinclusionexclusion) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

