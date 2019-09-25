# SquareConnect\MerchantsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveMerchant**](MerchantsApi.md#retrieveMerchant) | **GET** /v2/merchants/{merchant_id} | RetrieveMerchant


# **retrieveMerchant**
> \SquareConnect\Model\RetrieveMerchantResponse retrieveMerchant($merchant_id)

RetrieveMerchant

Retrieve a `Merchant` object for the given `merchant_id`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\MerchantsApi();
$merchant_id = "merchant_id_example"; // string | The ID of the merchant to retrieve

try {
    $result = $apiInstance->retrieveMerchant($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->retrieveMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The ID of the merchant to retrieve |

### Return type

[**\SquareConnect\Model\RetrieveMerchantResponse**](../Model/RetrieveMerchantResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

