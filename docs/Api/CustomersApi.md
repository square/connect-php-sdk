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
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer


# **createCustomer**
> \SquareConnect\Model\CreateCustomerResponse createCustomer($authorization, $body)

CreateCustomer

Creates a new customer for a business, which can have associated cards on file.  You must provide __at least one__ of the following values in your request to this endpoint:  - `given_name` - `family_name` - `company_name` - `email_address` - `phone_number`  This endpoint does not accept an idempotency key. If you accidentally create a duplicate customer, you can delete it with the [DeleteCustomer](#endpoint-deletecustomer) endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$body = new \SquareConnect\Model\CreateCustomerRequest(); // \SquareConnect\Model\CreateCustomerRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCustomer($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **body** | [**\SquareConnect\Model\CreateCustomerRequest**](../Model/\SquareConnect\Model\CreateCustomerRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerResponse**](../Model/CreateCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomerCard**
> \SquareConnect\Model\CreateCustomerCardResponse createCustomerCard($authorization, $customer_id, $body)

CreateCustomerCard

Adds a card on file to an existing customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer to link the card on file to.
$body = new \SquareConnect\Model\CreateCustomerCardRequest(); // \SquareConnect\Model\CreateCustomerCardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCustomerCard($authorization, $customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer to link the card on file to. |
 **body** | [**\SquareConnect\Model\CreateCustomerCardRequest**](../Model/\SquareConnect\Model\CreateCustomerCardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerCardResponse**](../Model/CreateCustomerCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \SquareConnect\Model\DeleteCustomerResponse deleteCustomer($authorization, $customer_id)

DeleteCustomer

Deletes a customer from a business, along with any linked cards on file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer to delete.

try {
    $result = $api_instance->deleteCustomer($authorization, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerResponse**](../Model/DeleteCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerCard**
> \SquareConnect\Model\DeleteCustomerCardResponse deleteCustomerCard($authorization, $customer_id, $card_id)

DeleteCustomerCard

Removes a card on file from a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer that the card on file belongs to.
$card_id = "card_id_example"; // string | The ID of the card on file to delete.

try {
    $result = $api_instance->deleteCustomerCard($authorization, $customer_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer that the card on file belongs to. |
 **card_id** | **string**| The ID of the card on file to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerCardResponse**](../Model/DeleteCustomerCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomers**
> \SquareConnect\Model\ListCustomersResponse listCustomers($authorization, $cursor)

ListCustomers

Lists a business's customers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->listCustomers($authorization, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListCustomersResponse**](../Model/ListCustomersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCustomer**
> \SquareConnect\Model\RetrieveCustomerResponse retrieveCustomer($authorization, $customer_id)

RetrieveCustomer

Returns details for a single customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer to retrieve.

try {
    $result = $api_instance->retrieveCustomer($authorization, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->retrieveCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveCustomerResponse**](../Model/RetrieveCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \SquareConnect\Model\UpdateCustomerResponse updateCustomer($authorization, $customer_id, $body)

UpdateCustomer

Updates the details of an existing customer.  You cannot edit a customer's cards on file with this endpoint. To make changes to a card on file, you must delete the existing card on file with the [DeleteCustomerCard](#endpoint-deletecustomercard) endpoint, then create a new one with the [CreateCustomerCard](#endpoint-createcustomercard) endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer to update.
$body = new \SquareConnect\Model\UpdateCustomerRequest(); // \SquareConnect\Model\UpdateCustomerRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateCustomer($authorization, $customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer to update. |
 **body** | [**\SquareConnect\Model\UpdateCustomerRequest**](../Model/\SquareConnect\Model\UpdateCustomerRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateCustomerResponse**](../Model/UpdateCustomerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

