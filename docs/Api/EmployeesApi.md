# SquareConnect\EmployeesApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listEmployees**](EmployeesApi.md#listEmployees) | **GET** /v2/employees | ListEmployees
[**retrieveEmployee**](EmployeesApi.md#retrieveEmployee) | **GET** /v2/employees/{id} | RetrieveEmployee


# **listEmployees**
> \SquareConnect\Model\ListEmployeesResponse listEmployees($location_id, $status, $limit, $cursor)

ListEmployees



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\EmployeesApi();
$location_id = "location_id_example"; // string | Filter employees returned to only those that are associated with the specified location.
$status = "status_example"; // string | Specifies the EmployeeStatus to filter the employee by.
$limit = 56; // int | The number of employees to be returned on each page.
$cursor = "cursor_example"; // string | The token required to retrieve the specified page of results.

try {
    $result = $apiInstance->listEmployees($location_id, $status, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->listEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Filter employees returned to only those that are associated with the specified location. | [optional]
 **status** | **string**| Specifies the EmployeeStatus to filter the employee by. | [optional]
 **limit** | **int**| The number of employees to be returned on each page. | [optional]
 **cursor** | **string**| The token required to retrieve the specified page of results. | [optional]

### Return type

[**\SquareConnect\Model\ListEmployeesResponse**](../Model/ListEmployeesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEmployee**
> \SquareConnect\Model\RetrieveEmployeeResponse retrieveEmployee($id)

RetrieveEmployee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\EmployeesApi();
$id = "id_example"; // string | UUID for the employee that was requested.

try {
    $result = $apiInstance->retrieveEmployee($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->retrieveEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the employee that was requested. |

### Return type

[**\SquareConnect\Model\RetrieveEmployeeResponse**](../Model/RetrieveEmployeeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

