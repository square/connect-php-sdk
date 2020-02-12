# SquareConnect\PaymentsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPayment**](PaymentsApi.md#cancelPayment) | **POST** /v2/payments/{payment_id}/cancel | CancelPayment
[**cancelPaymentByIdempotencyKey**](PaymentsApi.md#cancelPaymentByIdempotencyKey) | **POST** /v2/payments/cancel | CancelPaymentByIdempotencyKey
[**completePayment**](PaymentsApi.md#completePayment) | **POST** /v2/payments/{payment_id}/complete | CompletePayment
[**createPayment**](PaymentsApi.md#createPayment) | **POST** /v2/payments | CreatePayment
[**getPayment**](PaymentsApi.md#getPayment) | **GET** /v2/payments/{payment_id} | GetPayment
[**listPayments**](PaymentsApi.md#listPayments) | **GET** /v2/payments | ListPayments


# **cancelPayment**
> \SquareConnect\Model\CancelPaymentResponse cancelPayment($payment_id)

CancelPayment

Cancels (voids) a payment. If you set `autocomplete` to false when creating a payment,  you can cancel the payment using this endpoint. For more information, see  [Delayed Payments](/payments-api/take-payments#delayed-payments).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$payment_id = "payment_id_example"; // string | `payment_id` identifying the payment to be canceled.

try {
    $result = $apiInstance->cancelPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->cancelPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| &#x60;payment_id&#x60; identifying the payment to be canceled. |

### Return type

[**\SquareConnect\Model\CancelPaymentResponse**](../Model/CancelPaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelPaymentByIdempotencyKey**
> \SquareConnect\Model\CancelPaymentByIdempotencyKeyResponse cancelPaymentByIdempotencyKey($body)

CancelPaymentByIdempotencyKey

Cancels (voids) a payment identified by the idempotency key that is specified in the request.  Use this method when status of a CreatePayment request is unknown. For example, after you send a CreatePayment request a network error occurs and you don't get a response. In this case, you can direct Square to cancel the payment using this endpoint. In the request, you provide the same idempotency key that you provided in your CreatePayment request you want  to cancel. After cancelling the payment, you can submit your CreatePayment request again.  Note that if no payment with the specified idempotency key is found, no action is taken, the end point returns successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$body = new \SquareConnect\Model\CancelPaymentByIdempotencyKeyRequest(); // \SquareConnect\Model\CancelPaymentByIdempotencyKeyRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->cancelPaymentByIdempotencyKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->cancelPaymentByIdempotencyKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CancelPaymentByIdempotencyKeyRequest**](../Model/CancelPaymentByIdempotencyKeyRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CancelPaymentByIdempotencyKeyResponse**](../Model/CancelPaymentByIdempotencyKeyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completePayment**
> \SquareConnect\Model\CompletePaymentResponse completePayment($payment_id)

CompletePayment

Completes (captures) a payment.  By default, payments are set to complete immediately after they are created.  If you set autocomplete to false when creating a payment, you can complete (capture)  the payment using this endpoint. For more information, see [Delayed Payments](/payments-api/take-payments#delayed-payments).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$payment_id = "payment_id_example"; // string | Unique ID identifying the payment to be completed.

try {
    $result = $apiInstance->completePayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->completePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| Unique ID identifying the payment to be completed. |

### Return type

[**\SquareConnect\Model\CompletePaymentResponse**](../Model/CompletePaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPayment**
> \SquareConnect\Model\CreatePaymentResponse createPayment($body)

CreatePayment

Charges a payment source, for example, a card  represented by customer's card on file or a card nonce. In addition  to the payment source, the request must also include the  amount to accept for the payment.  There are several optional parameters that you can include in the request.  For example, tip money, whether to autocomplete the payment, or a reference ID to correlate this payment with another system.  For more information about these  payment options, see [Take Payments](/payments-api/take-payments).  The `PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS` OAuth permission is required to enable application fees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$body = new \SquareConnect\Model\CreatePaymentRequest(); // \SquareConnect\Model\CreatePaymentRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreatePaymentResponse**](../Model/CreatePaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayment**
> \SquareConnect\Model\GetPaymentResponse getPayment($payment_id)

GetPayment

Retrieves details for a specific Payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$payment_id = "payment_id_example"; // string | Unique ID for the desired `Payment`.

try {
    $result = $apiInstance->getPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| Unique ID for the desired &#x60;Payment&#x60;. |

### Return type

[**\SquareConnect\Model\GetPaymentResponse**](../Model/GetPaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayments**
> \SquareConnect\Model\ListPaymentsResponse listPayments($begin_time, $end_time, $sort_order, $cursor, $location_id, $total, $last_4, $card_brand)

ListPayments

Retrieves a list of payments taken by the account making the request.  Max results per page: 100

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\PaymentsApi();
$begin_time = "begin_time_example"; // string | Timestamp for the beginning of the reporting period, in RFC 3339 format. Inclusive. Default: The current time minus one year.
$end_time = "end_time_example"; // string | Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time.
$sort_order = "sort_order_example"; // string | The order in which results are listed. - `ASC` - oldest to newest - `DESC` - newest to oldest (default).
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
$location_id = "location_id_example"; // string | Limit results to the location supplied. By default, results are returned for all locations associated with the merchant.
$total = 789; // int | The exact amount in the total_money for a `Payment`.
$last_4 = "last_4_example"; // string | The last 4 digits of `Payment` card.
$card_brand = "card_brand_example"; // string | The brand of `Payment` card. For example, `VISA`

try {
    $result = $apiInstance->listPayments($begin_time, $end_time, $sort_order, $cursor, $location_id, $total, $last_4, $card_brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **string**| Timestamp for the beginning of the reporting period, in RFC 3339 format. Inclusive. Default: The current time minus one year. | [optional]
 **end_time** | **string**| Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time. | [optional]
 **sort_order** | **string**| The order in which results are listed. - &#x60;ASC&#x60; - oldest to newest - &#x60;DESC&#x60; - newest to oldest (default). | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional]
 **location_id** | **string**| Limit results to the location supplied. By default, results are returned for all locations associated with the merchant. | [optional]
 **total** | **int**| The exact amount in the total_money for a &#x60;Payment&#x60;. | [optional]
 **last_4** | **string**| The last 4 digits of &#x60;Payment&#x60; card. | [optional]
 **card_brand** | **string**| The brand of &#x60;Payment&#x60; card. For example, &#x60;VISA&#x60; | [optional]

### Return type

[**\SquareConnect\Model\ListPaymentsResponse**](../Model/ListPaymentsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

