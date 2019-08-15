# SquareConnect\LaborApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBreakType**](LaborApi.md#createBreakType) | **POST** /v2/labor/break-types | CreateBreakType
[**createShift**](LaborApi.md#createShift) | **POST** /v2/labor/shifts | CreateShift
[**deleteBreakType**](LaborApi.md#deleteBreakType) | **DELETE** /v2/labor/break-types/{id} | DeleteBreakType
[**deleteShift**](LaborApi.md#deleteShift) | **DELETE** /v2/labor/shifts/{id} | DeleteShift
[**getBreakType**](LaborApi.md#getBreakType) | **GET** /v2/labor/break-types/{id} | GetBreakType
[**getEmployeeWage**](LaborApi.md#getEmployeeWage) | **GET** /v2/labor/employee-wages/{id} | GetEmployeeWage
[**getShift**](LaborApi.md#getShift) | **GET** /v2/labor/shifts/{id} | GetShift
[**listBreakTypes**](LaborApi.md#listBreakTypes) | **GET** /v2/labor/break-types | ListBreakTypes
[**listEmployeeWages**](LaborApi.md#listEmployeeWages) | **GET** /v2/labor/employee-wages | ListEmployeeWages
[**listWorkweekConfigs**](LaborApi.md#listWorkweekConfigs) | **GET** /v2/labor/workweek-configs | ListWorkweekConfigs
[**searchShifts**](LaborApi.md#searchShifts) | **POST** /v2/labor/shifts/search | SearchShifts
[**updateBreakType**](LaborApi.md#updateBreakType) | **PUT** /v2/labor/break-types/{id} | UpdateBreakType
[**updateShift**](LaborApi.md#updateShift) | **PUT** /v2/labor/shifts/{id} | UpdateShift
[**updateWorkweekConfig**](LaborApi.md#updateWorkweekConfig) | **PUT** /v2/labor/workweek-configs/{id} | UpdateWorkweekConfig


# **createBreakType**
> \SquareConnect\Model\CreateBreakTypeResponse createBreakType($body)

CreateBreakType

Creates a new `BreakType`.   A `BreakType` is a template for creating `Break` objects.  You must provide the following values in your request to this endpoint:  - `location_id` - `break_name` - `expected_duration` - `is_paid`  You can only have 3 `BreakType` instances per location. If you attempt to add a 4th `BreakType` for a location, an `INVALID_REQUEST_ERROR` \"Exceeded limit of 3 breaks per location.\" is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$body = new \SquareConnect\Model\CreateBreakTypeRequest(); // \SquareConnect\Model\CreateBreakTypeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createBreakType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->createBreakType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateBreakTypeRequest**](../Model/CreateBreakTypeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateBreakTypeResponse**](../Model/CreateBreakTypeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShift**
> \SquareConnect\Model\CreateShiftResponse createShift($body)

CreateShift

Creates a new `Shift`.   A `Shift` represents a complete work day for a single employee.  You must provide the following values in your request to this endpoint:  - `location_id` - `employee_id` - `start_at`  An attempt to create a new `Shift` can result in a `BAD_REQUEST` error when: - The `status` of the new `Shift` is `OPEN` and the employee has another  shift with an `OPEN` status.  - The `start_at` date is in the future - the `start_at` or `end_at` overlaps another shift for the same employee - If `Break`s are set in the request, a break `start_at` must not be before the `Shift.start_at`. A break `end_at` must not be after the `Shift.end_at`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$body = new \SquareConnect\Model\CreateShiftRequest(); // \SquareConnect\Model\CreateShiftRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createShift($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->createShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateShiftRequest**](../Model/CreateShiftRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateShiftResponse**](../Model/CreateShiftResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBreakType**
> \SquareConnect\Model\DeleteBreakTypeResponse deleteBreakType($id)

DeleteBreakType

Deletes an existing `BreakType`.   A `BreakType` can be deleted even if it is referenced from a `Shift`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `BreakType` being deleted.

try {
    $result = $apiInstance->deleteBreakType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->deleteBreakType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;BreakType&#x60; being deleted. |

### Return type

[**\SquareConnect\Model\DeleteBreakTypeResponse**](../Model/DeleteBreakTypeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShift**
> \SquareConnect\Model\DeleteShiftResponse deleteShift($id)

DeleteShift

Deletes a `Shift`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `Shift` being deleted.

try {
    $result = $apiInstance->deleteShift($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->deleteShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;Shift&#x60; being deleted. |

### Return type

[**\SquareConnect\Model\DeleteShiftResponse**](../Model/DeleteShiftResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBreakType**
> \SquareConnect\Model\GetBreakTypeResponse getBreakType($id)

GetBreakType

Returns a single `BreakType` specified by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `BreakType` being retrieved.

try {
    $result = $apiInstance->getBreakType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->getBreakType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;BreakType&#x60; being retrieved. |

### Return type

[**\SquareConnect\Model\GetBreakTypeResponse**](../Model/GetBreakTypeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmployeeWage**
> \SquareConnect\Model\GetEmployeeWageResponse getEmployeeWage($id)

GetEmployeeWage

Returns a single `EmployeeWage` specified by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `EmployeeWage` being retrieved.

try {
    $result = $apiInstance->getEmployeeWage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->getEmployeeWage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;EmployeeWage&#x60; being retrieved. |

### Return type

[**\SquareConnect\Model\GetEmployeeWageResponse**](../Model/GetEmployeeWageResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShift**
> \SquareConnect\Model\GetShiftResponse getShift($id)

GetShift

Returns a single `Shift` specified by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `Shift` being retrieved.

try {
    $result = $apiInstance->getShift($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->getShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;Shift&#x60; being retrieved. |

### Return type

[**\SquareConnect\Model\GetShiftResponse**](../Model/GetShiftResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBreakTypes**
> \SquareConnect\Model\ListBreakTypesResponse listBreakTypes($location_id, $limit, $cursor)

ListBreakTypes

Returns a paginated list of `BreakType` instances for a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$location_id = "location_id_example"; // string | Filter Break Types returned to only those that are associated with the specified location.
$limit = 56; // int | Maximum number of Break Types to return per page. Can range between 1 and 200. The default is the maximum at 200.
$cursor = "cursor_example"; // string | Pointer to the next page of Break Type results to fetch.

try {
    $result = $apiInstance->listBreakTypes($location_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->listBreakTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Filter Break Types returned to only those that are associated with the specified location. | [optional]
 **limit** | **int**| Maximum number of Break Types to return per page. Can range between 1 and 200. The default is the maximum at 200. | [optional]
 **cursor** | **string**| Pointer to the next page of Break Type results to fetch. | [optional]

### Return type

[**\SquareConnect\Model\ListBreakTypesResponse**](../Model/ListBreakTypesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEmployeeWages**
> \SquareConnect\Model\ListEmployeeWagesResponse listEmployeeWages($employee_id, $limit, $cursor)

ListEmployeeWages

Returns a paginated list of `EmployeeWage` instances for a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$employee_id = "employee_id_example"; // string | Filter wages returned to only those that are associated with the specified employee.
$limit = 56; // int | Maximum number of Employee Wages to return per page. Can range between 1 and 200. The default is the maximum at 200.
$cursor = "cursor_example"; // string | Pointer to the next page of Employee Wage results to fetch.

try {
    $result = $apiInstance->listEmployeeWages($employee_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->listEmployeeWages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| Filter wages returned to only those that are associated with the specified employee. | [optional]
 **limit** | **int**| Maximum number of Employee Wages to return per page. Can range between 1 and 200. The default is the maximum at 200. | [optional]
 **cursor** | **string**| Pointer to the next page of Employee Wage results to fetch. | [optional]

### Return type

[**\SquareConnect\Model\ListEmployeeWagesResponse**](../Model/ListEmployeeWagesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWorkweekConfigs**
> \SquareConnect\Model\ListWorkweekConfigsResponse listWorkweekConfigs($limit, $cursor)

ListWorkweekConfigs

Returns a list of `WorkweekConfig` instances for a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$limit = 56; // int | Maximum number of Workweek Configs to return per page.
$cursor = "cursor_example"; // string | Pointer to the next page of Workweek Config results to fetch.

try {
    $result = $apiInstance->listWorkweekConfigs($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->listWorkweekConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of Workweek Configs to return per page. | [optional]
 **cursor** | **string**| Pointer to the next page of Workweek Config results to fetch. | [optional]

### Return type

[**\SquareConnect\Model\ListWorkweekConfigsResponse**](../Model/ListWorkweekConfigsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchShifts**
> \SquareConnect\Model\SearchShiftsResponse searchShifts($body)

SearchShifts

Returns a paginated list of `Shift` records for a business.  The list to be returned can be filtered by: - Location IDs **and** - employee IDs **and** - shift status (`OPEN`, `CLOSED`) **and** - shift start **and** - shift end **and** - work day details  The list can be sorted by: - `start_at` - `end_at` - `created_at` - `updated_at`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$body = new \SquareConnect\Model\SearchShiftsRequest(); // \SquareConnect\Model\SearchShiftsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchShifts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->searchShifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchShiftsRequest**](../Model/SearchShiftsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchShiftsResponse**](../Model/SearchShiftsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBreakType**
> \SquareConnect\Model\UpdateBreakTypeResponse updateBreakType($id, $body)

UpdateBreakType

Updates an existing `BreakType`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `BreakType` being updated.
$body = new \SquareConnect\Model\UpdateBreakTypeRequest(); // \SquareConnect\Model\UpdateBreakTypeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateBreakType($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->updateBreakType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;BreakType&#x60; being updated. |
 **body** | [**\SquareConnect\Model\UpdateBreakTypeRequest**](../Model/UpdateBreakTypeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateBreakTypeResponse**](../Model/UpdateBreakTypeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShift**
> \SquareConnect\Model\UpdateShiftResponse updateShift($id, $body)

UpdateShift

Updates an existing `Shift`.   When adding a `Break` to a `Shift`, any earlier `Breaks` in the `Shift` have  the `end_at` property set to a valid RFC-3339 datetime string.   When closing a `Shift`, all `Break` instances in the shift must be complete with `end_at` set on each `Break`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | ID of the object being updated.
$body = new \SquareConnect\Model\UpdateShiftRequest(); // \SquareConnect\Model\UpdateShiftRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateShift($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->updateShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the object being updated. |
 **body** | [**\SquareConnect\Model\UpdateShiftRequest**](../Model/UpdateShiftRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateShiftResponse**](../Model/UpdateShiftResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkweekConfig**
> \SquareConnect\Model\UpdateWorkweekConfigResponse updateWorkweekConfig($id, $body)

UpdateWorkweekConfig

Updates a `WorkweekConfig`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LaborApi();
$id = "id_example"; // string | UUID for the `WorkweekConfig` object being updated.
$body = new \SquareConnect\Model\UpdateWorkweekConfigRequest(); // \SquareConnect\Model\UpdateWorkweekConfigRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateWorkweekConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaborApi->updateWorkweekConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID for the &#x60;WorkweekConfig&#x60; object being updated. |
 **body** | [**\SquareConnect\Model\UpdateWorkweekConfigRequest**](../Model/UpdateWorkweekConfigRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateWorkweekConfigResponse**](../Model/UpdateWorkweekConfigResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

