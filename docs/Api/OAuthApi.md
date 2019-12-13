# SquareConnect\OAuthApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**obtainToken**](OAuthApi.md#obtainToken) | **POST** /oauth2/token | ObtainToken
[**renewToken**](OAuthApi.md#renewToken) | **POST** /oauth2/clients/{client_id}/access-token/renew | RenewToken
[**revokeToken**](OAuthApi.md#revokeToken) | **POST** /oauth2/revoke | RevokeToken


# **obtainToken**
> \SquareConnect\Model\ObtainTokenResponse obtainToken($body)

ObtainToken

Returns an OAuth access token.  The endpoint supports distinct methods of obtaining OAuth access tokens. Applications specify a method by adding the `grant_type` parameter in the request and also provide relevant information. For more information, see [OAuth access token management](/authz/oauth/how-it-works#oauth-access-token-management).  __Note:__ Regardless of the method application specified, the endpoint always returns two items; an OAuth access token and a refresh token in the response.  __OAuth tokens should only live on secure servers. Application clients should never interact directly with OAuth tokens__.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SquareConnect\Api\OAuthApi();
$body = new \SquareConnect\Model\ObtainTokenRequest(); // \SquareConnect\Model\ObtainTokenRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->obtainToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->obtainToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\ObtainTokenRequest**](../Model/ObtainTokenRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\ObtainTokenResponse**](../Model/ObtainTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewToken**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\RenewTokenResponse renewToken($client_id, $body)

RenewToken

`RenewToken` is deprecated. For information about refreshing OAuth access tokens, see [Renew OAuth Token](https://developer.squareup.com/docs/oauth-api/cookbook/renew-oauth-tokens).   Renews an OAuth access token before it expires.  OAuth access tokens besides your application's personal access token expire after __30 days__. You can also renew expired tokens within __15 days__ of their expiration. You cannot renew an access token that has been expired for more than 15 days. Instead, the associated user must re-complete the OAuth flow from the beginning.  __Important:__ The `Authorization` header for this endpoint must have the following format:  ``` Authorization: Client APPLICATION_SECRET ```  Replace `APPLICATION_SECRET` with the application secret on the Credentials page in the [application dashboard](https://connect.squareup.com/apps).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2ClientSecret
$config = SquareConnect\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SquareConnect\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SquareConnect\Api\OAuthApi();
$client_id = "client_id_example"; // string | Your application ID, available from the [application dashboard](https://connect.squareup.com/apps).
$body = new \SquareConnect\Model\RenewTokenRequest(); // \SquareConnect\Model\RenewTokenRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->renewToken($client_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->renewToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Your application ID, available from the [application dashboard](https://connect.squareup.com/apps). |
 **body** | [**\SquareConnect\Model\RenewTokenRequest**](../Model/RenewTokenRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\RenewTokenResponse**](../Model/RenewTokenResponse.md)

### Authorization

[oauth2ClientSecret](../../README.md#oauth2ClientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeToken**
> \SquareConnect\Model\RevokeTokenResponse revokeToken($body)

RevokeToken

Revokes an access token generated with the OAuth flow.  If an account has more than one OAuth access token for your application, this endpoint revokes all of them, regardless of which token you specify. When an OAuth access token is revoked, all of the active subscriptions associated with that OAuth token are canceled immediately.  __Important:__ The `Authorization` header for this endpoint must have the following format:  ``` Authorization: Client APPLICATION_SECRET ```  Replace `APPLICATION_SECRET` with the application secret on the Credentials page in the [application dashboard](https://connect.squareup.com/apps).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2ClientSecret
$config = SquareConnect\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SquareConnect\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new SquareConnect\Api\OAuthApi();
$body = new \SquareConnect\Model\RevokeTokenRequest(); // \SquareConnect\Model\RevokeTokenRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->revokeToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\RevokeTokenRequest**](../Model/RevokeTokenRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\RevokeTokenResponse**](../Model/RevokeTokenResponse.md)

### Authorization

[oauth2ClientSecret](../../README.md#oauth2ClientSecret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

