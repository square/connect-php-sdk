# SquareConnect\LocationsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocation**](LocationsApi.md#createLocation) | **POST** /v2/locations | CreateLocation
[**listLocations**](LocationsApi.md#listLocations) | **GET** /v2/locations | ListLocations
[**retrieveLocation**](LocationsApi.md#retrieveLocation) | **GET** /v2/locations/{location_id} | RetrieveLocation
[**updateLocation**](LocationsApi.md#updateLocation) | **PUT** /v2/locations/{location_id} | UpdateLocation


# **createLocation**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateLocationResponse createLocation($body)

CreateLocation

Creates a location. For more information about locations, see [Locations API Overview](/locations-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LocationsApi();
$body = new \SquareConnect\Model\CreateLocationRequest(); // \SquareConnect\Model\CreateLocationRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createLocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->createLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateLocationRequest**](../Model/CreateLocationRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateLocationResponse**](../Model/CreateLocationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLocations**
> \SquareConnect\Model\ListLocationsResponse listLocations()

ListLocations

Provides information of all locations of a business.  Most other Connect API endpoints have a required `location_id` path parameter. The `id` field of the [`Location`](#type-location) objects returned by this endpoint correspond to that `location_id` parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LocationsApi();

try {
    $result = $apiInstance->listLocations();
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

# **retrieveLocation**
> \SquareConnect\Model\RetrieveLocationResponse retrieveLocation($location_id)

RetrieveLocation

Retrieves details of a location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LocationsApi();
$location_id = "location_id_example"; // string | The ID of the location to retrieve.

try {
    $result = $apiInstance->retrieveLocation($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->retrieveLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveLocationResponse**](../Model/RetrieveLocationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocation**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\UpdateLocationResponse updateLocation($location_id, $body)

UpdateLocation

Updates a location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LocationsApi();
$location_id = "location_id_example"; // string | The ID of the location to update.
$body = new \SquareConnect\Model\UpdateLocationRequest(); // \SquareConnect\Model\UpdateLocationRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateLocation($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to update. |
 **body** | [**\SquareConnect\Model\UpdateLocationRequest**](../Model/UpdateLocationRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateLocationResponse**](../Model/UpdateLocationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

