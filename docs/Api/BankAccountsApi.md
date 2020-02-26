# SquareConnect\BankAccountsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBankAccount**](BankAccountsApi.md#getBankAccount) | **GET** /v2/bank-accounts/{bank_account_id} | GetBankAccount
[**getBankAccountByV1Id**](BankAccountsApi.md#getBankAccountByV1Id) | **GET** /v2/bank-accounts/by-v1-id/{v1_bank_account_id} | GetBankAccountByV1Id
[**listBankAccounts**](BankAccountsApi.md#listBankAccounts) | **GET** /v2/bank-accounts | ListBankAccounts


# **getBankAccount**
> \SquareConnect\Model\GetBankAccountResponse getBankAccount($bank_account_id)

GetBankAccount

Returns details of a [BankAccount](#type-bankaccount)  linked to a Square account. For more information, see  [Bank Accounts API](/docs/bank-accounts-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\BankAccountsApi();
$bank_account_id = "bank_account_id_example"; // string | Square-issued ID of the desired `BankAccount`.

try {
    $result = $apiInstance->getBankAccount($bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->getBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | **string**| Square-issued ID of the desired &#x60;BankAccount&#x60;. |

### Return type

[**\SquareConnect\Model\GetBankAccountResponse**](../Model/GetBankAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccountByV1Id**
> \SquareConnect\Model\GetBankAccountByV1IdResponse getBankAccountByV1Id($v1_bank_account_id)

GetBankAccountByV1Id

Returns details of a [BankAccount](#type-bankaccount) identified by V1 bank account ID.  For more information, see  [Retrieve a bank account by using an ID issued by V1 Bank Accounts API](/docs/bank-accounts-api#retrieve-a-bank-account-by-using-an-id-issued-by-the-v1-bank-accounts-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\BankAccountsApi();
$v1_bank_account_id = "v1_bank_account_id_example"; // string | Connect V1 ID of the desired `BankAccount`. For more information, see  [Retrieve a bank account by using an ID issued by V1 Bank Accounts API](https://developer.squareup.com/docs/docs/bank-accounts-api#retrieve-a-bank-account-by-using-an-id-issued-by-v1-bank-accounts-api).

try {
    $result = $apiInstance->getBankAccountByV1Id($v1_bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->getBankAccountByV1Id: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1_bank_account_id** | **string**| Connect V1 ID of the desired &#x60;BankAccount&#x60;. For more information, see  [Retrieve a bank account by using an ID issued by V1 Bank Accounts API](https://developer.squareup.com/docs/docs/bank-accounts-api#retrieve-a-bank-account-by-using-an-id-issued-by-v1-bank-accounts-api). |

### Return type

[**\SquareConnect\Model\GetBankAccountByV1IdResponse**](../Model/GetBankAccountByV1IdResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBankAccounts**
> \SquareConnect\Model\ListBankAccountsResponse listBankAccounts($cursor, $limit, $location_id)

ListBankAccounts

Returns a list of [BankAccount](#type-bankaccount) objects linked to a Square account.  For more information, see  [Bank Accounts API](/docs/bank-accounts-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\BankAccountsApi();
$cursor = "cursor_example"; // string | The pagination cursor returned by a previous call to this endpoint. Use it in the next `ListBankAccounts` request to retrieve the next set  of results.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information.
$limit = 56; // int | Upper limit on the number of bank accounts to return in the response.  Currently, 1000 is the largest supported limit. You can specify a limit  of up to 1000 bank accounts. This is also the default limit.
$location_id = "location_id_example"; // string | Location ID. You can specify this optional filter  to retrieve only the linked bank accounts belonging to a specific location.

try {
    $result = $apiInstance->listBankAccounts($cursor, $limit, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->listBankAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| The pagination cursor returned by a previous call to this endpoint. Use it in the next &#x60;ListBankAccounts&#x60; request to retrieve the next set  of results.  See the [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination) guide for more information. | [optional]
 **limit** | **int**| Upper limit on the number of bank accounts to return in the response.  Currently, 1000 is the largest supported limit. You can specify a limit  of up to 1000 bank accounts. This is also the default limit. | [optional]
 **location_id** | **string**| Location ID. You can specify this optional filter  to retrieve only the linked bank accounts belonging to a specific location. | [optional]

### Return type

[**\SquareConnect\Model\ListBankAccountsResponse**](../Model/ListBankAccountsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

