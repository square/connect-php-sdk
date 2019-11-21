# Error

### Description

Represents an error encountered during a request to the Connect API.  See [Handling errors](#handlingerrors) for more information.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**category** | getCategory() | setCategory($value) | **string** | The high-level category for the error. See &#x60;ErrorCategory&#x60; for possible values. See [ErrorCategory](#type-errorcategory) for possible values | 
**code** | getCode() | setCode($value) | **string** | The specific code of the error. See &#x60;ErrorCode&#x60; for possible values See [ErrorCode](#type-errorcode) for possible values | 
**detail** | getDetail() | setDetail($value) | **string** | A human-readable description of the error for debugging purposes. | [optional] 
**field** | getField() | setField($value) | **string** | The name of the field provided in the original request (if any) that the error pertains to. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

