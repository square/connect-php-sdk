# SquareConnect\LocationsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listLocations**](LocationsApi.md#listLocations) | **GET** /v2/locations | ListLocations


# **listLocations**
> \SquareConnect\Model\ListLocationsResponse listLocations($authorization)

ListLocations

Provides the details for all of a business's locations.  Most other Connect API endpoints have a required `location_id` path parameter. The `id` field of the [`Location`](#type-location) objects returned by this endpoint correspond to that `location_id` parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\LocationsApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.

try {
    $result = $api_instance->listLocations($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->listLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |

### Return type

[**\SquareConnect\Model\ListLocationsResponse**](../Model/ListLocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

