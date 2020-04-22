# SquareConnect\CustomerSegmentsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCustomerSegments**](CustomerSegmentsApi.md#listCustomerSegments) | **GET** /v2/customers/segments | ListCustomerSegments
[**retrieveCustomerSegment**](CustomerSegmentsApi.md#retrieveCustomerSegment) | **GET** /v2/customers/segments/{segment_id} | RetrieveCustomerSegment


# **listCustomerSegments**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListCustomerSegmentsResponse listCustomerSegments($cursor)

ListCustomerSegments

Retrieves the list of customer segments of a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerSegmentsApi();
$cursor = "cursor_example"; // string | A pagination cursor returned by previous calls to __ListCustomerSegments__. Used to retrieve the next set of query results.  See the [Pagination guide](https://developer.squareup.com/docs/docs/working-with-apis/pagination) for more information.

try {
    $result = $apiInstance->listCustomerSegments($cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSegmentsApi->listCustomerSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A pagination cursor returned by previous calls to __ListCustomerSegments__. Used to retrieve the next set of query results.  See the [Pagination guide](https://developer.squareup.com/docs/docs/working-with-apis/pagination) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListCustomerSegmentsResponse**](../Model/ListCustomerSegmentsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCustomerSegment**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveCustomerSegmentResponse retrieveCustomerSegment($segment_id)

RetrieveCustomerSegment

Retrieves a specific customer segment as identified by the `segment_id` value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerSegmentsApi();
$segment_id = "segment_id_example"; // string | The Square-issued ID of the customer segment.

try {
    $result = $apiInstance->retrieveCustomerSegment($segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSegmentsApi->retrieveCustomerSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **string**| The Square-issued ID of the customer segment. |

### Return type

[**\SquareConnect\Model\RetrieveCustomerSegmentResponse**](../Model/RetrieveCustomerSegmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

