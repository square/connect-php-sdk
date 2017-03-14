# SquareConnect\EmployeesApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1CreateEmployee**](EmployeesApi.md#v1CreateEmployee) | **POST** /v1/me/employees | Creates an employee for a business.
[**v1CreateEmployeeRole**](EmployeesApi.md#v1CreateEmployeeRole) | **POST** /v1/me/roles | Creates an employee role you can then assign to employees.
[**v1CreateTimecard**](EmployeesApi.md#v1CreateTimecard) | **POST** /v1/me/timecards | Creates a timecard for an employee. Each timecard corresponds to a single shift.
[**v1DeleteTimecard**](EmployeesApi.md#v1DeleteTimecard) | **DELETE** /v1/me/timecards/{timecard_id} | Deletes a timecard. Deleted timecards are still accessible from Connect API endpoints, but the value of their deleted field is set to true. See Handling deleted timecards for more information.
[**v1ListCashDrawerShifts**](EmployeesApi.md#v1ListCashDrawerShifts) | **GET** /v1/{location_id}/cash-drawer-shifts | Provides the details for all of a location&#39;s cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.
[**v1ListEmployeeRoles**](EmployeesApi.md#v1ListEmployeeRoles) | **GET** /v1/me/roles | Provides summary information for all of a business&#39;s employee roles.
[**v1ListEmployees**](EmployeesApi.md#v1ListEmployees) | **GET** /v1/me/employees | Provides summary information for all of a business&#39;s employees.
[**v1ListTimecardEvents**](EmployeesApi.md#v1ListTimecardEvents) | **GET** /v1/me/timecards/{timecard_id}/events | Provides summary information for all events associated with a particular timecard.
[**v1ListTimecards**](EmployeesApi.md#v1ListTimecards) | **GET** /v1/me/timecards | Provides summary information for all of a business&#39;s employee timecards.
[**v1RetrieveCashDrawerShift**](EmployeesApi.md#v1RetrieveCashDrawerShift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | Provides the details for a single cash drawer shift, including all events that occurred during the shift.
[**v1RetrieveEmployee**](EmployeesApi.md#v1RetrieveEmployee) | **GET** /v1/me/employees/{employee_id} | Provides the details for a single employee.
[**v1RetrieveEmployeeRole**](EmployeesApi.md#v1RetrieveEmployeeRole) | **GET** /v1/me/roles/{role_id} | Provides the details for a single employee role.
[**v1RetrieveTimecard**](EmployeesApi.md#v1RetrieveTimecard) | **GET** /v1/me/timecards/{timecard_id} | Provides the details for a single timecard.
[**v1UpdateEmployee**](EmployeesApi.md#v1UpdateEmployee) | **PUT** /v1/me/employees/{employee_id} | v1UpdateEmployee
[**v1UpdateEmployeeRole**](EmployeesApi.md#v1UpdateEmployeeRole) | **PUT** /v1/me/roles/{role_id} | Modifies the details of an employee role.
[**v1UpdateTimecard**](EmployeesApi.md#v1UpdateTimecard) | **PUT** /v1/me/timecards/{timecard_id} | Modifies a timecard&#39;s details. This creates an API_EDIT event for the timecard. You can view a timecard&#39;s event history with the List Timecard Events endpoint.


# **v1CreateEmployee**
> \SquareConnect\Model\V1Employee v1CreateEmployee($body)

Creates an employee for a business.

Creates an employee for a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$body = new \SquareConnect\Model\V1Employee(); // \SquareConnect\Model\V1Employee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateEmployee($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1CreateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\V1Employee**](../Model/\SquareConnect\Model\V1Employee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole v1CreateEmployeeRole($employee_role)

Creates an employee role you can then assign to employees.

Creates an employee role you can then assign to employees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$employee_role = new \SquareConnect\Model\V1EmployeeRole(); // \SquareConnect\Model\V1EmployeeRole | An EmployeeRole object with a name and permissions, and an optional owner flag.

try {
    $result = $api_instance->v1CreateEmployeeRole($employee_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1CreateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_role** | [**\SquareConnect\Model\V1EmployeeRole**](../Model/\SquareConnect\Model\V1EmployeeRole.md)| An EmployeeRole object with a name and permissions, and an optional owner flag. |

### Return type

[**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateTimecard**
> \SquareConnect\Model\V1Timecard v1CreateTimecard($body)

Creates a timecard for an employee. Each timecard corresponds to a single shift.

Creates a timecard for an employee. Each timecard corresponds to a single shift.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$body = new \SquareConnect\Model\V1Timecard(); // \SquareConnect\Model\V1Timecard | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateTimecard($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1CreateTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\V1Timecard**](../Model/\SquareConnect\Model\V1Timecard.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DeleteTimecard**
> object v1DeleteTimecard($timecard_id)

Deletes a timecard. Deleted timecards are still accessible from Connect API endpoints, but the value of their deleted field is set to true. See Handling deleted timecards for more information.

Deletes a timecard. Deleted timecards are still accessible from Connect API endpoints, but the value of their deleted field is set to true. See Handling deleted timecards for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The ID of the timecard to delete.

try {
    $result = $api_instance->v1DeleteTimecard($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1DeleteTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timecard_id** | **string**| The ID of the timecard to delete. |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListCashDrawerShifts**
> \SquareConnect\Model\V1CashDrawerShift[] v1ListCashDrawerShifts($location_id, $order, $begin_time, $end_time)

Provides the details for all of a location's cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.

Provides the details for all of a location's cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$location_id = "location_id_example"; // string | The ID of the location to list cash drawer shifts for.
$order = "order_example"; // string | The order in which cash drawer shifts are listed in the response, based on their created_at field. Default value: ASC
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time minus 90 days.
$end_time = "end_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time.

try {
    $result = $api_instance->v1ListCashDrawerShifts($location_id, $order, $begin_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1ListCashDrawerShifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list cash drawer shifts for. |
 **order** | **string**| The order in which cash drawer shifts are listed in the response, based on their created_at field. Default value: ASC | [optional]
 **begin_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time minus 90 days. | [optional]
 **end_time** | **string**| The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time. | [optional]

### Return type

[**\SquareConnect\Model\V1CashDrawerShift[]**](../Model/V1CashDrawerShift.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListEmployeeRoles**
> \SquareConnect\Model\V1EmployeeRole[] v1ListEmployeeRoles($order, $limit, $cursor)

Provides summary information for all of a business's employee roles.

Provides summary information for all of a business's employee roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$order = "order_example"; // string | The order in which employees are listed in the response, based on their created_at field.Default value: ASC
$limit = 56; // int | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200.
$cursor = "cursor_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->v1ListEmployeeRoles($order, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1ListEmployeeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| The order in which employees are listed in the response, based on their created_at field.Default value: ASC | [optional]
 **limit** | **int**| The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional]
 **cursor** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1EmployeeRole[]**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListEmployees**
> \SquareConnect\Model\V1Employee[] v1ListEmployees($order, $begin_updated_at, $end_updated_at, $begin_created_at, $end_created_at, $status, $external_id, $limit)

Provides summary information for all of a business's employees.

Provides summary information for all of a business's employees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$order = "order_example"; // string | The order in which employees are listed in the response, based on their created_at field.      Default value: ASC
$begin_updated_at = "begin_updated_at_example"; // string | If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format
$end_updated_at = "end_updated_at_example"; // string | If filtering results by there updated_at field, the end of the requested reporting period, in ISO 8601 format.
$begin_created_at = "begin_created_at_example"; // string | If filtering results by their created_at field, the beginning of the requested reporting period, in ISO 8601 format.
$end_created_at = "end_created_at_example"; // string | If filtering results by their created_at field, the end of the requested reporting period, in ISO 8601 format.
$status = "status_example"; // string | If provided, the endpoint returns only employee entities with the specified status (ACTIVE or INACTIVE).
$external_id = "external_id_example"; // string | If provided, the endpoint returns only employee entities with the specified external_id.
$limit = 56; // int | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200.

try {
    $result = $api_instance->v1ListEmployees($order, $begin_updated_at, $end_updated_at, $begin_created_at, $end_created_at, $status, $external_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1ListEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| The order in which employees are listed in the response, based on their created_at field.      Default value: ASC | [optional]
 **begin_updated_at** | **string**| If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format | [optional]
 **end_updated_at** | **string**| If filtering results by there updated_at field, the end of the requested reporting period, in ISO 8601 format. | [optional]
 **begin_created_at** | **string**| If filtering results by their created_at field, the beginning of the requested reporting period, in ISO 8601 format. | [optional]
 **end_created_at** | **string**| If filtering results by their created_at field, the end of the requested reporting period, in ISO 8601 format. | [optional]
 **status** | **string**| If provided, the endpoint returns only employee entities with the specified status (ACTIVE or INACTIVE). | [optional]
 **external_id** | **string**| If provided, the endpoint returns only employee entities with the specified external_id. | [optional]
 **limit** | **int**| The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional]

### Return type

[**\SquareConnect\Model\V1Employee[]**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListTimecardEvents**
> \SquareConnect\Model\V1TimecardEvent[] v1ListTimecardEvents($timecard_id)

Provides summary information for all events associated with a particular timecard.

Provides summary information for all events associated with a particular timecard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The ID of the timecard to list events for.

try {
    $result = $api_instance->v1ListTimecardEvents($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1ListTimecardEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timecard_id** | **string**| The ID of the timecard to list events for. |

### Return type

[**\SquareConnect\Model\V1TimecardEvent[]**](../Model/V1TimecardEvent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListTimecards**
> \SquareConnect\Model\V1Timecard[] v1ListTimecards($order, $employee_id, $begin_clockin_time, $end_clockin_time, $begin_clockout_time, $end_clockout_time, $begin_updated_at, $end_updated_at, $deleted, $limit, $cursor)

Provides summary information for all of a business's employee timecards.

Provides summary information for all of a business's employee timecards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$order = "order_example"; // string | The order in which timecards are listed in the response, based on their created_at field.
$employee_id = "employee_id_example"; // string | If provided, the endpoint returns only timecards for the employee with the specified ID.
$begin_clockin_time = "begin_clockin_time_example"; // string | If filtering results by their clockin_time field, the beginning of the requested reporting period, in ISO 8601 format.
$end_clockin_time = "end_clockin_time_example"; // string | If filtering results by their clockin_time field, the end of the requested reporting period, in ISO 8601 format.
$begin_clockout_time = "begin_clockout_time_example"; // string | If filtering results by their clockout_time field, the beginning of the requested reporting period, in ISO 8601 format.
$end_clockout_time = "end_clockout_time_example"; // string | If filtering results by their clockout_time field, the end of the requested reporting period, in ISO 8601 format.
$begin_updated_at = "begin_updated_at_example"; // string | If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format.
$end_updated_at = "end_updated_at_example"; // string | If filtering results by their updated_at field, the end of the requested reporting period, in ISO 8601 format.
$deleted = true; // bool | If true, only deleted timecards are returned. If false, only valid timecards are returned.If you don't provide this parameter, both valid and deleted timecards are returned.
$limit = 56; // int | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200.
$cursor = "cursor_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->v1ListTimecards($order, $employee_id, $begin_clockin_time, $end_clockin_time, $begin_clockout_time, $end_clockout_time, $begin_updated_at, $end_updated_at, $deleted, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1ListTimecards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| The order in which timecards are listed in the response, based on their created_at field. | [optional]
 **employee_id** | **string**| If provided, the endpoint returns only timecards for the employee with the specified ID. | [optional]
 **begin_clockin_time** | **string**| If filtering results by their clockin_time field, the beginning of the requested reporting period, in ISO 8601 format. | [optional]
 **end_clockin_time** | **string**| If filtering results by their clockin_time field, the end of the requested reporting period, in ISO 8601 format. | [optional]
 **begin_clockout_time** | **string**| If filtering results by their clockout_time field, the beginning of the requested reporting period, in ISO 8601 format. | [optional]
 **end_clockout_time** | **string**| If filtering results by their clockout_time field, the end of the requested reporting period, in ISO 8601 format. | [optional]
 **begin_updated_at** | **string**| If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format. | [optional]
 **end_updated_at** | **string**| If filtering results by their updated_at field, the end of the requested reporting period, in ISO 8601 format. | [optional]
 **deleted** | **bool**| If true, only deleted timecards are returned. If false, only valid timecards are returned.If you don&#39;t provide this parameter, both valid and deleted timecards are returned. | [optional]
 **limit** | **int**| The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional]
 **cursor** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Timecard[]**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveCashDrawerShift**
> \SquareConnect\Model\V1CashDrawerShift v1RetrieveCashDrawerShift($location_id, $shift_id)

Provides the details for a single cash drawer shift, including all events that occurred during the shift.

Provides the details for a single cash drawer shift, including all events that occurred during the shift.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$location_id = "location_id_example"; // string | The ID of the location to list cash drawer shifts for.
$shift_id = "shift_id_example"; // string | The shift's ID.

try {
    $result = $api_instance->v1RetrieveCashDrawerShift($location_id, $shift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1RetrieveCashDrawerShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list cash drawer shifts for. |
 **shift_id** | **string**| The shift&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1CashDrawerShift**](../Model/V1CashDrawerShift.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveEmployee**
> \SquareConnect\Model\V1Employee v1RetrieveEmployee($employee_id)

Provides the details for a single employee.

Provides the details for a single employee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$employee_id = "employee_id_example"; // string | The employee's ID.

try {
    $result = $api_instance->v1RetrieveEmployee($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1RetrieveEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| The employee&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole v1RetrieveEmployeeRole($role_id)

Provides the details for a single employee role.

Provides the details for a single employee role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$role_id = "role_id_example"; // string | The role's ID.

try {
    $result = $api_instance->v1RetrieveEmployeeRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1RetrieveEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveTimecard**
> \SquareConnect\Model\V1Timecard v1RetrieveTimecard($timecard_id)

Provides the details for a single timecard.

Provides the details for a single timecard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The timecard's ID.

try {
    $result = $api_instance->v1RetrieveTimecard($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1RetrieveTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timecard_id** | **string**| The timecard&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateEmployee**
> \SquareConnect\Model\V1Employee v1UpdateEmployee($employee_id, $body)

v1UpdateEmployee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$employee_id = "employee_id_example"; // string | The ID of the role to modify.
$body = new \SquareConnect\Model\V1Employee(); // \SquareConnect\Model\V1Employee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateEmployee($employee_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1UpdateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| The ID of the role to modify. |
 **body** | [**\SquareConnect\Model\V1Employee**](../Model/\SquareConnect\Model\V1Employee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole v1UpdateEmployeeRole($role_id, $body)

Modifies the details of an employee role.

Modifies the details of an employee role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$role_id = "role_id_example"; // string | The ID of the role to modify.
$body = new \SquareConnect\Model\V1EmployeeRole(); // \SquareConnect\Model\V1EmployeeRole | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateEmployeeRole($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1UpdateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The ID of the role to modify. |
 **body** | [**\SquareConnect\Model\V1EmployeeRole**](../Model/\SquareConnect\Model\V1EmployeeRole.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateTimecard**
> \SquareConnect\Model\V1Timecard v1UpdateTimecard($timecard_id, $body)

Modifies a timecard's details. This creates an API_EDIT event for the timecard. You can view a timecard's event history with the List Timecard Events endpoint.

Modifies a timecard's details. This creates an API_EDIT event for the timecard. You can view a timecard's event history with the List Timecard Events endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\EmployeesApi();
$timecard_id = "timecard_id_example"; // string | TThe ID of the timecard to modify.
$body = new \SquareConnect\Model\V1Timecard(); // \SquareConnect\Model\V1Timecard | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateTimecard($timecard_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->v1UpdateTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timecard_id** | **string**| TThe ID of the timecard to modify. |
 **body** | [**\SquareConnect\Model\V1Timecard**](../Model/\SquareConnect\Model\V1Timecard.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

