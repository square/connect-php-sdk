# SquareConnect\LocationApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLocations**](LocationApi.md#listLocations) | **GET** /v2/locations | ListLocations
[**v1ListLocations**](LocationApi.md#v1ListLocations) | **GET** /v1/me/locations | Provides details for a business&#39;s locations, including their IDs.
[**v1RetrieveBusiness**](LocationApi.md#v1RetrieveBusiness) | **GET** /v1/me | Get a business&#39;s information.


# **listLocations**
> \SquareConnect\Model\ListLocationsResponse listLocations()

ListLocations

Provides the details for all of a business's locations.  Most other Connect API endpoints have a required `location_id` path parameter. The `id` field of the [`Location`](#type-location) objects returned by this endpoint correspond to that `location_id` parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\LocationApi();

try {
    $result = $api_instance->listLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->listLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\ListLocationsResponse**](../Model/ListLocationsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListLocations**
> \SquareConnect\Model\V1Merchant[] v1ListLocations()

Provides details for a business's locations, including their IDs.

Provides details for a business's locations, including their IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\LocationApi();

try {
    $result = $api_instance->v1ListLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1ListLocations: ', $e->getMessage(), PHP_EOL;
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

# **v1RetrieveBusiness**
> \SquareConnect\Model\V1Merchant v1RetrieveBusiness()

Get a business's information.

Get a business's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\LocationApi();

try {
    $result = $api_instance->v1RetrieveBusiness();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->v1RetrieveBusiness: ', $e->getMessage(), PHP_EOL;
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

