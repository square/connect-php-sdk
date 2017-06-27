# SquareConnect\V1ItemsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustInventory**](V1ItemsApi.md#adjustInventory) | **POST** /v1/{location_id}/inventory/{variation_id} | Adjusts an item variation&#39;s current available inventory.
[**applyFee**](V1ItemsApi.md#applyFee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.
[**applyModifierList**](V1ItemsApi.md#applyModifierList) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.
[**createCategory**](V1ItemsApi.md#createCategory) | **POST** /v1/{location_id}/categories | Creates an item category.
[**createDiscount**](V1ItemsApi.md#createDiscount) | **POST** /v1/{location_id}/discounts | Creates a discount.
[**createFee**](V1ItemsApi.md#createFee) | **POST** /v1/{location_id}/fees | Creates a fee (tax).
[**createItem**](V1ItemsApi.md#createItem) | **POST** /v1/{location_id}/items | Creates an item and at least one variation for it.
[**createModifierList**](V1ItemsApi.md#createModifierList) | **POST** /v1/{location_id}/modifier-lists | Creates an item modifier list and at least one modifier option for it.
[**createModifierOption**](V1ItemsApi.md#createModifierOption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | Creates an item modifier option and adds it to a modifier list.
[**createPage**](V1ItemsApi.md#createPage) | **POST** /v1/{location_id}/pages | Creates a Favorites page in Square Register.
[**createVariation**](V1ItemsApi.md#createVariation) | **POST** /v1/{location_id}/items/{item_id}/variations | Creates an item variation for an existing item.
[**deleteCategory**](V1ItemsApi.md#deleteCategory) | **DELETE** /v1/{location_id}/categories/{category_id} | Deletes an existing item category.
[**deleteDiscount**](V1ItemsApi.md#deleteDiscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | Deletes an existing discount.
[**deleteFee**](V1ItemsApi.md#deleteFee) | **DELETE** /v1/{location_id}/fees/{fee_id} | Deletes an existing fee (tax).
[**deleteItem**](V1ItemsApi.md#deleteItem) | **DELETE** /v1/{location_id}/items/{item_id} | Deletes an existing item and all item variations associated with it.
[**deleteModifierList**](V1ItemsApi.md#deleteModifierList) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | Deletes an existing item modifier list and all modifier options associated with it.
[**deleteModifierOption**](V1ItemsApi.md#deleteModifierOption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Deletes an existing item modifier option from a modifier list.
[**deletePage**](V1ItemsApi.md#deletePage) | **DELETE** /v1/{location_id}/pages/{page_id} | Deletes an existing Favorites page and all of its cells.
[**deletePageCell**](V1ItemsApi.md#deletePageCell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | Deletes a cell from a Favorites page in Square Register.
[**deleteVariation**](V1ItemsApi.md#deleteVariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Deletes an existing item variation from an item.
[**listCategories**](V1ItemsApi.md#listCategories) | **GET** /v1/{location_id}/categories | Lists all of a location&#39;s item categories.
[**listDiscounts**](V1ItemsApi.md#listDiscounts) | **GET** /v1/{location_id}/discounts | Lists all of a location&#39;s discounts.
[**listFees**](V1ItemsApi.md#listFees) | **GET** /v1/{location_id}/fees | Lists all of a location&#39;s fees (taxes).
[**listInventory**](V1ItemsApi.md#listInventory) | **GET** /v1/{location_id}/inventory | Provides inventory information for all of a merchant&#39;s inventory-enabled item variations.
[**listItems**](V1ItemsApi.md#listItems) | **GET** /v1/{location_id}/items | Provides summary information for all of a location&#39;s items.
[**listModifierLists**](V1ItemsApi.md#listModifierLists) | **GET** /v1/{location_id}/modifier-lists | Lists all of a location&#39;s modifier lists.
[**listPages**](V1ItemsApi.md#listPages) | **GET** /v1/{location_id}/pages | Lists all of a location&#39;s Favorites pages in Square Register.
[**removeFee**](V1ItemsApi.md#removeFee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.
[**removeModifierList**](V1ItemsApi.md#removeModifierList) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.
[**retrieveItem**](V1ItemsApi.md#retrieveItem) | **GET** /v1/{location_id}/items/{item_id} | Provides the details for a single item, including associated modifier lists and fees.
[**retrieveModifierList**](V1ItemsApi.md#retrieveModifierList) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | Provides the details for a single modifier list.
[**updateCategory**](V1ItemsApi.md#updateCategory) | **PUT** /v1/{location_id}/categories/{category_id} | Modifies the details of an existing item category.
[**updateDiscount**](V1ItemsApi.md#updateDiscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | Modifies the details of an existing discount.
[**updateFee**](V1ItemsApi.md#updateFee) | **PUT** /v1/{location_id}/fees/{fee_id} | Modifies the details of an existing fee (tax).
[**updateItem**](V1ItemsApi.md#updateItem) | **PUT** /v1/{location_id}/items/{item_id} | Modifies the core details of an existing item.
[**updateModifierList**](V1ItemsApi.md#updateModifierList) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | Modifies the details of an existing item modifier list.
[**updateModifierOption**](V1ItemsApi.md#updateModifierOption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Modifies the details of an existing item modifier option.
[**updatePage**](V1ItemsApi.md#updatePage) | **PUT** /v1/{location_id}/pages/{page_id} | Modifies the details of a Favorites page in Square Register.
[**updatePageCell**](V1ItemsApi.md#updatePageCell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | Modifies a cell of a Favorites page in Square Register.
[**updateVariation**](V1ItemsApi.md#updateVariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Modifies the details of an existing item variation.


# **adjustInventory**
> \SquareConnect\Model\V1InventoryEntry adjustInventory($location_id, $variation_id, $body)

Adjusts an item variation's current available inventory.

Adjusts an item variation's current available inventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$variation_id = "variation_id_example"; // string | The ID of the variation to adjust inventory information for.
$body = new \SquareConnect\Model\V1AdjustInventoryRequest(); // \SquareConnect\Model\V1AdjustInventoryRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->adjustInventory($location_id, $variation_id, $body);
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
> \SquareConnect\Model\V1Item applyFee($location_id, $item_id, $fee_id)

Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.

Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $api_instance->applyFee($location_id, $item_id, $fee_id);
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
> \SquareConnect\Model\V1Item applyModifierList($location_id, $modifier_list_id, $item_id)

Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.

Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to apply.
$item_id = "item_id_example"; // string | The ID of the item to add the modifier list to.

try {
    $result = $api_instance->applyModifierList($location_id, $modifier_list_id, $item_id);
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
> \SquareConnect\Model\V1Category createCategory($location_id, $body)

Creates an item category.

Creates an item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCategory($location_id, $body);
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
> \SquareConnect\Model\V1Discount createDiscount($location_id, $body)

Creates a discount.

Creates a discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createDiscount($location_id, $body);
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
> \SquareConnect\Model\V1Fee createFee($location_id, $body)

Creates a fee (tax).

Creates a fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a fee for.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createFee($location_id, $body);
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
> \SquareConnect\Model\V1Item createItem($location_id, $body)

Creates an item and at least one variation for it.

Creates an item and at least one variation for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createItem($location_id, $body);
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
> \SquareConnect\Model\V1ModifierList createModifierList($location_id, $body)

Creates an item modifier list and at least one modifier option for it.

Creates an item modifier list and at least one modifier option for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a modifier list for.
$body = new \SquareConnect\Model\V1ModifierList(); // \SquareConnect\Model\V1ModifierList | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createModifierList($location_id, $body);
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
> \SquareConnect\Model\V1ModifierOption createModifierOption($location_id, $modifier_list_id, $body)

Creates an item modifier option and adds it to a modifier list.

Creates an item modifier option and adds it to a modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createModifierOption($location_id, $modifier_list_id, $body);
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
> \SquareConnect\Model\V1Page createPage($location_id, $body)

Creates a Favorites page in Square Register.

Creates a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createPage($location_id, $body);
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
> \SquareConnect\Model\V1Variation createVariation($location_id, $item_id, $body)

Creates an item variation for an existing item.

Creates an item variation for an existing item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createVariation($location_id, $item_id, $body);
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
> \SquareConnect\Model\V1Category deleteCategory($location_id, $category_id)

Deletes an existing item category.

Deletes an existing item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$category_id = "category_id_example"; // string | The ID of the category to delete.

try {
    $result = $api_instance->deleteCategory($location_id, $category_id);
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
> \SquareConnect\Model\V1Discount deleteDiscount($location_id, $discount_id)

Deletes an existing discount.

Deletes an existing discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to delete.

try {
    $result = $api_instance->deleteDiscount($location_id, $discount_id);
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
> \SquareConnect\Model\V1Fee deleteFee($location_id, $fee_id)

Deletes an existing fee (tax).

Deletes an existing fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to delete.

try {
    $result = $api_instance->deleteFee($location_id, $fee_id);
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
> \SquareConnect\Model\V1Item deleteItem($location_id, $item_id)

Deletes an existing item and all item variations associated with it.

Deletes an existing item and all item variations associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.

try {
    $result = $api_instance->deleteItem($location_id, $item_id);
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
> \SquareConnect\Model\V1ModifierList deleteModifierList($location_id, $modifier_list_id)

Deletes an existing item modifier list and all modifier options associated with it.

Deletes an existing item modifier list and all modifier options associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.

try {
    $result = $api_instance->deleteModifierList($location_id, $modifier_list_id);
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
> \SquareConnect\Model\V1ModifierOption deleteModifierOption($location_id, $modifier_list_id, $modifier_option_id)

Deletes an existing item modifier option from a modifier list.

Deletes an existing item modifier option from a modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.

try {
    $result = $api_instance->deleteModifierOption($location_id, $modifier_list_id, $modifier_option_id);
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
> \SquareConnect\Model\V1Page deletePage($location_id, $page_id)

Deletes an existing Favorites page and all of its cells.

Deletes an existing Favorites page and all of its cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.

try {
    $result = $api_instance->deletePage($location_id, $page_id);
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
> \SquareConnect\Model\V1Page deletePageCell($location_id, $page_id, $row, $column)

Deletes a cell from a Favorites page in Square Register.

Deletes a cell from a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.
$row = "row_example"; // string | The row of the cell to clear. Always an integer between 0 and 4, inclusive. Row 0 is the top row.
$column = "column_example"; // string | The column of the cell to clear. Always an integer between 0 and 4, inclusive. Column 0 is the leftmost column.

try {
    $result = $api_instance->deletePageCell($location_id, $page_id, $row, $column);
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
> \SquareConnect\Model\V1Variation deleteVariation($location_id, $item_id, $variation_id)

Deletes an existing item variation from an item.

Deletes an existing item variation from an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to delete.
$variation_id = "variation_id_example"; // string | The ID of the variation to delete.

try {
    $result = $api_instance->deleteVariation($location_id, $item_id, $variation_id);
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
> \SquareConnect\Model\V1Category[] listCategories($location_id)

Lists all of a location's item categories.

Lists all of a location's item categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $api_instance->listCategories($location_id);
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
> \SquareConnect\Model\V1Discount[] listDiscounts($location_id)

Lists all of a location's discounts.

Lists all of a location's discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $api_instance->listDiscounts($location_id);
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
> \SquareConnect\Model\V1Fee[] listFees($location_id)

Lists all of a location's fees (taxes).

Lists all of a location's fees (taxes).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list fees for.

try {
    $result = $api_instance->listFees($location_id);
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
> \SquareConnect\Model\V1InventoryEntry[] listInventory($location_id, $limit, $batch_token)

Provides inventory information for all of a merchant's inventory-enabled item variations.

Provides inventory information for all of a merchant's inventory-enabled item variations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$limit = 56; // int | The maximum number of inventory entries to return in a single response. This value cannot exceed 1000.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->listInventory($location_id, $limit, $batch_token);
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
> \SquareConnect\Model\V1Item[] listItems($location_id, $batch_token)

Provides summary information for all of a location's items.

Provides summary information for all of a location's items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list items for.
$batch_token = "batch_token_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->listItems($location_id, $batch_token);
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
> \SquareConnect\Model\V1ModifierList[] listModifierLists($location_id)

Lists all of a location's modifier lists.

Lists all of a location's modifier lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list modifier lists for.

try {
    $result = $api_instance->listModifierLists($location_id);
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
> \SquareConnect\Model\V1Page[] listPages($location_id)

Lists all of a location's Favorites pages in Square Register.

Lists all of a location's Favorites pages in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list Favorites pages for.

try {
    $result = $api_instance->listPages($location_id);
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
> \SquareConnect\Model\V1Item removeFee($location_id, $item_id, $fee_id)

Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.

Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $api_instance->removeFee($location_id, $item_id, $fee_id);
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
> \SquareConnect\Model\V1Item removeModifierList($location_id, $modifier_list_id, $item_id)

Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.

Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to remove.
$item_id = "item_id_example"; // string | The ID of the item to remove the modifier list from.

try {
    $result = $api_instance->removeModifierList($location_id, $modifier_list_id, $item_id);
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
> \SquareConnect\Model\V1Item retrieveItem($location_id, $item_id)

Provides the details for a single item, including associated modifier lists and fees.

Provides the details for a single item, including associated modifier lists and fees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.

try {
    $result = $api_instance->retrieveItem($location_id, $item_id);
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
> \SquareConnect\Model\V1ModifierList retrieveModifierList($location_id, $modifier_list_id)

Provides the details for a single modifier list.

Provides the details for a single modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The modifier list's ID.

try {
    $result = $api_instance->retrieveModifierList($location_id, $modifier_list_id);
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
> \SquareConnect\Model\V1Category updateCategory($location_id, $category_id, $body)

Modifies the details of an existing item category.

Modifies the details of an existing item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$category_id = "category_id_example"; // string | The ID of the category to edit.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateCategory($location_id, $category_id, $body);
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
> \SquareConnect\Model\V1Discount updateDiscount($location_id, $discount_id, $body)

Modifies the details of an existing discount.

Modifies the details of an existing discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to edit.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateDiscount($location_id, $discount_id, $body);
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
> \SquareConnect\Model\V1Fee updateFee($location_id, $fee_id, $body)

Modifies the details of an existing fee (tax).

Modifies the details of an existing fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to edit.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateFee($location_id, $fee_id, $body);
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
> \SquareConnect\Model\V1Item updateItem($location_id, $item_id, $body)

Modifies the core details of an existing item.

Modifies the core details of an existing item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateItem($location_id, $item_id, $body);
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
> \SquareConnect\Model\V1ModifierList updateModifierList($location_id, $modifier_list_id, $body)

Modifies the details of an existing item modifier list.

Modifies the details of an existing item modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1UpdateModifierListRequest(); // \SquareConnect\Model\V1UpdateModifierListRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateModifierList($location_id, $modifier_list_id, $body);
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
> \SquareConnect\Model\V1ModifierOption updateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body)

Modifies the details of an existing item modifier option.

Modifies the details of an existing item modifier option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body);
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
> \SquareConnect\Model\V1Page updatePage($location_id, $page_id, $body)

Modifies the details of a Favorites page in Square Register.

Modifies the details of a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location
$page_id = "page_id_example"; // string | The ID of the page to modify.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updatePage($location_id, $page_id, $body);
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
> \SquareConnect\Model\V1Page updatePageCell($location_id, $page_id, $body)

Modifies a cell of a Favorites page in Square Register.

Modifies a cell of a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page the cell belongs to.
$body = new \SquareConnect\Model\V1PageCell(); // \SquareConnect\Model\V1PageCell | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updatePageCell($location_id, $page_id, $body);
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
> \SquareConnect\Model\V1Variation updateVariation($location_id, $item_id, $variation_id, $body)

Modifies the details of an existing item variation.

Modifies the details of an existing item variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\V1ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$variation_id = "variation_id_example"; // string | The ID of the variation to modify.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->updateVariation($location_id, $item_id, $variation_id, $body);
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

