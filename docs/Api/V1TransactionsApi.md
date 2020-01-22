# SquareConnect\V1TransactionsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](V1TransactionsApi.md#createRefund) | **POST** /v1/{location_id}/refunds | CreateRefund
[**listBankAccounts**](V1TransactionsApi.md#listBankAccounts) | **GET** /v1/{location_id}/bank-accounts | ListBankAccounts
[**listOrders**](V1TransactionsApi.md#listOrders) | **GET** /v1/{location_id}/orders | ListOrders
[**listPayments**](V1TransactionsApi.md#listPayments) | **GET** /v1/{location_id}/payments | ListPayments
[**listRefunds**](V1TransactionsApi.md#listRefunds) | **GET** /v1/{location_id}/refunds | ListRefunds
[**listSettlements**](V1TransactionsApi.md#listSettlements) | **GET** /v1/{location_id}/settlements | ListSettlements
[**retrieveBankAccount**](V1TransactionsApi.md#retrieveBankAccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | RetrieveBankAccount
[**retrieveOrder**](V1TransactionsApi.md#retrieveOrder) | **GET** /v1/{location_id}/orders/{order_id} | RetrieveOrder
[**retrievePayment**](V1TransactionsApi.md#retrievePayment) | **GET** /v1/{location_id}/payments/{payment_id} | RetrievePayment
[**retrieveSettlement**](V1TransactionsApi.md#retrieveSettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | RetrieveSettlement
[**updateOrder**](V1TransactionsApi.md#updateOrder) | **PUT** /v1/{location_id}/orders/{order_id} | UpdateOrder


# **createRefund**
> \SquareConnect\Model\V1Refund createRefund($location_id, $body)

CreateRefund

Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.  You cannot issue a partial refund for a split tender payment. You must instead issue a full or partial refund for a particular tender, by providing the applicable tender id to the V1CreateRefund endpoint. Issuing a full refund for a split tender payment refunds all tenders associated with the payment.  Issuing a refund for a card payment is not reversible. For development purposes, you can create fake cash payments in Square Point of Sale and refund them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the original payment's associated location.
$body = new \SquareConnect\Model\V1CreateRefundRequest(); // \SquareConnect\Model\V1CreateRefundRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createRefund($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the original payment&#39;s associated location. |
 **body** | [**\SquareConnect\Model\V1CreateRefundRequest**](../Model/V1CreateRefundRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Refund**](../Model/V1Refund.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBankAccounts**
> \SquareConnect\Model\V1BankAccount[] listBankAccounts($location_id)

ListBankAccounts

Provides non-confidential details for all of a location's associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list bank accounts for.

try {
    $result = $apiInstance->listBankAccounts($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->listBankAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list bank accounts for. |

### Return type

[**\SquareConnect\Model\V1BankAccount[]**](../Model/V1BankAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \SquareConnect\Model\V1Order[] listOrders($location_id, $order, $limit, $batch_token)

ListOrders

Provides summary information for a merchant's online store orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list online store orders for.
$order = "order_example"; // string | TThe order in which payments are listed in the response.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listOrders($location_id, $order, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list online store orders for. |
 **order** | **string**| TThe order in which payments are listed in the response. | [optional]
 **limit** | **int**| The maximum number of payments to return in a single response. This value cannot exceed 200. | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Order[]**](../Model/V1Order.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayments**
> \SquareConnect\Model\V1Payment[] listPayments($location_id, $order, $begin_time, $end_time, $limit, $batch_token, $include_partial)

ListPayments

Provides summary information for all payments taken for a given Square account during a date range. Date ranges cannot exceed 1 year in length. See Date ranges for details of inclusive and exclusive dates.  *Note**: Details for payments processed with Square Point of Sale while in offline mode may not be transmitted to Square for up to 72 hours. Offline payments have a `created_at` value that reflects the time the payment was originally processed, not the time it was subsequently transmitted to Square. Consequently, the ListPayments endpoint might list an offline payment chronologically between online payments that were seen in a previous request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list payments for. If you specify me, this endpoint returns payments aggregated from all of the business's locations.
$order = "order_example"; // string | The order in which payments are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.
$include_partial = true; // bool | Indicates whether or not to include partial payments in the response. Partial payments will have the tenders collected so far, but the itemizations will be empty until the payment is completed.

try {
    $result = $apiInstance->listPayments($location_id, $order, $begin_time, $end_time, $limit, $batch_token, $include_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list payments for. If you specify me, this endpoint returns payments aggregated from all of the business&#39;s locations. |
 **order** | **string**| The order in which payments are listed in the response. | [optional]
 **begin_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time. | [optional]
 **limit** | **int**| The maximum number of payments to return in a single response. This value cannot exceed 200. | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]
 **include_partial** | **bool**| Indicates whether or not to include partial payments in the response. Partial payments will have the tenders collected so far, but the itemizations will be empty until the payment is completed. | [optional]

### Return type

[**\SquareConnect\Model\V1Payment[]**](../Model/V1Payment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefunds**
> \SquareConnect\Model\V1Refund[] listRefunds($location_id, $order, $begin_time, $end_time, $limit, $batch_token)

ListRefunds

Provides the details for all refunds initiated by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list refunds for.
$order = "order_example"; // string | TThe order in which payments are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The approximate number of refunds to return in a single response. Default: 100. Max: 200. Response may contain more results than the prescribed limit when refunds are made simultaneously to multiple tenders in a payment or when refunds are generated in an exchange to account for the value of returned goods.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listRefunds($location_id, $order, $begin_time, $end_time, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->listRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list refunds for. |
 **order** | **string**| TThe order in which payments are listed in the response. | [optional]
 **begin_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time. | [optional]
 **limit** | **int**| The approximate number of refunds to return in a single response. Default: 100. Max: 200. Response may contain more results than the prescribed limit when refunds are made simultaneously to multiple tenders in a payment or when refunds are generated in an exchange to account for the value of returned goods. | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Refund[]**](../Model/V1Refund.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSettlements**
> \SquareConnect\Model\V1Settlement[] listSettlements($location_id, $order, $begin_time, $end_time, $limit, $status, $batch_token)

ListSettlements

Provides summary information for all deposits and withdrawals initiated by Square to a linked bank account during a date range. Date ranges cannot exceed one year in length.  *Note**: the ListSettlements endpoint does not provide entry information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list settlements for. If you specify me, this endpoint returns settlements aggregated from all of the business's locations.
$order = "order_example"; // string | The order in which settlements are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The maximum number of settlements to return in a single response. This value cannot exceed 200.
$status = "status_example"; // string | Provide this parameter to retrieve only settlements with a particular status (SENT or FAILED).
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listSettlements($location_id, $order, $begin_time, $end_time, $limit, $status, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->listSettlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list settlements for. If you specify me, this endpoint returns settlements aggregated from all of the business&#39;s locations. |
 **order** | **string**| The order in which settlements are listed in the response. | [optional]
 **begin_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time. | [optional]
 **limit** | **int**| The maximum number of settlements to return in a single response. This value cannot exceed 200. | [optional]
 **status** | **string**| Provide this parameter to retrieve only settlements with a particular status (SENT or FAILED). | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Settlement[]**](../Model/V1Settlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveBankAccount**
> \SquareConnect\Model\V1BankAccount retrieveBankAccount($location_id, $bank_account_id)

RetrieveBankAccount

Provides non-confidential details for a merchant's associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the bank account's associated location.
$bank_account_id = "bank_account_id_example"; // string | The bank account's Square-issued ID. You obtain this value from Settlement objects returned.

try {
    $result = $apiInstance->retrieveBankAccount($location_id, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->retrieveBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the bank account&#39;s associated location. |
 **bank_account_id** | **string**| The bank account&#39;s Square-issued ID. You obtain this value from Settlement objects returned. |

### Return type

[**\SquareConnect\Model\V1BankAccount**](../Model/V1BankAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOrder**
> \SquareConnect\Model\V1Order retrieveOrder($location_id, $order_id)

RetrieveOrder

Provides comprehensive information for a single online store order, including the order's history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the order's associated location.
$order_id = "order_id_example"; // string | The order's Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint

try {
    $result = $apiInstance->retrieveOrder($location_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->retrieveOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the order&#39;s associated location. |
 **order_id** | **string**| The order&#39;s Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint |

### Return type

[**\SquareConnect\Model\V1Order**](../Model/V1Order.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePayment**
> \SquareConnect\Model\V1Payment retrievePayment($location_id, $payment_id)

RetrievePayment

Provides comprehensive information for a single payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the payment's associated location.
$payment_id = "payment_id_example"; // string | The Square-issued payment ID. payment_id comes from Payment objects returned by the List Payments endpoint, Settlement objects returned by the List Settlements endpoint, or Refund objects returned by the List Refunds endpoint.

try {
    $result = $apiInstance->retrievePayment($location_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->retrievePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the payment&#39;s associated location. |
 **payment_id** | **string**| The Square-issued payment ID. payment_id comes from Payment objects returned by the List Payments endpoint, Settlement objects returned by the List Settlements endpoint, or Refund objects returned by the List Refunds endpoint. |

### Return type

[**\SquareConnect\Model\V1Payment**](../Model/V1Payment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSettlement**
> \SquareConnect\Model\V1Settlement retrieveSettlement($location_id, $settlement_id)

RetrieveSettlement

Provides comprehensive information for a single settlement.  The returned `Settlement` objects include an `entries` field that lists the transactions that contribute to the settlement total. Most settlement entries correspond to a payment payout, but settlement entries are also generated for less common events, like refunds, manual adjustments, or chargeback holds.  Square initiates its regular deposits as indicated in the [Deposit Options with Square](https://squareup.com/help/us/en/article/3807) help article. Details for a regular deposit are usually not available from Connect API endpoints before 10 p.m. PST the same day.  Square does not know when an initiated settlement **completes**, only whether it has failed. A completed settlement is typically reflected in a bank account within 3 business days, but in exceptional cases it may take longer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the settlements's associated location.
$settlement_id = "settlement_id_example"; // string | The settlement's Square-issued ID. You obtain this value from Settlement objects returned by the List Settlements endpoint.

try {
    $result = $apiInstance->retrieveSettlement($location_id, $settlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->retrieveSettlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the settlements&#39;s associated location. |
 **settlement_id** | **string**| The settlement&#39;s Square-issued ID. You obtain this value from Settlement objects returned by the List Settlements endpoint. |

### Return type

[**\SquareConnect\Model\V1Settlement**](../Model/V1Settlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> \SquareConnect\Model\V1Order updateOrder($location_id, $order_id, $body)

UpdateOrder

Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the order's associated location.
$order_id = "order_id_example"; // string | The order's Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint
$body = new \SquareConnect\Model\V1UpdateOrderRequest(); // \SquareConnect\Model\V1UpdateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateOrder($location_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TransactionsApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the order&#39;s associated location. |
 **order_id** | **string**| The order&#39;s Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint |
 **body** | [**\SquareConnect\Model\V1UpdateOrderRequest**](../Model/V1UpdateOrderRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Order**](../Model/V1Order.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

