# SquareConnect\CashDrawersApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCashDrawerShiftEvents**](CashDrawersApi.md#listCashDrawerShiftEvents) | **GET** /v2/cash-drawers/shifts/{shift_id}/events | ListCashDrawerShiftEvents
[**listCashDrawerShifts**](CashDrawersApi.md#listCashDrawerShifts) | **GET** /v2/cash-drawers/shifts | ListCashDrawerShifts
[**retrieveCashDrawerShift**](CashDrawersApi.md#retrieveCashDrawerShift) | **GET** /v2/cash-drawers/shifts/{shift_id} | RetrieveCashDrawerShift


# **listCashDrawerShiftEvents**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListCashDrawerShiftEventsResponse listCashDrawerShiftEvents($location_id, $shift_id, $limit, $cursor)

ListCashDrawerShiftEvents

Provides a paginated list of events for a single cash drawer shift.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CashDrawersApi();
$location_id = "location_id_example"; // string | The ID of the location to list cash drawer shifts for.
$shift_id = "shift_id_example"; // string | The shift ID.
$limit = 56; // int | Number of resources to be returned in a page of results (200 by default, 1000 max).
$cursor = "cursor_example"; // string | Opaque cursor for fetching the next page of results.

try {
    $result = $apiInstance->listCashDrawerShiftEvents($location_id, $shift_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashDrawersApi->listCashDrawerShiftEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list cash drawer shifts for. |
 **shift_id** | **string**| The shift ID. |
 **limit** | **int**| Number of resources to be returned in a page of results (200 by default, 1000 max). | [optional]
 **cursor** | **string**| Opaque cursor for fetching the next page of results. | [optional]

### Return type

[**\SquareConnect\Model\ListCashDrawerShiftEventsResponse**](../Model/ListCashDrawerShiftEventsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCashDrawerShifts**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListCashDrawerShiftsResponse listCashDrawerShifts($location_id, $sort_order, $begin_time, $end_time, $limit, $cursor)

ListCashDrawerShifts

Provides the details for all of the cash drawer shifts for a location in a date range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CashDrawersApi();
$location_id = "location_id_example"; // string | The ID of the location to query for a list of cash drawer shifts.
$sort_order = "sort_order_example"; // string | The order in which cash drawer shifts are listed in the response, based on their opened_at field. Default value: ASC
$begin_time = "begin_time_example"; // string | The inclusive start time of the query on opened_at, in ISO 8601 format.
$end_time = "end_time_example"; // string | The exclusive end date of the query on opened_at, in ISO 8601 format.
$limit = 56; // int | Number of cash drawer shift events in a page of results (200 by default, 1000 max).
$cursor = "cursor_example"; // string | Opaque cursor for fetching the next page of results.

try {
    $result = $apiInstance->listCashDrawerShifts($location_id, $sort_order, $begin_time, $end_time, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashDrawersApi->listCashDrawerShifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to query for a list of cash drawer shifts. |
 **sort_order** | **string**| The order in which cash drawer shifts are listed in the response, based on their opened_at field. Default value: ASC | [optional]
 **begin_time** | **string**| The inclusive start time of the query on opened_at, in ISO 8601 format. | [optional]
 **end_time** | **string**| The exclusive end date of the query on opened_at, in ISO 8601 format. | [optional]
 **limit** | **int**| Number of cash drawer shift events in a page of results (200 by default, 1000 max). | [optional]
 **cursor** | **string**| Opaque cursor for fetching the next page of results. | [optional]

### Return type

[**\SquareConnect\Model\ListCashDrawerShiftsResponse**](../Model/ListCashDrawerShiftsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCashDrawerShift**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveCashDrawerShiftResponse retrieveCashDrawerShift($location_id, $shift_id)

RetrieveCashDrawerShift

Provides the summary details for a single cash drawer shift. See RetrieveCashDrawerShiftEvents for a list of cash drawer shift events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CashDrawersApi();
$location_id = "location_id_example"; // string | The ID of the location to retrieve cash drawer shifts from.
$shift_id = "shift_id_example"; // string | The shift ID.

try {
    $result = $apiInstance->retrieveCashDrawerShift($location_id, $shift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashDrawersApi->retrieveCashDrawerShift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to retrieve cash drawer shifts from. |
 **shift_id** | **string**| The shift ID. |

### Return type

[**\SquareConnect\Model\RetrieveCashDrawerShiftResponse**](../Model/RetrieveCashDrawerShiftResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

