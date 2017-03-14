# SquareConnect\ItemsApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AdjustInventory**](ItemsApi.md#v1AdjustInventory) | **POST** /v1/{location_id}/inventory/{variation_id} | Adjusts an item variation&#39;s current available inventory.
[**v1ApplyFee**](ItemsApi.md#v1ApplyFee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.
[**v1ApplyModifierList**](ItemsApi.md#v1ApplyModifierList) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.
[**v1CreateCategory**](ItemsApi.md#v1CreateCategory) | **POST** /v1/{location_id}/categories | Creates an item category.
[**v1CreateDiscount**](ItemsApi.md#v1CreateDiscount) | **POST** /v1/{location_id}/discounts | Creates a discount.
[**v1CreateFee**](ItemsApi.md#v1CreateFee) | **POST** /v1/{location_id}/fees | Creates a fee (tax).
[**v1CreateItem**](ItemsApi.md#v1CreateItem) | **POST** /v1/{location_id}/items | Creates an item and at least one variation for it.
[**v1CreateModifierList**](ItemsApi.md#v1CreateModifierList) | **POST** /v1/{location_id}/modifier-lists | Creates an item modifier list and at least one modifier option for it.
[**v1CreateModifierOption**](ItemsApi.md#v1CreateModifierOption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | Creates an item modifier option and adds it to a modifier list.
[**v1CreatePage**](ItemsApi.md#v1CreatePage) | **POST** /v1/{location_id}/pages | Creates a Favorites page in Square Register.
[**v1CreateVariation**](ItemsApi.md#v1CreateVariation) | **POST** /v1/{location_id}/items/{item_id}/variations | Creates an item variation for an existing item.
[**v1DeleteCategory**](ItemsApi.md#v1DeleteCategory) | **DELETE** /v1/{location_id}/categories/{category_id} | Deletes an existing item category.
[**v1DeleteDiscount**](ItemsApi.md#v1DeleteDiscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | Deletes an existing discount.
[**v1DeleteFee**](ItemsApi.md#v1DeleteFee) | **DELETE** /v1/{location_id}/fees/{fee_id} | Deletes an existing fee (tax).
[**v1DeleteItem**](ItemsApi.md#v1DeleteItem) | **DELETE** /v1/{location_id}/items/{item_id} | Deletes an existing item and all item variations associated with it.
[**v1DeleteModifierList**](ItemsApi.md#v1DeleteModifierList) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | Deletes an existing item modifier list and all modifier options associated with it.
[**v1DeleteModifierOption**](ItemsApi.md#v1DeleteModifierOption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Deletes an existing item modifier option from a modifier list.
[**v1DeletePage**](ItemsApi.md#v1DeletePage) | **DELETE** /v1/{location_id}/pages/{page_id} | Deletes an existing Favorites page and all of its cells.
[**v1DeletePageCell**](ItemsApi.md#v1DeletePageCell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | Deletes a cell from a Favorites page in Square Register.
[**v1DeleteVariation**](ItemsApi.md#v1DeleteVariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Deletes an existing item variation from an item.
[**v1ListCategories**](ItemsApi.md#v1ListCategories) | **GET** /v1/{location_id}/categories | Lists all of a location&#39;s item categories.
[**v1ListDiscounts**](ItemsApi.md#v1ListDiscounts) | **GET** /v1/{location_id}/discounts | Lists all of a location&#39;s discounts.
[**v1ListFees**](ItemsApi.md#v1ListFees) | **GET** /v1/{location_id}/fees | Lists all of a location&#39;s fees (taxes).
[**v1ListInventory**](ItemsApi.md#v1ListInventory) | **GET** /v1/{location_id}/inventory | Provides inventory information for all of a merchant&#39;s inventory-enabled item variations.
[**v1ListItems**](ItemsApi.md#v1ListItems) | **GET** /v1/{location_id}/items | Provides summary information for all of a location&#39;s items.
[**v1ListModifierLists**](ItemsApi.md#v1ListModifierLists) | **GET** /v1/{location_id}/modifier-lists | Lists all of a location&#39;s modifier lists.
[**v1ListPages**](ItemsApi.md#v1ListPages) | **GET** /v1/{location_id}/pages | Lists all of a location&#39;s Favorites pages in Square Register.
[**v1RemoveFee**](ItemsApi.md#v1RemoveFee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.
[**v1RemoveModifierList**](ItemsApi.md#v1RemoveModifierList) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.
[**v1RetrieveItem**](ItemsApi.md#v1RetrieveItem) | **GET** /v1/{location_id}/items/{item_id} | Provides the details for a single item, including associated modifier lists and fees.
[**v1RetrieveModifierList**](ItemsApi.md#v1RetrieveModifierList) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | Provides the details for a single modifier list.
[**v1UpdateCategory**](ItemsApi.md#v1UpdateCategory) | **PUT** /v1/{location_id}/categories/{category_id} | Modifies the details of an existing item category.
[**v1UpdateDiscount**](ItemsApi.md#v1UpdateDiscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | Modifies the details of an existing discount.
[**v1UpdateFee**](ItemsApi.md#v1UpdateFee) | **PUT** /v1/{location_id}/fees/{fee_id} | Modifies the details of an existing fee (tax).
[**v1UpdateItem**](ItemsApi.md#v1UpdateItem) | **PUT** /v1/{location_id}/items/{item_id} | Modifies the core details of an existing item.
[**v1UpdateModifierList**](ItemsApi.md#v1UpdateModifierList) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | Modifies the details of an existing item modifier list.
[**v1UpdateModifierOption**](ItemsApi.md#v1UpdateModifierOption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Modifies the details of an existing item modifier option.
[**v1UpdatePage**](ItemsApi.md#v1UpdatePage) | **PUT** /v1/{location_id}/pages/{page_id} | Modifies the details of a Favorites page in Square Register.
[**v1UpdatePageCell**](ItemsApi.md#v1UpdatePageCell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | Modifies a cell of a Favorites page in Square Register.
[**v1UpdateVariation**](ItemsApi.md#v1UpdateVariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Modifies the details of an existing item variation.


# **v1AdjustInventory**
> \SquareConnect\Model\V1InventoryEntry v1AdjustInventory($location_id, $variation_id, $body)

Adjusts an item variation's current available inventory.

Adjusts an item variation's current available inventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$variation_id = "variation_id_example"; // string | The ID of the variation to adjust inventory information for.
$body = new \SquareConnect\Model\V1AdjustInventoryRequest(); // \SquareConnect\Model\V1AdjustInventoryRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1AdjustInventory($location_id, $variation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1AdjustInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **variation_id** | **string**| The ID of the variation to adjust inventory information for. |
 **body** | [**\SquareConnect\Model\V1AdjustInventoryRequest**](../Model/\SquareConnect\Model\V1AdjustInventoryRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1InventoryEntry**](../Model/V1InventoryEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ApplyFee**
> \SquareConnect\Model\V1Item v1ApplyFee($location_id, $item_id, $fee_id)

Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.

Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $api_instance->v1ApplyFee($location_id, $item_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ApplyFee: ', $e->getMessage(), PHP_EOL;
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

# **v1ApplyModifierList**
> \SquareConnect\Model\V1Item v1ApplyModifierList($location_id, $modifier_list_id, $item_id)

Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.

Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to apply.
$item_id = "item_id_example"; // string | The ID of the item to add the modifier list to.

try {
    $result = $api_instance->v1ApplyModifierList($location_id, $modifier_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ApplyModifierList: ', $e->getMessage(), PHP_EOL;
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

# **v1CreateCategory**
> \SquareConnect\Model\V1Category v1CreateCategory($location_id, $body)

Creates an item category.

Creates an item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateCategory($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Category**](../Model/\SquareConnect\Model\V1Category.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Category**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateDiscount**
> \SquareConnect\Model\V1Discount v1CreateDiscount($location_id, $body)

Creates a discount.

Creates a discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateDiscount($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Discount**](../Model/\SquareConnect\Model\V1Discount.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateFee**
> \SquareConnect\Model\V1Fee v1CreateFee($location_id, $body)

Creates a fee (tax).

Creates a fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a fee for.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateFee($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create a fee for. |
 **body** | [**\SquareConnect\Model\V1Fee**](../Model/\SquareConnect\Model\V1Fee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateItem**
> \SquareConnect\Model\V1Item v1CreateItem($location_id, $body)

Creates an item and at least one variation for it.

Creates an item and at least one variation for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateItem($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Item**](../Model/\SquareConnect\Model\V1Item.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateModifierList**
> \SquareConnect\Model\V1ModifierList v1CreateModifierList($location_id, $body)

Creates an item modifier list and at least one modifier option for it.

Creates an item modifier list and at least one modifier option for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create a modifier list for.
$body = new \SquareConnect\Model\V1ModifierList(); // \SquareConnect\Model\V1ModifierList | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateModifierList($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create a modifier list for. |
 **body** | [**\SquareConnect\Model\V1ModifierList**](../Model/\SquareConnect\Model\V1ModifierList.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateModifierOption**
> \SquareConnect\Model\V1ModifierOption v1CreateModifierOption($location_id, $modifier_list_id, $body)

Creates an item modifier option and adds it to a modifier list.

Creates an item modifier option and adds it to a modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateModifierOption($location_id, $modifier_list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateModifierOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1ModifierOption**](../Model/\SquareConnect\Model\V1ModifierOption.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreatePage**
> \SquareConnect\Model\V1Page v1CreatePage($location_id, $body)

Creates a Favorites page in Square Register.

Creates a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to create an item for.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreatePage($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreatePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to create an item for. |
 **body** | [**\SquareConnect\Model\V1Page**](../Model/\SquareConnect\Model\V1Page.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CreateVariation**
> \SquareConnect\Model\V1Variation v1CreateVariation($location_id, $item_id, $body)

Creates an item variation for an existing item.

Creates an item variation for an existing item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1CreateVariation($location_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1CreateVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The item&#39;s ID. |
 **body** | [**\SquareConnect\Model\V1Variation**](../Model/\SquareConnect\Model\V1Variation.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1DeleteCategory**
> \SquareConnect\Model\V1Category v1DeleteCategory($location_id, $category_id)

Deletes an existing item category.

Deletes an existing item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$category_id = "category_id_example"; // string | The ID of the category to delete.

try {
    $result = $api_instance->v1DeleteCategory($location_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteCategory: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteDiscount**
> \SquareConnect\Model\V1Discount v1DeleteDiscount($location_id, $discount_id)

Deletes an existing discount.

Deletes an existing discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to delete.

try {
    $result = $api_instance->v1DeleteDiscount($location_id, $discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteDiscount: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteFee**
> \SquareConnect\Model\V1Fee v1DeleteFee($location_id, $fee_id)

Deletes an existing fee (tax).

Deletes an existing fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to delete.

try {
    $result = $api_instance->v1DeleteFee($location_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteFee: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteItem**
> \SquareConnect\Model\V1Item v1DeleteItem($location_id, $item_id)

Deletes an existing item and all item variations associated with it.

Deletes an existing item and all item variations associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.

try {
    $result = $api_instance->v1DeleteItem($location_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteItem: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteModifierList**
> \SquareConnect\Model\V1ModifierList v1DeleteModifierList($location_id, $modifier_list_id)

Deletes an existing item modifier list and all modifier options associated with it.

Deletes an existing item modifier list and all modifier options associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.

try {
    $result = $api_instance->v1DeleteModifierList($location_id, $modifier_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteModifierList: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteModifierOption**
> \SquareConnect\Model\V1ModifierOption v1DeleteModifierOption($location_id, $modifier_list_id, $modifier_option_id)

Deletes an existing item modifier option from a modifier list.

Deletes an existing item modifier option from a modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to delete.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.

try {
    $result = $api_instance->v1DeleteModifierOption($location_id, $modifier_list_id, $modifier_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteModifierOption: ', $e->getMessage(), PHP_EOL;
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

# **v1DeletePage**
> \SquareConnect\Model\V1Page v1DeletePage($location_id, $page_id)

Deletes an existing Favorites page and all of its cells.

Deletes an existing Favorites page and all of its cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.

try {
    $result = $api_instance->v1DeletePage($location_id, $page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeletePage: ', $e->getMessage(), PHP_EOL;
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

# **v1DeletePageCell**
> \SquareConnect\Model\V1Page v1DeletePageCell($location_id, $page_id, $row, $column)

Deletes a cell from a Favorites page in Square Register.

Deletes a cell from a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page to delete.
$row = "row_example"; // string | The row of the cell to clear. Always an integer between 0 and 4, inclusive. Row 0 is the top row.
$column = "column_example"; // string | The column of the cell to clear. Always an integer between 0 and 4, inclusive. Column 0 is the leftmost column.

try {
    $result = $api_instance->v1DeletePageCell($location_id, $page_id, $row, $column);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeletePageCell: ', $e->getMessage(), PHP_EOL;
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

# **v1DeleteVariation**
> \SquareConnect\Model\V1Variation v1DeleteVariation($location_id, $item_id, $variation_id)

Deletes an existing item variation from an item.

Deletes an existing item variation from an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to delete.
$variation_id = "variation_id_example"; // string | The ID of the variation to delete.

try {
    $result = $api_instance->v1DeleteVariation($location_id, $item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1DeleteVariation: ', $e->getMessage(), PHP_EOL;
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

# **v1ListCategories**
> \SquareConnect\Model\V1Category[] v1ListCategories($location_id)

Lists all of a location's item categories.

Lists all of a location's item categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $api_instance->v1ListCategories($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListCategories: ', $e->getMessage(), PHP_EOL;
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

# **v1ListDiscounts**
> \SquareConnect\Model\V1Discount[] v1ListDiscounts($location_id)

Lists all of a location's discounts.

Lists all of a location's discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list categories for.

try {
    $result = $api_instance->v1ListDiscounts($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListDiscounts: ', $e->getMessage(), PHP_EOL;
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

# **v1ListFees**
> \SquareConnect\Model\V1Fee[] v1ListFees($location_id)

Lists all of a location's fees (taxes).

Lists all of a location's fees (taxes).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list fees for.

try {
    $result = $api_instance->v1ListFees($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListFees: ', $e->getMessage(), PHP_EOL;
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

# **v1ListInventory**
> \SquareConnect\Model\V1InventoryEntry[] v1ListInventory($location_id, $limit)

Provides inventory information for all of a merchant's inventory-enabled item variations.

Provides inventory information for all of a merchant's inventory-enabled item variations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$limit = 56; // int | The maximum number of inventory entries to return in a single response. This value cannot exceed 1000.

try {
    $result = $api_instance->v1ListInventory($location_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **limit** | **int**| The maximum number of inventory entries to return in a single response. This value cannot exceed 1000. | [optional]

### Return type

[**\SquareConnect\Model\V1InventoryEntry[]**](../Model/V1InventoryEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListItems**
> \SquareConnect\Model\V1Item[] v1ListItems($location_id)

Provides summary information for all of a location's items.

Provides summary information for all of a location's items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list items for.

try {
    $result = $api_instance->v1ListItems($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list items for. |

### Return type

[**\SquareConnect\Model\V1Item[]**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ListModifierLists**
> \SquareConnect\Model\V1ModifierList[] v1ListModifierLists($location_id)

Lists all of a location's modifier lists.

Lists all of a location's modifier lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list modifier lists for.

try {
    $result = $api_instance->v1ListModifierLists($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListModifierLists: ', $e->getMessage(), PHP_EOL;
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

# **v1ListPages**
> \SquareConnect\Model\V1Page[] v1ListPages($location_id)

Lists all of a location's Favorites pages in Square Register.

Lists all of a location's Favorites pages in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the location to list Favorites pages for.

try {
    $result = $api_instance->v1ListPages($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1ListPages: ', $e->getMessage(), PHP_EOL;
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

# **v1RemoveFee**
> \SquareConnect\Model\V1Item v1RemoveFee($location_id, $item_id, $fee_id)

Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.

Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$item_id = "item_id_example"; // string | The ID of the item to add the fee to.
$fee_id = "fee_id_example"; // string | The ID of the fee to apply.

try {
    $result = $api_instance->v1RemoveFee($location_id, $item_id, $fee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1RemoveFee: ', $e->getMessage(), PHP_EOL;
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

# **v1RemoveModifierList**
> \SquareConnect\Model\V1Item v1RemoveModifierList($location_id, $modifier_list_id, $item_id)

Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.

Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to remove.
$item_id = "item_id_example"; // string | The ID of the item to remove the modifier list from.

try {
    $result = $api_instance->v1RemoveModifierList($location_id, $modifier_list_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1RemoveModifierList: ', $e->getMessage(), PHP_EOL;
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

# **v1RetrieveItem**
> \SquareConnect\Model\V1Item v1RetrieveItem($location_id, $item_id)

Provides the details for a single item, including associated modifier lists and fees.

Provides the details for a single item, including associated modifier lists and fees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The item's ID.

try {
    $result = $api_instance->v1RetrieveItem($location_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1RetrieveItem: ', $e->getMessage(), PHP_EOL;
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

# **v1RetrieveModifierList**
> \SquareConnect\Model\V1ModifierList v1RetrieveModifierList($location_id, $modifier_list_id)

Provides the details for a single modifier list.

Provides the details for a single modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The modifier list's ID.

try {
    $result = $api_instance->v1RetrieveModifierList($location_id, $modifier_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1RetrieveModifierList: ', $e->getMessage(), PHP_EOL;
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

# **v1UpdateCategory**
> \SquareConnect\Model\V1Category v1UpdateCategory($location_id, $category_id, $body)

Modifies the details of an existing item category.

Modifies the details of an existing item category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$category_id = "category_id_example"; // string | The ID of the category to edit.
$body = new \SquareConnect\Model\V1Category(); // \SquareConnect\Model\V1Category | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateCategory($location_id, $category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the category&#39;s associated location. |
 **category_id** | **string**| The ID of the category to edit. |
 **body** | [**\SquareConnect\Model\V1Category**](../Model/\SquareConnect\Model\V1Category.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Category**](../Model/V1Category.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateDiscount**
> \SquareConnect\Model\V1Discount v1UpdateDiscount($location_id, $discount_id, $body)

Modifies the details of an existing discount.

Modifies the details of an existing discount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the category's associated location.
$discount_id = "discount_id_example"; // string | The ID of the discount to edit.
$body = new \SquareConnect\Model\V1Discount(); // \SquareConnect\Model\V1Discount | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateDiscount($location_id, $discount_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the category&#39;s associated location. |
 **discount_id** | **string**| The ID of the discount to edit. |
 **body** | [**\SquareConnect\Model\V1Discount**](../Model/\SquareConnect\Model\V1Discount.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Discount**](../Model/V1Discount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateFee**
> \SquareConnect\Model\V1Fee v1UpdateFee($location_id, $fee_id, $body)

Modifies the details of an existing fee (tax).

Modifies the details of an existing fee (tax).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the fee's associated location.
$fee_id = "fee_id_example"; // string | The ID of the fee to edit.
$body = new \SquareConnect\Model\V1Fee(); // \SquareConnect\Model\V1Fee | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateFee($location_id, $fee_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the fee&#39;s associated location. |
 **fee_id** | **string**| The ID of the fee to edit. |
 **body** | [**\SquareConnect\Model\V1Fee**](../Model/\SquareConnect\Model\V1Fee.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Fee**](../Model/V1Fee.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateItem**
> \SquareConnect\Model\V1Item v1UpdateItem($location_id, $item_id, $body)

Modifies the core details of an existing item.

Modifies the core details of an existing item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$body = new \SquareConnect\Model\V1Item(); // \SquareConnect\Model\V1Item | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateItem($location_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to modify. |
 **body** | [**\SquareConnect\Model\V1Item**](../Model/\SquareConnect\Model\V1Item.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Item**](../Model/V1Item.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateModifierList**
> \SquareConnect\Model\V1ModifierList v1UpdateModifierList($location_id, $modifier_list_id, $body)

Modifies the details of an existing item modifier list.

Modifies the details of an existing item modifier list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1UpdateModifierListRequest(); // \SquareConnect\Model\V1UpdateModifierListRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateModifierList($location_id, $modifier_list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1UpdateModifierListRequest**](../Model/\SquareConnect\Model\V1UpdateModifierListRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierList**](../Model/V1ModifierList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateModifierOption**
> \SquareConnect\Model\V1ModifierOption v1UpdateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body)

Modifies the details of an existing item modifier option.

Modifies the details of an existing item modifier option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$modifier_list_id = "modifier_list_id_example"; // string | The ID of the modifier list to edit.
$modifier_option_id = "modifier_option_id_example"; // string | The ID of the modifier list to edit.
$body = new \SquareConnect\Model\V1ModifierOption(); // \SquareConnect\Model\V1ModifierOption | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateModifierOption($location_id, $modifier_list_id, $modifier_option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateModifierOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **modifier_list_id** | **string**| The ID of the modifier list to edit. |
 **modifier_option_id** | **string**| The ID of the modifier list to edit. |
 **body** | [**\SquareConnect\Model\V1ModifierOption**](../Model/\SquareConnect\Model\V1ModifierOption.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1ModifierOption**](../Model/V1ModifierOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdatePage**
> \SquareConnect\Model\V1Page v1UpdatePage($location_id, $page_id, $body)

Modifies the details of a Favorites page in Square Register.

Modifies the details of a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location
$page_id = "page_id_example"; // string | The ID of the page to modify.
$body = new \SquareConnect\Model\V1Page(); // \SquareConnect\Model\V1Page | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdatePage($location_id, $page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdatePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location |
 **page_id** | **string**| The ID of the page to modify. |
 **body** | [**\SquareConnect\Model\V1Page**](../Model/\SquareConnect\Model\V1Page.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdatePageCell**
> \SquareConnect\Model\V1Page v1UpdatePageCell($location_id, $page_id, $body)

Modifies a cell of a Favorites page in Square Register.

Modifies a cell of a Favorites page in Square Register.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the Favorites page's associated location.
$page_id = "page_id_example"; // string | The ID of the page the cell belongs to.
$body = new \SquareConnect\Model\V1PageCell(); // \SquareConnect\Model\V1PageCell | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdatePageCell($location_id, $page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdatePageCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the Favorites page&#39;s associated location. |
 **page_id** | **string**| The ID of the page the cell belongs to. |
 **body** | [**\SquareConnect\Model\V1PageCell**](../Model/\SquareConnect\Model\V1PageCell.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Page**](../Model/V1Page.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UpdateVariation**
> \SquareConnect\Model\V1Variation v1UpdateVariation($location_id, $item_id, $variation_id, $body)

Modifies the details of an existing item variation.

Modifies the details of an existing item variation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\ItemsApi();
$location_id = "location_id_example"; // string | The ID of the item's associated location.
$item_id = "item_id_example"; // string | The ID of the item to modify.
$variation_id = "variation_id_example"; // string | The ID of the variation to modify.
$body = new \SquareConnect\Model\V1Variation(); // \SquareConnect\Model\V1Variation | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->v1UpdateVariation($location_id, $item_id, $variation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->v1UpdateVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the item&#39;s associated location. |
 **item_id** | **string**| The ID of the item to modify. |
 **variation_id** | **string**| The ID of the variation to modify. |
 **body** | [**\SquareConnect\Model\V1Variation**](../Model/\SquareConnect\Model\V1Variation.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\V1Variation**](../Model/V1Variation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

