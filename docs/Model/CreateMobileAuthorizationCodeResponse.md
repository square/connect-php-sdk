# CreateMobileAuthorizationCodeResponse

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**authorization_code** | getAuthorizationCode() | setAuthorizationCode($value) | **string** | Generated authorization code that connects a mobile application instance to a Square account. | [optional] 
**expires_at** | getExpiresAt() | setExpiresAt($value) | **string** | The timestamp when &#x60;authorization_code&#x60; expires in [RFC 3339](https://tools.ietf.org/html/rfc3339) format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;. | [optional] 
**error** | getError() | setError($value) | [**\SquareConnect\Model\Error**](Error.md) | An error object that provides details about how creation of authorization code failed. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

