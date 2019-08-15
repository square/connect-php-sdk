# SquareConnect\V1EmployeesApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmployee**](V1EmployeesApi.md#createEmployee) | **POST** /v1/me/employees | CreateEmployee
[**createEmployeeRole**](V1EmployeesApi.md#createEmployeeRole) | **POST** /v1/me/roles | CreateEmployeeRole
[**createTimecard**](V1EmployeesApi.md#createTimecard) | **POST** /v1/me/timecards | CreateTimecard
[**deleteTimecard**](V1EmployeesApi.md#deleteTimecard) | **DELETE** /v1/me/timecards/{timecard_id} | DeleteTimecard
[**listCashDrawerShifts**](V1EmployeesApi.md#listCashDrawerShifts) | **GET** /v1/{location_id}/cash-drawer-shifts | ListCashDrawerShifts
[**listEmployeeRoles**](V1EmployeesApi.md#listEmployeeRoles) | **GET** /v1/me/roles | ListEmployeeRoles
[**listEmployees**](V1EmployeesApi.md#listEmployees) | **GET** /v1/me/employees | ListEmployees
[**listTimecardEvents**](V1EmployeesApi.md#listTimecardEvents) | **GET** /v1/me/timecards/{timecard_id}/events | ListTimecardEvents
[**listTimecards**](V1EmployeesApi.md#listTimecards) | **GET** /v1/me/timecards | ListTimecards
[**retrieveCashDrawerShift**](V1EmployeesApi.md#retrieveCashDrawerShift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | RetrieveCashDrawerShift
[**retrieveEmployee**](V1EmployeesApi.md#retrieveEmployee) | **GET** /v1/me/employees/{employee_id} | RetrieveEmployee
[**retrieveEmployeeRole**](V1EmployeesApi.md#retrieveEmployeeRole) | **GET** /v1/me/roles/{role_id} | RetrieveEmployeeRole
[**retrieveTimecard**](V1EmployeesApi.md#retrieveTimecard) | **GET** /v1/me/timecards/{timecard_id} | RetrieveTimecard
[**updateEmployee**](V1EmployeesApi.md#updateEmployee) | **PUT** /v1/me/employees/{employee_id} | UpdateEmployee
[**updateEmployeeRole**](V1EmployeesApi.md#updateEmployeeRole) | **PUT** /v1/me/roles/{role_id} | UpdateEmployeeRole
[**updateTimecard**](V1EmployeesApi.md#updateTimecard) | **PUT** /v1/me/timecards/{timecard_id} | UpdateTimecard


# **createEmployee**
> \SquareConnect\Model\V1Employee createEmployee($body)

CreateEmployee

Use the CreateEmployee endpoint to add an employee to a Square account. Employees created with the Connect API have an initial status of `INACTIVE`. Inactive employees cannot sign in to Square Point of Sale until they are activated from the Square Dashboard. Employee status cannot be changed with the Connect API.  <aside class=\"important\"> Employee entities cannot be deleted. To disable employee profiles, set the employee's status to <code>INACTIVE</code> </aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$body = new \SquareConnect\Model\V1Employee(); // \SquareConnect\Model\V1Employee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createEmployee($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole createEmployeeRole($employee_role)

CreateEmployeeRole

Creates an employee role you can then assign to employees.  Square accounts can include any number of roles that can be assigned to employees. These roles define the actions and permissions granted to an employee with that role. For example, an employee with a \"Shift Manager\" role might be able to issue refunds in Square Point of Sale, whereas an employee with a \"Clerk\" role might not.  Roles are assigned with the [V1UpdateEmployee](#endpoint-v1updateemployee) endpoint. An employee can have only one role at a time.  If an employee has no role, they have none of the permissions associated with roles. All employees can accept payments with Square Point of Sale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$employee_role = new \SquareConnect\Model\V1EmployeeRole(); // \SquareConnect\Model\V1EmployeeRole | An EmployeeRole object with a name and permissions, and an optional owner flag.

try {
    $result = $apiInstance->createEmployeeRole($employee_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->createEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_role** | [**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)| An EmployeeRole object with a name and permissions, and an optional owner flag. |

### Return type

[**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTimecard**
> \SquareConnect\Model\V1Timecard createTimecard($body)

CreateTimecard

Creates a timecard for an employee and clocks them in with an `API_CREATE` event and a `clockin_time` set to the current time unless the request provides a different value. To import timecards from another system (rather than clocking someone in). Specify the `clockin_time` and* `clockout_time` in the request.  Timecards correspond to exactly one shift for a given employee, bounded by the `clockin_time` and `clockout_time` fields. An employee is considered clocked in if they have a timecard that doesn't have a `clockout_time` set. An employee that is currently clocked in cannot be clocked in a second time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$body = new \SquareConnect\Model\V1Timecard(); // \SquareConnect\Model\V1Timecard | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createTimecard($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->createTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTimecard**
> object deleteTimecard($timecard_id)

DeleteTimecard

Deletes a timecard. Timecards can also be deleted through the Square Dashboard. Deleted timecards are still accessible through Connect API endpoints, but cannot be modified. The `deleted` field of the `Timecard` object indicates whether the timecard has been deleted.  *Note**: By default, deleted timecards appear alongside valid timecards in results returned by the [ListTimecards](#endpoint-v1employees-listtimecards) endpoint. To filter deleted timecards, include the `deleted` query parameter in the list request.  <aside> Only approved accounts can manage their employees with Square. Unapproved accounts cannot use employee management features with the API. </aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The ID of the timecard to delete.

try {
    $result = $apiInstance->deleteTimecard($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->deleteTimecard: ', $e->getMessage(), PHP_EOL;
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

# **listCashDrawerShifts**
> \SquareConnect\Model\V1CashDrawerShift[] listCashDrawerShifts($location_id, $order, $begin_time, $end_time)

ListCashDrawerShifts

Provides the details for all of a location's cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$location_id = "location_id_example"; // string | The ID of the location to list cash drawer shifts for.
$order = "order_example"; // string | The order in which cash drawer shifts are listed in the response, based on their created_at field. Default value: ASC
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time minus 90 days.
$end_time = "end_time_example"; // string | The beginning of the requested reporting period, in ISO 8601 format. Default value: The current time.

try {
    $result = $apiInstance->listCashDrawerShifts($location_id, $order, $begin_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listCashDrawerShifts: ', $e->getMessage(), PHP_EOL;
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

# **listEmployeeRoles**
> \SquareConnect\Model\V1EmployeeRole[] listEmployeeRoles($order, $limit, $batch_token)

ListEmployeeRoles

Provides summary information for all of a business's employee roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$order = "order_example"; // string | The order in which employees are listed in the response, based on their created_at field.Default value: ASC
$limit = 56; // int | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listEmployeeRoles($order, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listEmployeeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **string**| The order in which employees are listed in the response, based on their created_at field.Default value: ASC | [optional]
 **limit** | **int**| The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1EmployeeRole[]**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEmployees**
> \SquareConnect\Model\V1Employee[] listEmployees($order, $begin_updated_at, $end_updated_at, $begin_created_at, $end_created_at, $status, $external_id, $limit, $batch_token)

ListEmployees

Provides summary information for all of a business's employees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$order = "order_example"; // string | The order in which employees are listed in the response, based on their created_at field.      Default value: ASC
$begin_updated_at = "begin_updated_at_example"; // string | If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format
$end_updated_at = "end_updated_at_example"; // string | If filtering results by there updated_at field, the end of the requested reporting period, in ISO 8601 format.
$begin_created_at = "begin_created_at_example"; // string | If filtering results by their created_at field, the beginning of the requested reporting period, in ISO 8601 format.
$end_created_at = "end_created_at_example"; // string | If filtering results by their created_at field, the end of the requested reporting period, in ISO 8601 format.
$status = "status_example"; // string | If provided, the endpoint returns only employee entities with the specified status (ACTIVE or INACTIVE).
$external_id = "external_id_example"; // string | If provided, the endpoint returns only employee entities with the specified external_id.
$limit = 56; // int | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listEmployees($order, $begin_updated_at, $end_updated_at, $begin_created_at, $end_created_at, $status, $external_id, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listEmployees: ', $e->getMessage(), PHP_EOL;
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
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Employee[]**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTimecardEvents**
> \SquareConnect\Model\V1TimecardEvent[] listTimecardEvents($timecard_id)

ListTimecardEvents

Provides summary information for all events associated with a particular timecard.  <aside> Only approved accounts can manage their employees with Square. Unapproved accounts cannot use employee management features with the API. </aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The ID of the timecard to list events for.

try {
    $result = $apiInstance->listTimecardEvents($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listTimecardEvents: ', $e->getMessage(), PHP_EOL;
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

# **listTimecards**
> \SquareConnect\Model\V1Timecard[] listTimecards($order, $employee_id, $begin_clockin_time, $end_clockin_time, $begin_clockout_time, $end_clockout_time, $begin_updated_at, $end_updated_at, $deleted, $limit, $batch_token)

ListTimecards

Provides summary information for all of a business's employee timecards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
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
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listTimecards($order, $employee_id, $begin_clockin_time, $end_clockin_time, $begin_clockout_time, $end_clockout_time, $begin_updated_at, $end_updated_at, $deleted, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listTimecards: ', $e->getMessage(), PHP_EOL;
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
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Timecard[]**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCashDrawerShift**
> \SquareConnect\Model\V1CashDrawerShift retrieveCashDrawerShift($location_id, $shift_id)

RetrieveCashDrawerShift

Provides the details for a single cash drawer shift, including all events that occurred during the shift.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$location_id = "location_id_example"; // string | The ID of the location to list cash drawer shifts for.
$shift_id = "shift_id_example"; // string | The shift's ID.

try {
    $result = $apiInstance->retrieveCashDrawerShift($location_id, $shift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->retrieveCashDrawerShift: ', $e->getMessage(), PHP_EOL;
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

# **retrieveEmployee**
> \SquareConnect\Model\V1Employee retrieveEmployee($employee_id)

RetrieveEmployee

Provides the details for a single employee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$employee_id = "employee_id_example"; // string | The employee's ID.

try {
    $result = $apiInstance->retrieveEmployee($employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->retrieveEmployee: ', $e->getMessage(), PHP_EOL;
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

# **retrieveEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole retrieveEmployeeRole($role_id)

RetrieveEmployeeRole

Provides the details for a single employee role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$role_id = "role_id_example"; // string | The role's ID.

try {
    $result = $apiInstance->retrieveEmployeeRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->retrieveEmployeeRole: ', $e->getMessage(), PHP_EOL;
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

# **retrieveTimecard**
> \SquareConnect\Model\V1Timecard retrieveTimecard($timecard_id)

RetrieveTimecard

Provides the details for a single timecard. <aside> Only approved accounts can manage their employees with Square. Unapproved accounts cannot use employee management features with the API. </aside>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$timecard_id = "timecard_id_example"; // string | The timecard's ID.

try {
    $result = $apiInstance->retrieveTimecard($timecard_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->retrieveTimecard: ', $e->getMessage(), PHP_EOL;
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

# **updateEmployee**
> \SquareConnect\Model\V1Employee updateEmployee($employee_id, $body)

UpdateEmployee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$employee_id = "employee_id_example"; // string | The ID of the role to modify.
$body = new \SquareConnect\Model\V1Employee(); // \SquareConnect\Model\V1Employee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateEmployee($employee_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| The ID of the role to modify. |
 **body** | [**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Employee**](../Model/V1Employee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployeeRole**
> \SquareConnect\Model\V1EmployeeRole updateEmployeeRole($role_id, $body)

UpdateEmployeeRole

Modifies the details of an employee role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$role_id = "role_id_example"; // string | The ID of the role to modify.
$body = new \SquareConnect\Model\V1EmployeeRole(); // \SquareConnect\Model\V1EmployeeRole | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateEmployeeRole($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->updateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The ID of the role to modify. |
 **body** | [**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1EmployeeRole**](../Model/V1EmployeeRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTimecard**
> \SquareConnect\Model\V1Timecard updateTimecard($timecard_id, $body)

UpdateTimecard

Modifies the details of a timecard with an `API_EDIT` event for the timecard. Updating an active timecard with a `clockout_time` clocks the employee out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1EmployeesApi();
$timecard_id = "timecard_id_example"; // string | TThe ID of the timecard to modify.
$body = new \SquareConnect\Model\V1Timecard(); // \SquareConnect\Model\V1Timecard | An object containing the fields to POST for the request. See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateTimecard($timecard_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->updateTimecard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timecard_id** | **string**| TThe ID of the timecard to modify. |
 **body** | [**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)| An object containing the fields to POST for the request. See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Timecard**](../Model/V1Timecard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

