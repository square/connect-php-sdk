# SquareConnect\TransactionsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CreateRefund**](TransactionsApi.md#v1CreateRefund) | **POST** /v1/{location_id}/refunds | Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.
[**v1ListBankAccounts**](TransactionsApi.md#v1ListBankAccounts) | **GET** /v1/{location_id}/bank-accounts | Provides non-confidential details for all of a location&#39;s associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
[**v1ListOrders**](TransactionsApi.md#v1ListOrders) | **GET** /v1/{location_id}/orders | Provides summary information for a merchant&#39;s online store orders.
[**v1ListPayments**](TransactionsApi.md#v1ListPayments) | **GET** /v1/{location_id}/payments | Provides summary information for all payments taken by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates.
[**v1ListRefunds**](TransactionsApi.md#v1ListRefunds) | **GET** /v1/{location_id}/refunds | Provides the details for all refunds initiated by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length.
[**v1ListSettlements**](TransactionsApi.md#v1ListSettlements) | **GET** /v1/{location_id}/settlements | Provides summary information for all deposits and withdrawals initiated by Square to a merchant&#39;s bank account during a date range. Date ranges cannot exceed one year in length.
[**v1RetrieveBankAccount**](TransactionsApi.md#v1RetrieveBankAccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | Provides non-confidential details for a merchant&#39;s associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
[**v1RetrieveOrder**](TransactionsApi.md#v1RetrieveOrder) | **GET** /v1/{location_id}/orders/{order_id} | Provides comprehensive information for a single online store order, including the order&#39;s history.
[**v1RetrievePayment**](TransactionsApi.md#v1RetrievePayment) | **GET** /v1/{location_id}/payments/{payment_id} | Provides comprehensive information for a single payment.
[**v1RetrieveSettlement**](TransactionsApi.md#v1RetrieveSettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | Provides comprehensive information for a single settlement, including the entries that contribute to the settlement&#39;s total.
[**v1UpdateOrder**](TransactionsApi.md#v1UpdateOrder) | **PUT** /v1/{location_id}/orders/{order_id} | Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:


# **v1CreateRefund**
> \SquareConnect\Model\V1Refund v1CreateRefund($location_id, $body)

Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.

Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the original payment's associated location.
$body = new \SquareConnect\Model\V1CreateRefundRequest(); // \SquareConnect\Model\V1CreateRefundRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateRefund($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1CreateRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the original payment&#39;s associated location. |
 **body** | [**\SquareConnect\Model\V1CreateRefundRequest**](../Model/\SquareConnect\Model\V1CreateRefundRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Refund**](../Model/V1Refund.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListBankAccounts**
> \SquareConnect\Model\V1BankAccount[] v1ListBankAccounts($location_id)

Provides non-confidential details for all of a location's associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

Provides non-confidential details for all of a location's associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list bank accounts for.

try {
    $result = $api_instance->v1ListBankAccounts($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1ListBankAccounts: ', $e->getMessage(), PHP_EOL;
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

# **v1ListOrders**
> \SquareConnect\Model\V1Order[] v1ListOrders($location_id, $order, $limit)

Provides summary information for a merchant's online store orders.

Provides summary information for a merchant's online store orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list online store orders for.
$order = "order_example"; // string | TThe order in which payments are listed in the response.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.

try {
    $result = $api_instance->v1ListOrders($location_id, $order, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1ListOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list online store orders for. |
 **order** | **string**| TThe order in which payments are listed in the response. | [optional]
 **limit** | **int**| The maximum number of payments to return in a single response. This value cannot exceed 200. | [optional]

### Return type

[**\SquareConnect\Model\V1Order[]**](../Model/V1Order.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListPayments**
> \SquareConnect\Model\V1Payment[] v1ListPayments($location_id, $order, $begin_time, $end_time, $limit)

Provides summary information for all payments taken by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates.

Provides summary information for all payments taken by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list payments for. If you specify me, this endpoint returns payments aggregated from all of the business's locations.
$order = "order_example"; // string | The order in which payments are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.

try {
    $result = $api_instance->v1ListPayments($location_id, $order, $begin_time, $end_time, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1ListPayments: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\SquareConnect\Model\V1Payment[]**](../Model/V1Payment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListRefunds**
> \SquareConnect\Model\V1Refund[] v1ListRefunds($location_id, $order, $begin_time, $end_time, $limit)

Provides the details for all refunds initiated by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length.

Provides the details for all refunds initiated by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list refunds for.
$order = "order_example"; // string | TThe order in which payments are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.

try {
    $result = $api_instance->v1ListRefunds($location_id, $order, $begin_time, $end_time, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1ListRefunds: ', $e->getMessage(), PHP_EOL;
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
 **limit** | **int**| The maximum number of payments to return in a single response. This value cannot exceed 200. | [optional]

### Return type

[**\SquareConnect\Model\V1Refund[]**](../Model/V1Refund.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListSettlements**
> \SquareConnect\Model\V1Settlement[] v1ListSettlements($location_id, $order, $begin_time, $end_time, $limit, $status)

Provides summary information for all deposits and withdrawals initiated by Square to a merchant's bank account during a date range. Date ranges cannot exceed one year in length.

Provides summary information for all deposits and withdrawals initiated by Square to a merchant's bank account during a date range. Date ranges cannot exceed one year in length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the location to list settlements for. If you specify me, this endpoint returns payments aggregated from all of the business's locations.
$order = "order_example"; // string | TThe order in which payments are listed in the response.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
$limit = 56; // int | The maximum number of payments to return in a single response. This value cannot exceed 200.
$status = "status_example"; // string | Provide this parameter to retrieve only settlements with a particular status (SENT or FAILED).

try {
    $result = $api_instance->v1ListSettlements($location_id, $order, $begin_time, $end_time, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1ListSettlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list settlements for. If you specify me, this endpoint returns payments aggregated from all of the business&#39;s locations. |
 **order** | **string**| TThe order in which payments are listed in the response. | [optional]
 **begin_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time. | [optional]
 **limit** | **int**| The maximum number of payments to return in a single response. This value cannot exceed 200. | [optional]
 **status** | **string**| Provide this parameter to retrieve only settlements with a particular status (SENT or FAILED). | [optional]

### Return type

[**\SquareConnect\Model\V1Settlement[]**](../Model/V1Settlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveBankAccount**
> \SquareConnect\Model\V1BankAccount v1RetrieveBankAccount($location_id, $bank_account_id)

Provides non-confidential details for a merchant's associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

Provides non-confidential details for a merchant's associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the bank account's associated location.
$bank_account_id = "bank_account_id_example"; // string | The bank account's Square-issued ID. You obtain this value from Settlement objects returned.

try {
    $result = $api_instance->v1RetrieveBankAccount($location_id, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1RetrieveBankAccount: ', $e->getMessage(), PHP_EOL;
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

# **v1RetrieveOrder**
> \SquareConnect\Model\V1Order v1RetrieveOrder($location_id, $order_id)

Provides comprehensive information for a single online store order, including the order's history.

Provides comprehensive information for a single online store order, including the order's history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the order's associated location.
$order_id = "order_id_example"; // string | The order's Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint

try {
    $result = $api_instance->v1RetrieveOrder($location_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1RetrieveOrder: ', $e->getMessage(), PHP_EOL;
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

# **v1RetrievePayment**
> \SquareConnect\Model\V1Payment v1RetrievePayment($location_id, $payment_id)

Provides comprehensive information for a single payment.

Provides comprehensive information for a single payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the payment's associated location.
$payment_id = "payment_id_example"; // string | The payment's Square-issued ID. You obtain this value from Payment objects returned by the List Payments endpoint, or Settlement objects returned by the List Settlements endpoint.

try {
    $result = $api_instance->v1RetrievePayment($location_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1RetrievePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the payment&#39;s associated location. |
 **payment_id** | **string**| The payment&#39;s Square-issued ID. You obtain this value from Payment objects returned by the List Payments endpoint, or Settlement objects returned by the List Settlements endpoint. |

### Return type

[**\SquareConnect\Model\V1Payment**](../Model/V1Payment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveSettlement**
> \SquareConnect\Model\V1Settlement v1RetrieveSettlement($location_id, $settlement_id)

Provides comprehensive information for a single settlement, including the entries that contribute to the settlement's total.

Provides comprehensive information for a single settlement, including the entries that contribute to the settlement's total.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the settlements's associated location.
$settlement_id = "settlement_id_example"; // string | The settlement's Square-issued ID. You obtain this value from Settlement objects returned by the List Settlements endpoint.

try {
    $result = $api_instance->v1RetrieveSettlement($location_id, $settlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1RetrieveSettlement: ', $e->getMessage(), PHP_EOL;
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

# **v1UpdateOrder**
> \SquareConnect\Model\V1Order v1UpdateOrder($location_id, $order_id, $body)

Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:

Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\TransactionsApi();
$location_id = "location_id_example"; // string | The ID of the order's associated location.
$order_id = "order_id_example"; // string | The order's Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint
$body = new \SquareConnect\Model\V1UpdateOrderRequest(); // \SquareConnect\Model\V1UpdateOrderRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateOrder($location_id, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1UpdateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the order&#39;s associated location. |
 **order_id** | **string**| The order&#39;s Square-issued ID. You obtain this value from Order objects returned by the List Orders endpoint |
 **body** | [**\SquareConnect\Model\V1UpdateOrderRequest**](../Model/\SquareConnect\Model\V1UpdateOrderRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Order**](../Model/V1Order.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

