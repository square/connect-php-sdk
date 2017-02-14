# SquareConnect\RefundApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](RefundApi.md#createRefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
[**listRefunds**](RefundApi.md#listRefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds


# **createRefund**
> \SquareConnect\Model\CreateRefundResponse createRefund($authorization, $location_id, $transaction_id, $body)

CreateRefund

Initiates a refund for a previously charged tender.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\RefundApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$location_id = "location_id_example"; // string | The ID of the original transaction's associated location.
$transaction_id = "transaction_id_example"; // string | The ID of the original transaction that includes the tender to refund.
$body = new \SquareConnect\Model\CreateRefundRequest(); // \SquareConnect\Model\CreateRefundRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createRefund($authorization, $location_id, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **location_id** | **string**| The ID of the original transaction&#39;s associated location. |
 **transaction_id** | **string**| The ID of the original transaction that includes the tender to refund. |
 **body** | [**\SquareConnect\Model\CreateRefundRequest**](../Model/\SquareConnect\Model\CreateRefundRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateRefundResponse**](../Model/CreateRefundResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefunds**
> \SquareConnect\Model\ListRefundsResponse listRefunds($authorization, $location_id, $begin_time, $end_time, $sort_order, $cursor)

ListRefunds

Lists refunds for one of a business's locations.  Refunds with a `status` of `PENDING` are not currently included in this endpoint's response.  Max results per [page](#paginatingresults): 50

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\RefundApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$location_id = "location_id_example"; // string | The ID of the location to list refunds for.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time.
$sort_order = "sort_order_example"; // string | The order in which results are listed in the response (`ASC` for oldest first, `DESC` for newest first).  Default value: `DESC`
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->listRefunds($authorization, $location_id, $begin_time, $end_time, $sort_order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->listRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **location_id** | **string**| The ID of the location to list refunds for. |
 **begin_time** | **string**| The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time. | [optional]
 **sort_order** | **string**| The order in which results are listed in the response (&#x60;ASC&#x60; for oldest first, &#x60;DESC&#x60; for newest first).  Default value: &#x60;DESC&#x60; | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListRefundsResponse**](../Model/ListRefundsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

