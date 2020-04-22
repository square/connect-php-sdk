# SquareConnect\CustomerGroupsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerGroup**](CustomerGroupsApi.md#createCustomerGroup) | **POST** /v2/customers/groups | CreateCustomerGroup
[**deleteCustomerGroup**](CustomerGroupsApi.md#deleteCustomerGroup) | **DELETE** /v2/customers/groups/{group_id} | DeleteCustomerGroup
[**listCustomerGroups**](CustomerGroupsApi.md#listCustomerGroups) | **GET** /v2/customers/groups | ListCustomerGroups
[**retrieveCustomerGroup**](CustomerGroupsApi.md#retrieveCustomerGroup) | **GET** /v2/customers/groups/{group_id} | RetrieveCustomerGroup
[**updateCustomerGroup**](CustomerGroupsApi.md#updateCustomerGroup) | **PUT** /v2/customers/groups/{group_id} | UpdateCustomerGroup


# **createCustomerGroup**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateCustomerGroupResponse createCustomerGroup($body)

CreateCustomerGroup

Creates a new customer group for a business.   The request must include the `name` value of the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerGroupsApi();
$body = new \SquareConnect\Model\CreateCustomerGroupRequest(); // \SquareConnect\Model\CreateCustomerGroupRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createCustomerGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->createCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateCustomerGroupRequest**](../Model/CreateCustomerGroupRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerGroupResponse**](../Model/CreateCustomerGroupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerGroup**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\DeleteCustomerGroupResponse deleteCustomerGroup($group_id)

DeleteCustomerGroup

Deletes a customer group as identified by the `group_id` value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerGroupsApi();
$group_id = "group_id_example"; // string | The ID of the customer group to delete.

try {
    $result = $apiInstance->deleteCustomerGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->deleteCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The ID of the customer group to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerGroupResponse**](../Model/DeleteCustomerGroupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomerGroups**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListCustomerGroupsResponse listCustomerGroups($cursor)

ListCustomerGroups

Retrieves the list of customer groups of a business.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerGroupsApi();
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information.

try {
    $result = $apiInstance->listCustomerGroups($cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->listCustomerGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See the [Pagination guide](https://developer.squareup.com/docs/working-with-apis/pagination) for more information. | [optional]

### Return type

[**\SquareConnect\Model\ListCustomerGroupsResponse**](../Model/ListCustomerGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCustomerGroup**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveCustomerGroupResponse retrieveCustomerGroup($group_id)

RetrieveCustomerGroup

Retrieves a specific customer group as identified by the `group_id` value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerGroupsApi();
$group_id = "group_id_example"; // string | The ID of the customer group to retrieve.

try {
    $result = $apiInstance->retrieveCustomerGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->retrieveCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The ID of the customer group to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveCustomerGroupResponse**](../Model/RetrieveCustomerGroupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerGroup**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\UpdateCustomerGroupResponse updateCustomerGroup($group_id, $body)

UpdateCustomerGroup

Updates a customer group as identified by the `group_id` value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\CustomerGroupsApi();
$group_id = "group_id_example"; // string | The ID of the customer group to update.
$body = new \SquareConnect\Model\UpdateCustomerGroupRequest(); // \SquareConnect\Model\UpdateCustomerGroupRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateCustomerGroup($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->updateCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| The ID of the customer group to update. |
 **body** | [**\SquareConnect\Model\UpdateCustomerGroupRequest**](../Model/UpdateCustomerGroupRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\UpdateCustomerGroupResponse**](../Model/UpdateCustomerGroupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

