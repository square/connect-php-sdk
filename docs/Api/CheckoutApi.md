# SquareConnect\CheckoutApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCheckout**](CheckoutApi.md#createCheckout) | **POST** /v2/locations/{location_id}/checkouts | CreateCheckout


# **createCheckout**
> \SquareConnect\Model\CreateCheckoutResponse createCheckout($location_id, $body)

CreateCheckout

Links a `checkoutId` to a `checkout_page_url` that customers will be directed to in order to provide their payment information using a payment processing workflow hosted on connect.squareup.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\CheckoutApi();
$location_id = "location_id_example"; // string | The ID of the business location to associate the checkout with.
$body = new \SquareConnect\Model\CreateCheckoutRequest(); // \SquareConnect\Model\CreateCheckoutRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCheckout($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the business location to associate the checkout with. |
 **body** | [**\SquareConnect\Model\CreateCheckoutRequest**](../Model/CreateCheckoutRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCheckoutResponse**](../Model/CreateCheckoutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

