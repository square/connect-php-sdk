# SquareConnect\LocationsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLocations**](LocationsApi.md#listLocations) | **GET** /v2/locations | ListLocations


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

$api_instance = new SquareConnect\Api\LocationsApi();

try {
    $result = $api_instance->listLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->listLocations: ', $e->getMessage(), PHP_EOL;
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

