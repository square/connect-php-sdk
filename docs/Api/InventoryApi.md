# SquareConnect\InventoryApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchChangeInventory**](InventoryApi.md#batchChangeInventory) | **POST** /v2/inventory/batch-change | BatchChangeInventory
[**batchRetrieveInventoryChanges**](InventoryApi.md#batchRetrieveInventoryChanges) | **POST** /v2/inventory/batch-retrieve-changes | BatchRetrieveInventoryChanges
[**batchRetrieveInventoryCounts**](InventoryApi.md#batchRetrieveInventoryCounts) | **POST** /v2/inventory/batch-retrieve-counts | BatchRetrieveInventoryCounts
[**retrieveInventoryAdjustment**](InventoryApi.md#retrieveInventoryAdjustment) | **GET** /v2/inventory/adjustment/{adjustment_id} | RetrieveInventoryAdjustment
[**retrieveInventoryChanges**](InventoryApi.md#retrieveInventoryChanges) | **GET** /v2/inventory/{catalog_object_id}/changes | RetrieveInventoryChanges
[**retrieveInventoryCount**](InventoryApi.md#retrieveInventoryCount) | **GET** /v2/inventory/{catalog_object_id} | RetrieveInventoryCount
[**retrieveInventoryPhysicalCount**](InventoryApi.md#retrieveInventoryPhysicalCount) | **GET** /v2/inventory/physical-count/{physical_count_id} | RetrieveInventoryPhysicalCount


# **batchChangeInventory**
> \SquareConnect\Model\BatchChangeInventoryResponse batchChangeInventory($body)

BatchChangeInventory

Applies adjustments and counts to the provided item quantities.  On success: returns the current calculated counts for all objects referenced in the request. On failure: returns a list of related errors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$body = new \SquareConnect\Model\BatchChangeInventoryRequest(); // \SquareConnect\Model\BatchChangeInventoryRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->batchChangeInventory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->batchChangeInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\BatchChangeInventoryRequest**](../Model/BatchChangeInventoryRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\BatchChangeInventoryResponse**](../Model/BatchChangeInventoryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchRetrieveInventoryChanges**
> \SquareConnect\Model\BatchRetrieveInventoryChangesResponse batchRetrieveInventoryChanges($body)

BatchRetrieveInventoryChanges

Returns historical physical counts and adjustments based on the provided filter criteria.  Results are paginated and sorted in ascending order according their `occurred_at` timestamp (oldest first).  BatchRetrieveInventoryChanges is a catch-all query endpoint for queries that cannot be handled by other, simpler endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$body = new \SquareConnect\Model\BatchRetrieveInventoryChangesRequest(); // \SquareConnect\Model\BatchRetrieveInventoryChangesRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->batchRetrieveInventoryChanges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->batchRetrieveInventoryChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\BatchRetrieveInventoryChangesRequest**](../Model/BatchRetrieveInventoryChangesRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\BatchRetrieveInventoryChangesResponse**](../Model/BatchRetrieveInventoryChangesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchRetrieveInventoryCounts**
> \SquareConnect\Model\BatchRetrieveInventoryCountsResponse batchRetrieveInventoryCounts($body)

BatchRetrieveInventoryCounts

Returns current counts for the provided [CatalogObject](#type-catalogobject)s at the requested [Location](#type-location)s.  Results are paginated and sorted in descending order according to their `calculated_at` timestamp (newest first).  When `updated_after` is specified, only counts that have changed since that time (based on the server timestamp for the most recent change) are returned. This allows clients to perform a \"sync\" operation, for example in response to receiving a Webhook notification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$body = new \SquareConnect\Model\BatchRetrieveInventoryCountsRequest(); // \SquareConnect\Model\BatchRetrieveInventoryCountsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->batchRetrieveInventoryCounts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->batchRetrieveInventoryCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\BatchRetrieveInventoryCountsRequest**](../Model/BatchRetrieveInventoryCountsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\BatchRetrieveInventoryCountsResponse**](../Model/BatchRetrieveInventoryCountsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInventoryAdjustment**
> \SquareConnect\Model\RetrieveInventoryAdjustmentResponse retrieveInventoryAdjustment($adjustment_id)

RetrieveInventoryAdjustment

Returns the [InventoryAdjustment](#type-inventoryadjustment) object with the provided `adjustment_id`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$adjustment_id = "adjustment_id_example"; // string | ID of the [InventoryAdjustment](#type-inventoryadjustment) to retrieve.

try {
    $result = $api_instance->retrieveInventoryAdjustment($adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->retrieveInventoryAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adjustment_id** | **string**| ID of the [InventoryAdjustment](#type-inventoryadjustment) to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveInventoryAdjustmentResponse**](../Model/RetrieveInventoryAdjustmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInventoryChanges**
> \SquareConnect\Model\RetrieveInventoryChangesResponse retrieveInventoryChanges($catalog_object_id, $location_ids, $cursor)

RetrieveInventoryChanges

Returns a set of physical counts and inventory adjustments for the provided [CatalogObject](#type-catalogobject) at the requested [Location](#type-location)s.  Results are paginated and sorted in descending order according to their `occurred_at` timestamp (newest first).  There are no limits on how far back the caller can page. This endpoint is useful when displaying recent changes for a specific item. For more sophisticated queries, use a batch endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$catalog_object_id = "catalog_object_id_example"; // string | ID of the [CatalogObject](#type-catalogobject) to retrieve.
$location_ids = "location_ids_example"; // string | The [Location](#type-location) IDs to look up as a comma-separated list. An empty list queries all locations.
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->retrieveInventoryChanges($catalog_object_id, $location_ids, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->retrieveInventoryChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_object_id** | **string**| ID of the [CatalogObject](#type-catalogobject) to retrieve. |
 **location_ids** | **string**| The [Location](#type-location) IDs to look up as a comma-separated list. An empty list queries all locations. | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\RetrieveInventoryChangesResponse**](../Model/RetrieveInventoryChangesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInventoryCount**
> \SquareConnect\Model\RetrieveInventoryCountResponse retrieveInventoryCount($catalog_object_id, $location_ids, $cursor)

RetrieveInventoryCount

Retrieves the current calculated stock count for a given [CatalogObject](#type-catalogobject) at a given set of [Location](#type-location)s. Responses are paginated and unsorted. For more sophisticated queries, use a batch endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$catalog_object_id = "catalog_object_id_example"; // string | ID of the [CatalogObject](#type-catalogobject) to retrieve.
$location_ids = "location_ids_example"; // string | The [Location](#type-location) IDs to look up as a comma-separated list. An empty list queries all locations.
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Paginating results](#paginatingresults) for more information.

try {
    $result = $api_instance->retrieveInventoryCount($catalog_object_id, $location_ids, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->retrieveInventoryCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_object_id** | **string**| ID of the [CatalogObject](#type-catalogobject) to retrieve. |
 **location_ids** | **string**| The [Location](#type-location) IDs to look up as a comma-separated list. An empty list queries all locations. | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Paginating results](#paginatingresults) for more information. | [optional]

### Return type

[**\SquareConnect\Model\RetrieveInventoryCountResponse**](../Model/RetrieveInventoryCountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInventoryPhysicalCount**
> \SquareConnect\Model\RetrieveInventoryPhysicalCountResponse retrieveInventoryPhysicalCount($physical_count_id)

RetrieveInventoryPhysicalCount

Returns the [InventoryPhysicalCount](#type-inventoryphysicalcount) object with the provided `physical_count_id`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\InventoryApi();
$physical_count_id = "physical_count_id_example"; // string | ID of the [InventoryPhysicalCount](#type-inventoryphysicalcount) to retrieve.

try {
    $result = $api_instance->retrieveInventoryPhysicalCount($physical_count_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->retrieveInventoryPhysicalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **physical_count_id** | **string**| ID of the [InventoryPhysicalCount](#type-inventoryphysicalcount) to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveInventoryPhysicalCountResponse**](../Model/RetrieveInventoryPhysicalCountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

