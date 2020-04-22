# SquareConnect\DevicesApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeviceCode**](DevicesApi.md#createDeviceCode) | **POST** /v2/devices/codes | CreateDeviceCode
[**getDeviceCode**](DevicesApi.md#getDeviceCode) | **GET** /v2/devices/codes/{id} | GetDeviceCode
[**listDeviceCodes**](DevicesApi.md#listDeviceCodes) | **GET** /v2/devices/codes | ListDeviceCodes


# **createDeviceCode**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateDeviceCodeResponse createDeviceCode($body)

CreateDeviceCode

Creates a DeviceCode that can be used to login to a Square Terminal device to enter the connected terminal mode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DevicesApi();
$body = new \SquareConnect\Model\CreateDeviceCodeRequest(); // \SquareConnect\Model\CreateDeviceCodeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createDeviceCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDeviceCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateDeviceCodeRequest**](../Model/CreateDeviceCodeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateDeviceCodeResponse**](../Model/CreateDeviceCodeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceCode**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\GetDeviceCodeResponse getDeviceCode($id)

GetDeviceCode

Retrieves DeviceCode with the associated ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DevicesApi();
$id = "id_example"; // string | The unique identifier for the device code.

try {
    $result = $apiInstance->getDeviceCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier for the device code. |

### Return type

[**\SquareConnect\Model\GetDeviceCodeResponse**](../Model/GetDeviceCodeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDeviceCodes**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListDeviceCodesResponse listDeviceCodes($cursor, $location_id, $product_type)

ListDeviceCodes

Lists all DeviceCodes associated with the merchant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DevicesApi();
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information.
$location_id = "location_id_example"; // string | If specified, only returns DeviceCodes of the specified location. Returns DeviceCodes of all locations if empty.
$product_type = "product_type_example"; // string | If specified, only returns DeviceCodes targeting the specified product type. Returns DeviceCodes of all product types if empty.

try {
    $result = $apiInstance->listDeviceCodes($cursor, $location_id, $product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->listDeviceCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional]
 **location_id** | **string**| If specified, only returns DeviceCodes of the specified location. Returns DeviceCodes of all locations if empty. | [optional]
 **product_type** | **string**| If specified, only returns DeviceCodes targeting the specified product type. Returns DeviceCodes of all product types if empty. | [optional]

### Return type

[**\SquareConnect\Model\ListDeviceCodesResponse**](../Model/ListDeviceCodesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

