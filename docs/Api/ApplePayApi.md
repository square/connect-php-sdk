# SquareConnect\ApplePayApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registerDomain**](ApplePayApi.md#registerDomain) | **POST** /v2/apple-pay/domains | RegisterDomain


# **registerDomain**
> \SquareConnect\Model\RegisterDomainResponse registerDomain($body)

RegisterDomain

Activates a domain for use with Web Apple Pay and Square. A validation will be performed on this domain by Apple to ensure is it properly set up as an Apple Pay enabled domain.  This endpoint provides an easy way for platform developers to bulk activate Web Apple Pay with Square for merchants using their platform.  To learn more about Apple Pay on Web see the Apple Pay section in the [Square Payment Form Walkthrough](/docs/payment-form/payment-form-walkthrough).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\ApplePayApi();
$body = new \SquareConnect\Model\RegisterDomainRequest(); // \SquareConnect\Model\RegisterDomainRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->registerDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayApi->registerDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\RegisterDomainRequest**](../Model/RegisterDomainRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\RegisterDomainResponse**](../Model/RegisterDomainResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

