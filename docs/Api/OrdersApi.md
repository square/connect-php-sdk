# SquareConnect\OrdersApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchRetrieveOrders**](OrdersApi.md#batchRetrieveOrders) | **POST** /v2/locations/{location_id}/orders/batch-retrieve | BatchRetrieveOrders
[**createOrder**](OrdersApi.md#createOrder) | **POST** /v2/locations/{location_id}/orders | CreateOrder
[**payOrder**](OrdersApi.md#payOrder) | **POST** /v2/orders/{order_id}/pay | PayOrder
[**searchOrders**](OrdersApi.md#searchOrders) | **POST** /v2/orders/search | SearchOrders
[**updateOrder**](OrdersApi.md#updateOrder) | **PUT** /v2/locations/{location_id}/orders/{order_id} | UpdateOrder


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

$apiInstance = new SquareConnect\Api\OrdersApi();
$location_id = "location_id_example"; // string | The ID of the orders' associated location.
$body = new \SquareConnect\Model\BatchRetrieveOrdersRequest(); // \SquareConnect\Model\BatchRetrieveOrdersRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->batchRetrieveOrders($location_id, $body);
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

Creates a new [Order](#type-order) which can include information on products for purchase and settings to apply to the purchase.  To pay for a created order, please refer to the [Pay for Orders](/orders-api/pay-for-orders) guide.  You can modify open orders using the [UpdateOrder](#endpoint-orders-updateorder) endpoint.  To learn more about the Orders API, see the [Orders API Overview](/orders-api/what-it-does).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\OrdersApi();
$location_id = "location_id_example"; // string | The ID of the business location to associate the order with.
$body = new \SquareConnect\Model\CreateOrderRequest(); // \SquareConnect\Model\CreateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createOrder($location_id, $body);
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

# **payOrder**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\PayOrderResponse payOrder($order_id, $body)

PayOrder

Pay for an [order](#type-order) using one or more approved [payments](#type-payment), or settle an order with a total of `0`.  The total of the `payment_ids` listed in the request must be equal to the order total. Orders with a total amount of `0` can be marked as paid by specifying an empty array of `payment_ids` in the request.  To be used with PayOrder, a payment must:  - Reference the order by specifying the `order_id` when [creating the payment](#endpoint-payments-createpayment). Any approved payments that reference the same `order_id` not specified in the `payment_ids` will be canceled. - Be approved with [delayed capture](/payments-api/take-payments#delayed-capture). Using a delayed capture payment with PayOrder will complete the approved payment.  Learn how to [pay for orders with a single payment using the Payments API](/orders-api/pay-for-orders).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\OrdersApi();
$order_id = "order_id_example"; // string | The ID of the order being paid.
$body = new \SquareConnect\Model\PayOrderRequest(); // \SquareConnect\Model\PayOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->payOrder($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->payOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The ID of the order being paid. |
 **body** | [**\SquareConnect\Model\PayOrderRequest**](../Model/PayOrderRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\PayOrderResponse**](../Model/PayOrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOrders**
> \SquareConnect\Model\SearchOrdersResponse searchOrders($body)

SearchOrders

Search all orders for one or more locations. Orders include all sales, returns, and exchanges regardless of how or when they entered the Square Ecosystem (e.g. Point of Sale, Invoices, Connect APIs, etc).  SearchOrders requests need to specify which locations to search and define a [`SearchOrdersQuery`](#type-searchordersquery) object which controls how to sort or filter the results. Your SearchOrdersQuery can:    Set filter criteria.   Set sort order.   Determine whether to return results as complete Order objects, or as [OrderEntry](#type-orderentry) objects.  Note that details for orders processed with Square Point of Sale while in offline mode may not be transmitted to Square for up to 72 hours. Offline orders have a `created_at` value that reflects the time the order was created, not the time it was subsequently transmitted to Square.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\OrdersApi();
$body = new \SquareConnect\Model\SearchOrdersRequest(); // \SquareConnect\Model\SearchOrdersRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchOrders($body);
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

# **updateOrder**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\UpdateOrderResponse updateOrder($location_id, $order_id, $body)

UpdateOrder

Updates an open [Order](#type-order) by adding, replacing, or deleting fields. Orders with a `COMPLETED` or `CANCELED` state cannot be updated.  An UpdateOrder request requires the following:  - The `order_id` in the endpoint path, identifying the order to update. - The latest `version` of the order to update. - The [sparse order](/orders-api/manage-orders#sparse-order-objects) containing only the fields to update and the version the update is being applied to. - If deleting fields, the [dot notation paths](/orders-api/manage-orders#on-dot-notation) identifying fields to clear.  To pay for an order, please refer to the [Pay for Orders](/orders-api/pay-for-orders) guide.  To learn more about the Orders API, see the [Orders API Overview](/orders-api/what-it-does).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\OrdersApi();
$location_id = "location_id_example"; // string | The ID of the order's associated location.
$order_id = "order_id_example"; // string | The ID of the order to update.
$body = new \SquareConnect\Model\UpdateOrderRequest(); // \SquareConnect\Model\UpdateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateOrder($location_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the order&#39;s associated location. |
 **order_id** | **string**| The ID of the order to update. |
 **body** | [**\SquareConnect\Model\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateOrderResponse**](../Model/UpdateOrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

