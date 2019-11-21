# SquareConnect\CustomersApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomer**](CustomersApi.md#createCustomer) | **POST** /v2/customers | CreateCustomer
[**createCustomerCard**](CustomersApi.md#createCustomerCard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /v2/customers/{customer_id} | DeleteCustomer
[**deleteCustomerCard**](CustomersApi.md#deleteCustomerCard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard
[**listCustomers**](CustomersApi.md#listCustomers) | **GET** /v2/customers | ListCustomers
[**retrieveCustomer**](CustomersApi.md#retrieveCustomer) | **GET** /v2/customers/{customer_id} | RetrieveCustomer
[**searchCustomers**](CustomersApi.md#searchCustomers) | **POST** /v2/customers/search | SearchCustomers
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer


# **createCustomer**
> \SquareConnect\Model\CreateCustomerResponse createCustomer($body)

CreateCustomer

Creates a new customer for a business, which can have associated cards on file.  You must provide __at least one__ of the following values in your request to this endpoint:  - `given_name` - `family_name` - `company_name` - `email_address` - `phone_number`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$body = new \SquareConnect\Model\CreateCustomerRequest(); // \SquareConnect\Model\CreateCustomerRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateCustomerRequest**](../Model/CreateCustomerRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerResponse**](../Model/CreateCustomerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerCard**
> \SquareConnect\Model\CreateCustomerCardResponse createCustomerCard($customer_id, $body)

CreateCustomerCard

Adds a card on file to an existing customer.  As with charges, calls to `CreateCustomerCard` are idempotent. Multiple calls with the same card nonce return the same card record that was created with the provided nonce during the _first_ call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | The Square ID of the customer profile the card is linked to.
$body = new \SquareConnect\Model\CreateCustomerCardRequest(); // \SquareConnect\Model\CreateCustomerCardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createCustomerCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The Square ID of the customer profile the card is linked to. |
 **body** | [**\SquareConnect\Model\CreateCustomerCardRequest**](../Model/CreateCustomerCardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerCardResponse**](../Model/CreateCustomerCardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \SquareConnect\Model\DeleteCustomerResponse deleteCustomer($customer_id)

DeleteCustomer

Deletes a customer from a business, along with any linked cards on file. When two profiles are merged into a single profile, that profile is assigned a new `customer_id`. You must use the new `customer_id` to delete merged profiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | The ID of the customer to delete.

try {
    $result = $apiInstance->deleteCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of the customer to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerResponse**](../Model/DeleteCustomerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerCard**
> \SquareConnect\Model\DeleteCustomerCardResponse deleteCustomerCard($customer_id, $card_id)

DeleteCustomerCard

Removes a card on file from a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | The ID of the customer that the card on file belongs to.
$card_id = "card_id_example"; // string | The ID of the card on file to delete.

try {
    $result = $apiInstance->deleteCustomerCard($customer_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of the customer that the card on file belongs to. |
 **card_id** | **string**| The ID of the card on file to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerCardResponse**](../Model/DeleteCustomerCardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomers**
> \SquareConnect\Model\ListCustomersResponse listCustomers($cursor, $sort_field, $sort_order)

ListCustomers

Lists a business's customers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information.
$sort_field = "sort_field_example"; // string | Indicates how Customers should be sorted.  Default: `DEFAULT`.
$sort_order = "sort_order_example"; // string | Indicates whether Customers should be sorted in ascending (`ASC`) or descending (`DESC`) order.  Default: `ASC`.

try {
    $result = $apiInstance->listCustomers($cursor, $sort_field, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information. | [optional]
 **sort_field** | **string**| Indicates how Customers should be sorted.  Default: &#x60;DEFAULT&#x60;. | [optional]
 **sort_order** | **string**| Indicates whether Customers should be sorted in ascending (&#x60;ASC&#x60;) or descending (&#x60;DESC&#x60;) order.  Default: &#x60;ASC&#x60;. | [optional]

### Return type

[**\SquareConnect\Model\ListCustomersResponse**](../Model/ListCustomersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCustomer**
> \SquareConnect\Model\RetrieveCustomerResponse retrieveCustomer($customer_id)

RetrieveCustomer

Returns details for a single customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | The ID of the customer to retrieve.

try {
    $result = $apiInstance->retrieveCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->retrieveCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of the customer to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveCustomerResponse**](../Model/RetrieveCustomerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCustomers**
> \SquareConnect\Model\SearchCustomersResponse searchCustomers($body)

SearchCustomers

Searches the customer profiles associated with a Square account. Calling SearchCustomers without an explicit query parameter returns all customer profiles ordered alphabetically based on `given_name` and `family_name`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$body = new \SquareConnect\Model\SearchCustomersRequest(); // \SquareConnect\Model\SearchCustomersRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchCustomers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchCustomersRequest**](../Model/SearchCustomersRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchCustomersResponse**](../Model/SearchCustomersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \SquareConnect\Model\UpdateCustomerResponse updateCustomer($customer_id, $body)

UpdateCustomer

Updates the details of an existing customer. When two profiles are merged into a single profile, that profile is assigned a new `customer_id`. You must use the new `customer_id` to update merged profiles.  You cannot edit a customer's cards on file with this endpoint. To make changes to a card on file, you must delete the existing card on file with the [DeleteCustomerCard](#endpoint-deletecustomercard) endpoint, then create a new one with the [CreateCustomerCard](#endpoint-createcustomercard) endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | The ID of the customer to update.
$body = new \SquareConnect\Model\UpdateCustomerRequest(); // \SquareConnect\Model\UpdateCustomerRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateCustomer($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of the customer to update. |
 **body** | [**\SquareConnect\Model\UpdateCustomerRequest**](../Model/UpdateCustomerRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateCustomerResponse**](../Model/UpdateCustomerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

