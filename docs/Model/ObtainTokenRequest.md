# ObtainTokenRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**client_id** | getClientId() | setClientId($value) | **string** | The Square-issued ID of your application, available from the [application dashboard](https://connect.squareup.com/apps). | 
**client_secret** | getClientSecret() | setClientSecret($value) | **string** | The Square-issued application secret for your application, available from the [application dashboard](https://connect.squareup.com/apps). | 
**code** | getCode() | setCode($value) | **string** | The authorization code to exchange. This is required if &#x60;grant_type&#x60; is set to &#x60;authorization_code&#x60;, to indicate that the application wants to exchange an authorization code for an OAuth access token. | [optional] 
**redirect_uri** | getRedirectUri() | setRedirectUri($value) | **string** | The redirect URL assigned in the [application dashboard](https://connect.squareup.com/apps). | [optional] 
**grant_type** | getGrantType() | setGrantType($value) | **string** | Specifies the method to request an OAuth access token. Valid values are: &#x60;authorization_code&#x60;, &#x60;refresh_token&#x60;, and &#x60;migration_token&#x60; | 
**refresh_token** | getRefreshToken() | setRefreshToken($value) | **string** | A valid refresh token for generating a new OAuth access token. A valid refresh token is required if &#x60;grant_type&#x60; is set to &#x60;refresh_token&#x60; , to indicate the application wants a replacement for an expired OAuth access token. | [optional] 
**migration_token** | getMigrationToken() | setMigrationToken($value) | **string** | Legacy OAuth access token obtained using a Connect API version prior to 2019-03-13. This parameter is required if &#x60;grant_type&#x60; is set to &#x60;migration_token&#x60; to indicate that the application wants to get a replacement OAuth access token. The response also returns a refresh token. For more information, see [Migrate to Using Refresh Tokens](https://developer.squareup.com/docs/authz/oauth/migration). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

