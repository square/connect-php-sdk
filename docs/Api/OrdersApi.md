# SquareConnect\OrdersApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchRetrieveOrders**](OrdersApi.md#batchRetrieveOrders) | **POST** /v2/locations/{location_id}/orders/batch-retrieve | BatchRetrieveOrders
[**createOrder**](OrdersApi.md#createOrder) | **POST** /v2/locations/{location_id}/orders | CreateOrder
[**searchOrders**](OrdersApi.md#searchOrders) | **POST** /v2/orders/search | SearchOrders


# **batchRetrieveOrders**
> \SquareConnect\Model\BatchRetrieveOrdersResponse batchRetrieveOrders($location_id, $body)

BatchRetrieveOrders

Retrieves a set of [Order](#type-order)s by their IDs.  If a given Order ID does not exist, the ID is ignored instead of generating an error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\OrdersApi();
$location_id = "location_id_example"; // string | The ID of the orders' associated location.
$body = new \SquareConnect\Model\BatchRetrieveOrdersRequest(); // \SquareConnect\Model\BatchRetrieveOrdersRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->batchRetrieveOrders($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->batchRetrieveOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the orders&#39; associated location. |
 **body** | [**\SquareConnect\Model\BatchRetrieveOrdersRequest**](../Model/BatchRetrieveOrdersRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\BatchRetrieveOrdersResponse**](../Model/BatchRetrieveOrdersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> \SquareConnect\Model\CreateOrderResponse createOrder($location_id, $body)

CreateOrder

Creates an [Order](#type-order) that can then be referenced as `order_id` in a request to the [Charge](#endpoint-charge) endpoint. Orders specify products for purchase, along with discounts, taxes, and other settings to apply to the purchase.  To associate a created order with a request to the Charge endpoint, provide the order's `id` in the `order_id` field of your request.  You cannot modify an order after you create it. If you need to modify an order, instead create a new order with modified details.  To learn more about the Orders API, see the [Orders API Overview](/products/orders/overview).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\OrdersApi();
$location_id = "location_id_example"; // string | The ID of the business location to associate the order with.
$body = new \SquareConnect\Model\CreateOrderRequest(); // \SquareConnect\Model\CreateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createOrder($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the business location to associate the order with. |
 **body** | [**\SquareConnect\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateOrderResponse**](../Model/CreateOrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOrders**
> \SquareConnect\Model\SearchOrdersResponse searchOrders($body)

SearchOrders

Search all Orders for a merchant and return either [Orders](#type-order) or [OrderEntries](#type-orderentry).  Note that details for orders processed with Square Point of Sale while in offline mode may not be transmitted to Square for up to 72 hours. Offline orders have a `created_at` value that reflects the time the order was originally processed, not the time it was subsequently transmitted to Square. Consequently, the SearchOrder endpoint might list an offline Order chronologically between online Orders that were seen in a previous request.  When fetching additional pages using a `cursor`, the `query` must be equal to the `query` used to fetch the first page of results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\OrdersApi();
$body = new \SquareConnect\Model\SearchOrdersRequest(); // \SquareConnect\Model\SearchOrdersRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->searchOrders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->searchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchOrdersRequest**](../Model/SearchOrdersRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchOrdersResponse**](../Model/SearchOrdersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

