# SquareConnect\V1LocationsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLocations**](V1LocationsApi.md#listLocations) | **GET** /v1/me/locations | Provides details for a business&#39;s locations, including their IDs.
[**retrieveBusiness**](V1LocationsApi.md#retrieveBusiness) | **GET** /v1/me | Get a business&#39;s information.


# **listLocations**
> \SquareConnect\Model\V1Merchant[] listLocations()

Provides details for a business's locations, including their IDs.

Provides details for a business's locations, including their IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1LocationsApi();

try {
    $result = $api_instance->listLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1LocationsApi->listLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\V1Merchant[]**](../Model/V1Merchant.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveBusiness**
> \SquareConnect\Model\V1Merchant retrieveBusiness()

Get a business's information.

Get a business's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1LocationsApi();

try {
    $result = $api_instance->retrieveBusiness();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1LocationsApi->retrieveBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\V1Merchant**](../Model/V1Merchant.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

