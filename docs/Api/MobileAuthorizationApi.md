# SquareConnect\MobileAuthorizationApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMobileAuthorizationCode**](MobileAuthorizationApi.md#createMobileAuthorizationCode) | **POST** /mobile/authorization-code | CreateMobileAuthorizationCode


# **createMobileAuthorizationCode**
> \SquareConnect\Model\CreateMobileAuthorizationCodeResponse createMobileAuthorizationCode($body)

CreateMobileAuthorizationCode

Generates code to authorize a mobile application to connect to a Square card reader  Authorization codes are one-time-use and expire __60 minutes__ after being issued.  __Important:__ The `Authorization` header you provide to this endpoint must have the following format:  ``` Authorization: Bearer ACCESS_TOKEN ```  Replace `ACCESS_TOKEN` with a [valid production authorization credential](/docs/build-basics/access-tokens).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\MobileAuthorizationApi();
$body = new \SquareConnect\Model\CreateMobileAuthorizationCodeRequest(); // \SquareConnect\Model\CreateMobileAuthorizationCodeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createMobileAuthorizationCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAuthorizationApi->createMobileAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateMobileAuthorizationCodeRequest**](../Model/CreateMobileAuthorizationCodeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateMobileAuthorizationCodeResponse**](../Model/CreateMobileAuthorizationCodeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

