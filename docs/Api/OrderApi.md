# SquareConnect\OrderApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](OrderApi.md#createOrder) | **POST** /v2/locations/{location_id}/orders | CreateOrder


# **createOrder**
> \SquareConnect\Model\CreateOrderResponse createOrder($location_id, $body)

CreateOrder

Creates an [Order](#type-order) that can then be included as referenced `order_id` in a request to the [Charge](#endpoint-charge) endpoint. Orders specify products for purchase, along with discounts, taxes, and other settings to apply to the purchase.  To associate a created order with a request to the Charge endpoint, provide the order's `id` in the `order_id` field of your request.  You cannot modify an order after you create it. If you need to modify an order, instead create a new order with modified details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\OrderApi();
$location_id = "location_id_example"; // string | The ID of the business location to associate the order with.
$body = new \SquareConnect\Model\CreateOrderRequest(); // \SquareConnect\Model\CreateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createOrder($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
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

