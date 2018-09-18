# SquareConnect\TransactionsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**captureTransaction**](TransactionsApi.md#captureTransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
[**charge**](TransactionsApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
[**createRefund**](TransactionsApi.md#createRefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
[**listRefunds**](TransactionsApi.md#listRefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
[**listTransactions**](TransactionsApi.md#listTransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
[**retrieveTransaction**](TransactionsApi.md#retrieveTransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
[**voidTransaction**](TransactionsApi.md#voidTransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction


# **captureTransaction**
> \SquareConnect\Model\CaptureTransactionResponse captureTransaction($location_id, $transaction_id)

CaptureTransaction

Captures a transaction that was created with the [Charge](#endpoint-charge) endpoint with a `delay_capture` value of `true`.  See [Delayed capture transactions](/payments/transactions/overview#delayed-capture) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 

try {
    $result = $api_instance->captureTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->captureTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **transaction_id** | **string**|  |

### Return type

[**\SquareConnect\Model\CaptureTransactionResponse**](../Model/CaptureTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charge**
> \SquareConnect\Model\ChargeResponse charge($location_id, $body)

Charge

Charges a card represented by a card nonce or a customer's card on file.  Your request to this endpoint must include _either_:  - A value for the `card_nonce` parameter (to charge a card nonce generated with the `SqPaymentForm`) - Values for the `customer_card_id` and `customer_id` parameters (to charge a customer's card on file)  In order for an eCommerce payment to potentially qualify for [Square chargeback protection](https://squareup.com/help/article/5394), you _must_ provide values for the following parameters in your request:  - `buyer_email_address` - At least one of `billing_address` or `shipping_address`  When this response is returned, the amount of Square's processing fee might not yet be calculated. To obtain the processing fee, wait about ten seconds and call [RetrieveTransaction](#endpoint-retrievetransaction). See the `processing_fee_money` field of each [Tender included](#type-tender) in the transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to associate the created transaction with.
$body = new \SquareConnect\Model\ChargeRequest(); // \SquareConnect\Model\ChargeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->charge($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->charge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to associate the created transaction with. |
 **body** | [**\SquareConnect\Model\ChargeRequest**](../Model/ChargeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRefund**
> \SquareConnect\Model\CreateRefundResponse createRefund($location_id, $transaction_id, $body)

CreateRefund

Initiates a refund for a previously charged tender.  You must issue a refund within 120 days of the associated payment. See [this article](https://squareup.com/help/us/en/article/5060) for more information on refund behavior.  NOTE: Card-present transactions with Interac credit cards **cannot be refunded using the Connect API**. Interac transactions must refunded in-person (e.g., dipping the card using POS app).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the original transaction's associated location.
$transaction_id = "transaction_id_example"; // string | The ID of the original transaction that includes the tender to refund.
$body = new \SquareConnect\Model\CreateRefundRequest(); // \SquareConnect\Model\CreateRefundRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createRefund($location_id, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the original transaction&#39;s associated location. |
 **transaction_id** | **string**| The ID of the original transaction that includes the tender to refund. |
 **body** | [**\SquareConnect\Model\CreateRefundRequest**](../Model/CreateRefundRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateRefundResponse**](../Model/CreateRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefunds**
> \SquareConnect\Model\ListRefundsResponse listRefunds($location_id, $begin_time, $end_time, $sort_order, $cursor)

ListRefunds

Lists refunds for one of a business's locations.  In addition to full or partial tender refunds processed through Square APIs, refunds may result from itemized returns or exchanges through Square's Point of Sale applications.  Refunds with a `status` of `PENDING` are not currently included in this endpoint's response.  Max results per [page](#paginatingresults): 50

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list refunds for.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time.
$sort_order = "sort_order_example"; // string | The order in which results are listed in the response (`ASC` for oldest first, `DESC` for newest first).  Default value: `DESC`
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->listRefunds($location_id, $begin_time, $end_time, $sort_order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list refunds for. |
 **begin_time** | **string**| The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time. | [optional]
 **sort_order** | **string**| The order in which results are listed in the response (&#x60;ASC&#x60; for oldest first, &#x60;DESC&#x60; for newest first).  Default value: &#x60;DESC&#x60; | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListRefundsResponse**](../Model/ListRefundsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransactions**
> \SquareConnect\Model\ListTransactionsResponse listTransactions($location_id, $begin_time, $end_time, $sort_order, $cursor)

ListTransactions

Lists transactions for a particular location.  Transactions include payment information from sales and exchanges and refund information from returns and exchanges.  Max results per [page](#paginatingresults): 50

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list transactions for.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time.
$sort_order = "sort_order_example"; // string | The order in which results are listed in the response (`ASC` for oldest first, `DESC` for newest first).  Default value: `DESC`
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->listTransactions($location_id, $begin_time, $end_time, $sort_order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list transactions for. |
 **begin_time** | **string**| The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time. | [optional]
 **sort_order** | **string**| The order in which results are listed in the response (&#x60;ASC&#x60; for oldest first, &#x60;DESC&#x60; for newest first).  Default value: &#x60;DESC&#x60; | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListTransactionsResponse**](../Model/ListTransactionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransaction**
> \SquareConnect\Model\RetrieveTransactionResponse retrieveTransaction($location_id, $transaction_id)

RetrieveTransaction

Retrieves details for a single transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the transaction's associated location.
$transaction_id = "transaction_id_example"; // string | The ID of the transaction to retrieve.

try {
    $result = $api_instance->retrieveTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->retrieveTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the transaction&#39;s associated location. |
 **transaction_id** | **string**| The ID of the transaction to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveTransactionResponse**](../Model/RetrieveTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTransaction**
> \SquareConnect\Model\VoidTransactionResponse voidTransaction($location_id, $transaction_id)

VoidTransaction

Cancels a transaction that was created with the [Charge](#endpoint-charge) endpoint with a `delay_capture` value of `true`.  See [Delayed capture transactions](/payments/transactions/overview#delayed-capture) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 

try {
    $result = $api_instance->voidTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **transaction_id** | **string**|  |

### Return type

[**\SquareConnect\Model\VoidTransactionResponse**](../Model/VoidTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

