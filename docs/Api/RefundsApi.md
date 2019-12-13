# SquareConnect\RefundsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentRefund**](RefundsApi.md#getPaymentRefund) | **GET** /v2/refunds/{refund_id} | GetPaymentRefund
[**listPaymentRefunds**](RefundsApi.md#listPaymentRefunds) | **GET** /v2/refunds | ListPaymentRefunds
[**refundPayment**](RefundsApi.md#refundPayment) | **POST** /v2/refunds | RefundPayment


# **getPaymentRefund**
> \SquareConnect\Model\GetPaymentRefundResponse getPaymentRefund($refund_id)

GetPaymentRefund

Retrieves a specific `Refund` using the `refund_id`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\RefundsApi();
$refund_id = "refund_id_example"; // string | Unique ID for the desired `PaymentRefund`.

try {
    $result = $apiInstance->getPaymentRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->getPaymentRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| Unique ID for the desired &#x60;PaymentRefund&#x60;. |

### Return type

[**\SquareConnect\Model\GetPaymentRefundResponse**](../Model/GetPaymentRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPaymentRefunds**
> \SquareConnect\Model\ListPaymentRefundsResponse listPaymentRefunds($begin_time, $end_time, $sort_order, $cursor, $location_id, $status, $source_type)

ListPaymentRefunds

Retrieves a list of refunds for the account making the request.  Max results per page: 100

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\RefundsApi();
$begin_time = "begin_time_example"; // string | Timestamp for the beginning of the requested reporting period, in RFC 3339 format.  Default: The current time minus one year.
$end_time = "end_time_example"; // string | Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time.
$sort_order = "sort_order_example"; // string | The order in which results are listed. - `ASC` - oldest to newest - `DESC` - newest to oldest (default).
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
$location_id = "location_id_example"; // string | ID of location associated with payment.
$status = "status_example"; // string | If provided, only refunds with the given status are returned. For a list of refund status values, see `PaymentRefund`.  Default: If omitted refunds are returned regardless of status.
$source_type = "source_type_example"; // string | If provided, only refunds with the given source type are returned. - `CARD` - List refunds only for payments where card was specified as payment source.  Default: If omitted refunds are returned regardless of source type.

try {
    $result = $apiInstance->listPaymentRefunds($begin_time, $end_time, $sort_order, $cursor, $location_id, $status, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->listPaymentRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **begin_time** | **string**| Timestamp for the beginning of the requested reporting period, in RFC 3339 format.  Default: The current time minus one year. | [optional]
 **end_time** | **string**| Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time. | [optional]
 **sort_order** | **string**| The order in which results are listed. - &#x60;ASC&#x60; - oldest to newest - &#x60;DESC&#x60; - newest to oldest (default). | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | [optional]
 **location_id** | **string**| ID of location associated with payment. | [optional]
 **status** | **string**| If provided, only refunds with the given status are returned. For a list of refund status values, see &#x60;PaymentRefund&#x60;.  Default: If omitted refunds are returned regardless of status. | [optional]
 **source_type** | **string**| If provided, only refunds with the given source type are returned. - &#x60;CARD&#x60; - List refunds only for payments where card was specified as payment source.  Default: If omitted refunds are returned regardless of source type. | [optional]

### Return type

[**\SquareConnect\Model\ListPaymentRefundsResponse**](../Model/ListPaymentRefundsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPayment**
> \SquareConnect\Model\RefundPaymentResponse refundPayment($body)

RefundPayment

Refunds a payment. You can refund the entire payment amount or a  portion of it. For more information, see  [Payments and Refunds Overview](/payments-api/overview).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\RefundsApi();
$body = new \SquareConnect\Model\RefundPaymentRequest(); // \SquareConnect\Model\RefundPaymentRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->refundPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\RefundPaymentRequest**](../Model/RefundPaymentRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\RefundPaymentResponse**](../Model/RefundPaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

