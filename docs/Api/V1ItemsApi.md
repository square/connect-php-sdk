# SquareConnect\V1ItemsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustInventory**](V1ItemsApi.md#adjustInventory) | **POST** /v1/{location_id}/inventory/{variation_id} | AdjustInventory
[**applyFee**](V1ItemsApi.md#applyFee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | ApplyFee
[**applyModifierList**](V1ItemsApi.md#applyModifierList) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | ApplyModifierList
[**createCategory**](V1ItemsApi.md#createCategory) | **POST** /v1/{location_id}/categories | CreateCategory
[**createDiscount**](V1ItemsApi.md#createDiscount) | **POST** /v1/{location_id}/discounts | CreateDiscount
[**createFee**](V1ItemsApi.md#createFee) | **POST** /v1/{location_id}/fees | CreateFee
[**createItem**](V1ItemsApi.md#createItem) | **POST** /v1/{location_id}/items | CreateItem
[**createModifierList**](V1ItemsApi.md#createModifierList) | **POST** /v1/{location_id}/modifier-lists | CreateModifierList
[**createModifierOption**](V1ItemsApi.md#createModifierOption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | CreateModifierOption
[**createPage**](V1ItemsApi.md#createPage) | **POST** /v1/{location_id}/pages | CreatePage
[**createVariation**](V1ItemsApi.md#createVariation) | **POST** /v1/{location_id}/items/{item_id}/variations | CreateVariation
[**deleteCategory**](V1ItemsApi.md#deleteCategory) | **DELETE** /v1/{location_id}/categories/{category_id} | DeleteCategory
[**deleteDiscount**](V1ItemsApi.md#deleteDiscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | DeleteDiscount
[**deleteFee**](V1ItemsApi.md#deleteFee) | **DELETE** /v1/{location_id}/fees/{fee_id} | DeleteFee
[**deleteItem**](V1ItemsApi.md#deleteItem) | **DELETE** /v1/{location_id}/items/{item_id} | DeleteItem
[**deleteModifierList**](V1ItemsApi.md#deleteModifierList) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | DeleteModifierList
[**deleteModifierOption**](V1ItemsApi.md#deleteModifierOption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | DeleteModifierOption
[**deletePage**](V1ItemsApi.md#deletePage) | **DELETE** /v1/{location_id}/pages/{page_id} | DeletePage
[**deletePageCell**](V1ItemsApi.md#deletePageCell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | DeletePageCell
[**deleteVariation**](V1ItemsApi.md#deleteVariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | DeleteVariation
[**listCategories**](V1ItemsApi.md#listCategories) | **GET** /v1/{location_id}/categories | ListCategories
[**listDiscounts**](V1ItemsApi.md#listDiscounts) | **GET** /v1/{location_id}/discounts | ListDiscounts
[**listFees**](V1ItemsApi.md#listFees) | **GET** /v1/{location_id}/fees | ListFees
[**listInventory**](V1ItemsApi.md#listInventory) | **GET** /v1/{location_id}/inventory | ListInventory
[**listItems**](V1ItemsApi.md#listItems) | **GET** /v1/{location_id}/items | ListItems
[**listModifierLists**](V1ItemsApi.md#listModifierLists) | **GET** /v1/{location_id}/modifier-lists | ListModifierLists
[**listPages**](V1ItemsApi.md#listPages) | **GET** /v1/{location_id}/pages | ListPages
[**removeFee**](V1ItemsApi.md#removeFee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | RemoveFee
[**removeModifierList**](V1ItemsApi.md#removeModifierList) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | RemoveModifierList
[**retrieveItem**](V1ItemsApi.md#retrieveItem) | **GET** /v1/{location_id}/items/{item_id} | RetrieveItem
[**retrieveModifierList**](V1ItemsApi.md#retrieveModifierList) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | RetrieveModifierList
[**updateCategory**](V1ItemsApi.md#updateCategory) | **PUT** /v1/{location_id}/categories/{category_id} | UpdateCategory
[**updateDiscount**](V1ItemsApi.md#updateDiscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | UpdateDiscount
[**updateFee**](V1ItemsApi.md#updateFee) | **PUT** /v1/{location_id}/fees/{fee_id} | UpdateFee
[**updateItem**](V1ItemsApi.md#updateItem) | **PUT** /v1/{location_id}/items/{item_id} | UpdateItem
[**updateModifierList**](V1ItemsApi.md#updateModifierList) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | UpdateModifierList
[**updateModifierOption**](V1ItemsApi.md#updateModifierOption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | UpdateModifierOption
[**updatePage**](V1ItemsApi.md#updatePage) | **PUT** /v1/{location_id}/pages/{page_id} | UpdatePage
[**updatePageCell**](V1ItemsApi.md#updatePageCell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | UpdatePageCell
[**updateVariation**](V1ItemsApi.md#updateVariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | UpdateVariation


# **adjustInventory**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1InventoryEntry adjustInventory($location_id, $variation_id, $body)

AdjustInventory

Adjusts the current available inventory of an item variation.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$variation_id = "variation_id_example"; // string | The ID of the variation to adjust inventory information for.
$body = new \SquareConnect\Model\V1AdjustInventoryRequest(); // \SquareConnect\Model\V1AdjustInventoryRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->adjustInventory($location_id, $variation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->adjustInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **variation_id** | **string**| The ID of the variation to adjust inventory information for. |
 **body** | [**\SquareConnect\Model\V1AdjustInventoryRequest**](../Model/V1AdjustInventoryRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1InventoryEntry**](../Model/V1InventoryEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applyFee**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item applyFee($location_id, $item_id, $fee_id)

ApplyFee

Associates a fee with an item so the fee is automatically applied to the item in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $apiInstance->applyFee($location_id, $item_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->applyFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the fee&#39;s associated location. |
 **item_id** | **string**| The ID of the item to add the fee to. |
 **fee_id** | **string**| The ID of the fee to apply. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applyModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item applyModifierList($location_id, $modifier_list_id, $item_id)

ApplyModifierList

Associates a modifier list with an item so the associated modifier options can be applied to the item.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to apply.
$item_id = "item_id_example"; // string | The ID of the item to add the modifier list to.

try {
    $result = $apiInstance->applyModifierList($location_id, $modifier_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->applyModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to apply. |
 **item_id** | **string**| The ID of the item to add the modifier list to. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCategory**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Category createCategory($location_id, $body)

CreateCategory

Creates an item category.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createCategory($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Category**](../Model/V1Category.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Category**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDiscount**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Discount createDiscount($location_id, $body)

CreateDiscount

Creates a discount.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createDiscount($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFee**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Fee createFee($location_id, $body)

CreateFee

Creates a fee (tax).  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a fee for.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createFee($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create a fee for. |
 **body** | [**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createItem**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item createItem($location_id, $body)

CreateItem

Creates an item and at least one variation for it.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---   Item-related entities include fields you can use to associate them with entities in a non-Square system.  When you create an item-related entity, you can optionally specify `id`. This value must be unique among all IDs ever specified for the account, including those specified by other applications. You can never reuse an entity ID. If you do not specify an ID, Square generates one for the entity.  Item variations have a `user_data` string that lets you associate arbitrary metadata with the variation. The string cannot exceed 255 characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createItem($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Item**](../Model/V1Item.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierList createModifierList($location_id, $body)

CreateModifierList

Creates an item modifier list and at least 1 modifier option for it.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a modifier list for.
$body = new \SquareConnect\Model\V1ModifierList(); // \SquareConnect\Model\V1ModifierList | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createModifierList($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create a modifier list for. |
 **body** | [**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createModifierOption**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierOption createModifierOption($location_id, $modifier_list_id, $body)

CreateModifierOption

Creates an item modifier option and adds it to a modifier list.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createModifierOption($location_id, $modifier_list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createModifierOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPage**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page createPage($location_id, $body)

CreatePage

Creates a Favorites page in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createPage($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Page**](../Model/V1Page.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVariation**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Variation createVariation($location_id, $item_id, $body)

CreateVariation

Creates an item variation for an existing item.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createVariation($location_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->createVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The item&#39;s ID. |
 **body** | [**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategory**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Category deleteCategory($location_id, $category_id)

DeleteCategory

Deletes an existing item category.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteCategory__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteCategoryRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$category_id = "category_id_example"; // string | The ID of the category to delete.

try {
    $result = $apiInstance->deleteCategory($location_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **category_id** | **string**| The ID of the category to delete. |

### Return type

[**\SquareConnect\Model\V1Category**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiscount**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Discount deleteDiscount($location_id, $discount_id)

DeleteDiscount

Deletes an existing discount.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteDiscount__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteDiscountRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to delete.

try {
    $result = $apiInstance->deleteDiscount($location_id, $discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **discount_id** | **string**| The ID of the discount to delete. |

### Return type

[**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFee**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Fee deleteFee($location_id, $fee_id)

DeleteFee

Deletes an existing fee (tax).  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteFee__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteFeeRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to delete.

try {
    $result = $apiInstance->deleteFee($location_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the fee&#39;s associated location. |
 **fee_id** | **string**| The ID of the fee to delete. |

### Return type

[**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItem**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item deleteItem($location_id, $item_id)

DeleteItem

Deletes an existing item and all item variations associated with it.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteItem__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteItemRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.

try {
    $result = $apiInstance->deleteItem($location_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to modify. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierList deleteModifierList($location_id, $modifier_list_id)

DeleteModifierList

Deletes an existing item modifier list and all modifier options associated with it.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteModifierList__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteModifierListRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.

try {
    $result = $apiInstance->deleteModifierList($location_id, $modifier_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to delete. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModifierOption**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierOption deleteModifierOption($location_id, $modifier_list_id, $modifier_option_id)

DeleteModifierOption

Deletes an existing item modifier option from a modifier list.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteModifierOption__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteModifierOptionRequest` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.

try {
    $result = $apiInstance->deleteModifierOption($location_id, $modifier_list_id, $modifier_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteModifierOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to delete. |
 **modifier_option_id** | **string**| The ID of the modifier list to edit. |

### Return type

[**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePage**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page deletePage($location_id, $page_id)

DeletePage

Deletes an existing Favorites page and all of its cells.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeletePage__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeletePageRequest` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.

try {
    $result = $apiInstance->deletePage($location_id, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deletePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location. |
 **page_id** | **string**| The ID of the page to delete. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePageCell**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page deletePageCell($location_id, $page_id, $row, $column)

DeletePageCell

Deletes a cell from a Favorites page in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeletePageCell__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeletePageCellRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.
$row = "row_example"; // string | The row of the cell to clear. Always an integer between 0 and 4, inclusive. Row 0 is the top row.
$column = "column_example"; // string | The column of the cell to clear. Always an integer between 0 and 4, inclusive. Column 0 is the leftmost column.

try {
    $result = $apiInstance->deletePageCell($location_id, $page_id, $row, $column);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deletePageCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location. |
 **page_id** | **string**| The ID of the page to delete. |
 **row** | **string**| The row of the cell to clear. Always an integer between 0 and 4, inclusive. Row 0 is the top row. | [optional]
 **column** | **string**| The column of the cell to clear. Always an integer between 0 and 4, inclusive. Column 0 is the leftmost column. | [optional]

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariation**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Variation deleteVariation($location_id, $item_id, $variation_id)

DeleteVariation

Deletes an existing item variation from an item.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---  __DeleteVariation__ returns nothing on success but Connect SDKs map the empty response to an empty `V1DeleteVariationRequest` object as documented below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to delete.
$variation_id = "variation_id_example"; // string | The ID of the variation to delete.

try {
    $result = $apiInstance->deleteVariation($location_id, $item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->deleteVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to delete. |
 **variation_id** | **string**| The ID of the variation to delete. |

### Return type

[**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCategories**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Category[] listCategories($location_id)

ListCategories

Lists all the item categories for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $apiInstance->listCategories($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list categories for. |

### Return type

[**\SquareConnect\Model\V1Category[]**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDiscounts**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Discount[] listDiscounts($location_id)

ListDiscounts

Lists all the discounts for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $apiInstance->listDiscounts($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list categories for. |

### Return type

[**\SquareConnect\Model\V1Discount[]**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFees**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Fee[] listFees($location_id)

ListFees

Lists all the fees (taxes) for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list fees for.

try {
    $result = $apiInstance->listFees($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list fees for. |

### Return type

[**\SquareConnect\Model\V1Fee[]**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInventory**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1InventoryEntry[] listInventory($location_id, $limit, $batch_token)

ListInventory

Provides inventory information for all inventory-enabled item variations.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$limit = 56; // int | The maximum number of inventory entries to return in a single response. This value cannot exceed 1000.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listInventory($location_id, $limit, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **limit** | **int**| The maximum number of inventory entries to return in a single response. This value cannot exceed 1000. | [optional]
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1InventoryEntry[]**](../Model/V1InventoryEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listItems**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item[] listItems($location_id, $batch_token)

ListItems

Provides summary information of all items for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list items for.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $apiInstance->listItems($location_id, $batch_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list items for. |
 **batch_token** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\V1Item[]**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listModifierLists**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierList[] listModifierLists($location_id)

ListModifierLists

Lists all the modifier lists for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list modifier lists for.

try {
    $result = $apiInstance->listModifierLists($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listModifierLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list modifier lists for. |

### Return type

[**\SquareConnect\Model\V1ModifierList[]**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPages**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page[] listPages($location_id)

ListPages

Lists all Favorites pages (in Square Point of Sale) for a given location.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list Favorites pages for.

try {
    $result = $apiInstance->listPages($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->listPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list Favorites pages for. |

### Return type

[**\SquareConnect\Model\V1Page[]**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFee**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item removeFee($location_id, $item_id, $fee_id)

RemoveFee

Removes a fee assocation from an item so the fee is no longer automatically applied to the item in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $apiInstance->removeFee($location_id, $item_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->removeFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the fee&#39;s associated location. |
 **item_id** | **string**| The ID of the item to add the fee to. |
 **fee_id** | **string**| The ID of the fee to apply. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item removeModifierList($location_id, $modifier_list_id, $item_id)

RemoveModifierList

Removes a modifier list association from an item so the modifier options from the list can no longer be applied to the item.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to remove.
$item_id = "item_id_example"; // string | The ID of the item to remove the modifier list from.

try {
    $result = $apiInstance->removeModifierList($location_id, $modifier_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->removeModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to remove. |
 **item_id** | **string**| The ID of the item to remove the modifier list from. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveItem**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item retrieveItem($location_id, $item_id)

RetrieveItem

Provides the details for a single item, including associated modifier lists and fees.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.

try {
    $result = $apiInstance->retrieveItem($location_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->retrieveItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The item&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierList retrieveModifierList($location_id, $modifier_list_id)

RetrieveModifierList

Provides the details for a single modifier list.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The modifier list's ID.

try {
    $result = $apiInstance->retrieveModifierList($location_id, $modifier_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->retrieveModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The modifier list&#39;s ID. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategory**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Category updateCategory($location_id, $category_id, $body)

UpdateCategory

Modifies the details of an existing item category.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$category_id = "category_id_example"; // string | The ID of the category to edit.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateCategory($location_id, $category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the category&#39;s associated location. |
 **category_id** | **string**| The ID of the category to edit. |
 **body** | [**\SquareConnect\Model\V1Category**](../Model/V1Category.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Category**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDiscount**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Discount updateDiscount($location_id, $discount_id, $body)

UpdateDiscount

Modifies the details of an existing discount.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to edit.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateDiscount($location_id, $discount_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the category&#39;s associated location. |
 **discount_id** | **string**| The ID of the discount to edit. |
 **body** | [**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFee**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Fee updateFee($location_id, $fee_id, $body)

UpdateFee

Modifies the details of an existing fee (tax).  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to edit.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateFee($location_id, $fee_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the fee&#39;s associated location. |
 **fee_id** | **string**| The ID of the fee to edit. |
 **body** | [**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItem**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Item updateItem($location_id, $item_id, $body)

UpdateItem

Modifies the core details of an existing item.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateItem($location_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to modify. |
 **body** | [**\SquareConnect\Model\V1Item**](../Model/V1Item.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModifierList**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierList updateModifierList($location_id, $modifier_list_id, $body)

UpdateModifierList

Modifies the details of an existing item modifier list.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1UpdateModifierListRequest(); // \SquareConnect\Model\V1UpdateModifierListRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateModifierList($location_id, $modifier_list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1UpdateModifierListRequest**](../Model/V1UpdateModifierListRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModifierOption**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1ModifierOption updateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body)

UpdateModifierOption

Modifies the details of an existing item modifier option.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateModifierOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **modifier_option_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePage**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page updatePage($location_id, $page_id, $body)

UpdatePage

Modifies the details of a Favorites page in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location
$page_id = "page_id_example"; // string | The ID of the page to modify.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updatePage($location_id, $page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updatePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location |
 **page_id** | **string**| The ID of the page to modify. |
 **body** | [**\SquareConnect\Model\V1Page**](../Model/V1Page.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePageCell**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Page updatePageCell($location_id, $page_id, $body)

UpdatePageCell

Modifies a cell of a Favorites page in Square Point of Sale.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page the cell belongs to.
$body = new \SquareConnect\Model\V1PageCell(); // \SquareConnect\Model\V1PageCell | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updatePageCell($location_id, $page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updatePageCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location. |
 **page_id** | **string**| The ID of the page the cell belongs to. |
 **body** | [**\SquareConnect\Model\V1PageCell**](../Model/V1PageCell.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariation**
**Note: This endpoint is deprecated.**
> \SquareConnect\Model\V1Variation updateVariation($location_id, $item_id, $variation_id, $body)

UpdateVariation

Modifies the details of an existing item variation.  ---  - __Deprecation date__: 2019-11-20 - [__Retirement date__](/build-basics/api-lifecycle#deprecated): 2020-11-18 - [Migration guide](/migrate-from-v1/guides/v1-items)  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$variation_id = "variation_id_example"; // string | The ID of the variation to modify.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->updateVariation($location_id, $item_id, $variation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1ItemsApi->updateVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to modify. |
 **variation_id** | **string**| The ID of the variation to modify. |
 **body** | [**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

