# SquareConnect\CheckoutApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCheckout**](CheckoutApi.md#createCheckout) | **POST** /v2/locations/{location_id}/checkouts | CreateCheckout


# **createCheckout**
> \SquareConnect\Model\CreateCheckoutResponse createCheckout($authorization, $location_id, $body)

CreateCheckout

Creates a [Checkout](#type-checkout) response that links a `checkoutId` and `checkout_page_url` that customers can be directed to in order to provide their payment information using a payment processing workflow hosted on connect.squareup.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CheckoutApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$location_id = "location_id_example"; // string | The ID of the business location to associate the checkout with.
$body = new \SquareConnect\Model\CreateCheckoutRequest(); // \SquareConnect\Model\CreateCheckoutRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCheckout($authorization, $location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **location_id** | **string**| The ID of the business location to associate the checkout with. |
 **body** | [**\SquareConnect\Model\CreateCheckoutRequest**](../Model/\SquareConnect\Model\CreateCheckoutRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCheckoutResponse**](../Model/CreateCheckoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

