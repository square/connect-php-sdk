# SquareConnect\TerminalApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTerminalCheckout**](TerminalApi.md#cancelTerminalCheckout) | **POST** /v2/terminals/checkouts/{checkout_id}/cancel | CancelTerminalCheckout
[**createTerminalCheckout**](TerminalApi.md#createTerminalCheckout) | **POST** /v2/terminals/checkouts | CreateTerminalCheckout
[**getTerminalCheckout**](TerminalApi.md#getTerminalCheckout) | **GET** /v2/terminals/checkouts/{checkout_id} | GetTerminalCheckout
[**searchTerminalCheckouts**](TerminalApi.md#searchTerminalCheckouts) | **POST** /v2/terminals/checkouts/search | SearchTerminalCheckouts


# **cancelTerminalCheckout**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CancelTerminalCheckoutResponse cancelTerminalCheckout($checkout_id)

CancelTerminalCheckout

Cancels a Terminal checkout request, if the status of the request permits it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\TerminalApi();
$checkout_id = "checkout_id_example"; // string | Unique ID for the desired `TerminalCheckout`

try {
    $result = $apiInstance->cancelTerminalCheckout($checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->cancelTerminalCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **string**| Unique ID for the desired &#x60;TerminalCheckout&#x60; |

### Return type

[**\SquareConnect\Model\CancelTerminalCheckoutResponse**](../Model/CancelTerminalCheckoutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTerminalCheckout**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateTerminalCheckoutResponse createTerminalCheckout($body)

CreateTerminalCheckout

Creates a new Terminal checkout request and sends it to the specified device to take a payment for the requested amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\TerminalApi();
$body = new \SquareConnect\Model\CreateTerminalCheckoutRequest(); // \SquareConnect\Model\CreateTerminalCheckoutRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createTerminalCheckout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->createTerminalCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateTerminalCheckoutRequest**](../Model/CreateTerminalCheckoutRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateTerminalCheckoutResponse**](../Model/CreateTerminalCheckoutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerminalCheckout**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\GetTerminalCheckoutResponse getTerminalCheckout($checkout_id)

GetTerminalCheckout

Retrieves a Terminal checkout request by checkout_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\TerminalApi();
$checkout_id = "checkout_id_example"; // string | Unique ID for the desired `TerminalCheckout`

try {
    $result = $apiInstance->getTerminalCheckout($checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->getTerminalCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_id** | **string**| Unique ID for the desired &#x60;TerminalCheckout&#x60; |

### Return type

[**\SquareConnect\Model\GetTerminalCheckoutResponse**](../Model/GetTerminalCheckoutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTerminalCheckouts**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\SearchTerminalCheckoutsResponse searchTerminalCheckouts($body)

SearchTerminalCheckouts

Retrieves a filtered list of Terminal checkout requests created by the account making the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\TerminalApi();
$body = new \SquareConnect\Model\SearchTerminalCheckoutsRequest(); // \SquareConnect\Model\SearchTerminalCheckoutsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchTerminalCheckouts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->searchTerminalCheckouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchTerminalCheckoutsRequest**](../Model/SearchTerminalCheckoutsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchTerminalCheckoutsResponse**](../Model/SearchTerminalCheckoutsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

