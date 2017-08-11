# Error

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**category** | getCategory() | setCategory($value) | **string** | The error&#39;s high-level category. See [ErrorCategory](#type-errorcategory) for possible values. | 
**code** | getCode() | setCode($value) | **string** | The error&#39;s specific code. See [ErrorCode](#type-errorcode) for possible values | 
**detail** | getDetail() | setDetail($value) | **string** | A human-readable description of the error for debugging purposes. | [optional] 
**field** | getField() | setField($value) | **string** | The name of the field provided in the original request that the error pertains to, if any. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

