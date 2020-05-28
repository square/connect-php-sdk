# SquareConnect\LoyaltyApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accumulateLoyaltyPoints**](LoyaltyApi.md#accumulateLoyaltyPoints) | **POST** /v2/loyalty/accounts/{account_id}/accumulate | AccumulateLoyaltyPoints
[**adjustLoyaltyPoints**](LoyaltyApi.md#adjustLoyaltyPoints) | **POST** /v2/loyalty/accounts/{account_id}/adjust | AdjustLoyaltyPoints
[**calculateLoyaltyPoints**](LoyaltyApi.md#calculateLoyaltyPoints) | **POST** /v2/loyalty/programs/{program_id}/calculate | CalculateLoyaltyPoints
[**createLoyaltyAccount**](LoyaltyApi.md#createLoyaltyAccount) | **POST** /v2/loyalty/accounts | CreateLoyaltyAccount
[**createLoyaltyReward**](LoyaltyApi.md#createLoyaltyReward) | **POST** /v2/loyalty/rewards | CreateLoyaltyReward
[**deleteLoyaltyReward**](LoyaltyApi.md#deleteLoyaltyReward) | **DELETE** /v2/loyalty/rewards/{reward_id} | DeleteLoyaltyReward
[**listLoyaltyPrograms**](LoyaltyApi.md#listLoyaltyPrograms) | **GET** /v2/loyalty/programs | ListLoyaltyPrograms
[**redeemLoyaltyReward**](LoyaltyApi.md#redeemLoyaltyReward) | **POST** /v2/loyalty/rewards/{reward_id}/redeem | RedeemLoyaltyReward
[**retrieveLoyaltyAccount**](LoyaltyApi.md#retrieveLoyaltyAccount) | **GET** /v2/loyalty/accounts/{account_id} | RetrieveLoyaltyAccount
[**retrieveLoyaltyReward**](LoyaltyApi.md#retrieveLoyaltyReward) | **GET** /v2/loyalty/rewards/{reward_id} | RetrieveLoyaltyReward
[**searchLoyaltyAccounts**](LoyaltyApi.md#searchLoyaltyAccounts) | **POST** /v2/loyalty/accounts/search | SearchLoyaltyAccounts
[**searchLoyaltyEvents**](LoyaltyApi.md#searchLoyaltyEvents) | **POST** /v2/loyalty/events/search | SearchLoyaltyEvents
[**searchLoyaltyRewards**](LoyaltyApi.md#searchLoyaltyRewards) | **POST** /v2/loyalty/rewards/search | SearchLoyaltyRewards


# **accumulateLoyaltyPoints**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\AccumulateLoyaltyPointsResponse accumulateLoyaltyPoints($account_id, $body)

AccumulateLoyaltyPoints

Adds points to a loyalty account.  - If you are using the Orders API to manage orders, you only provide the `order_id`.  The endpoint reads the order to compute points to add to the buyer's account. - If you are not using the Orders API to manage orders,  you first perform a client-side computation to compute the points.   For spend-based and visit-based programs, you can call  `CalculateLoyaltyPoints` to compute the points. For more information,  see [Loyalty Program Overview](/docs/loyalty/overview).  You then provide the points in a request to this endpoint.   For more information, see [Accumulate points](/docs/loyalty-api/overview/#accumulate-points).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$account_id = "account_id_example"; // string | The `loyalty account` ID to which to add the points.
$body = new \SquareConnect\Model\AccumulateLoyaltyPointsRequest(); // \SquareConnect\Model\AccumulateLoyaltyPointsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->accumulateLoyaltyPoints($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->accumulateLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The &#x60;loyalty account&#x60; ID to which to add the points. |
 **body** | [**\SquareConnect\Model\AccumulateLoyaltyPointsRequest**](../Model/AccumulateLoyaltyPointsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\AccumulateLoyaltyPointsResponse**](../Model/AccumulateLoyaltyPointsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adjustLoyaltyPoints**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\AdjustLoyaltyPointsResponse adjustLoyaltyPoints($account_id, $body)

AdjustLoyaltyPoints

Adds points to or subtracts points from a buyer's account.   Use this endpoint only when you need to manually adjust points. Otherwise, in your application flow, you call  [AccumulateLoyaltyPoints](/reference/square/loyalty-api/accumulate-loyalty-points)  to add points when a buyer pays for the purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$account_id = "account_id_example"; // string | The ID of the `loyalty account` in which to adjust the points.
$body = new \SquareConnect\Model\AdjustLoyaltyPointsRequest(); // \SquareConnect\Model\AdjustLoyaltyPointsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->adjustLoyaltyPoints($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->adjustLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The ID of the &#x60;loyalty account&#x60; in which to adjust the points. |
 **body** | [**\SquareConnect\Model\AdjustLoyaltyPointsRequest**](../Model/AdjustLoyaltyPointsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\AdjustLoyaltyPointsResponse**](../Model/AdjustLoyaltyPointsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateLoyaltyPoints**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CalculateLoyaltyPointsResponse calculateLoyaltyPoints($program_id, $body)

CalculateLoyaltyPoints

Calculates the points a purchase earns.  - If you are using the Orders API to manage orders, you provide `order_id` in the request. The  endpoint calculates the points by reading the order. - If you are not using the Orders API to manage orders, you provide the purchase amount in  the request for the endpoint to calculate the points.  An application might call this endpoint to show the points that a buyer can earn with the  specific purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$program_id = "program_id_example"; // string | The `loyalty program` ID, which defines the rules for accruing points.
$body = new \SquareConnect\Model\CalculateLoyaltyPointsRequest(); // \SquareConnect\Model\CalculateLoyaltyPointsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->calculateLoyaltyPoints($program_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->calculateLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**| The &#x60;loyalty program&#x60; ID, which defines the rules for accruing points. |
 **body** | [**\SquareConnect\Model\CalculateLoyaltyPointsRequest**](../Model/CalculateLoyaltyPointsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CalculateLoyaltyPointsResponse**](../Model/CalculateLoyaltyPointsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLoyaltyAccount**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateLoyaltyAccountResponse createLoyaltyAccount($body)

CreateLoyaltyAccount

Creates a loyalty account. For more information, see  [Create a loyalty account](/docs/loyalty-api/overview/#loyalty-overview-create-account).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$body = new \SquareConnect\Model\CreateLoyaltyAccountRequest(); // \SquareConnect\Model\CreateLoyaltyAccountRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createLoyaltyAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->createLoyaltyAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateLoyaltyAccountRequest**](../Model/CreateLoyaltyAccountRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateLoyaltyAccountResponse**](../Model/CreateLoyaltyAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLoyaltyReward**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateLoyaltyRewardResponse createLoyaltyReward($body)

CreateLoyaltyReward

Creates a loyalty reward. In the process, the endpoint does following:  - Uses the `reward_tier_id` in the request to determine the number of points  to lock for this reward.  - If the request includes `order_id`, it adds the reward and related discount to the order.   After a reward is created, the points are locked and  not available for the buyer to redeem another reward.  For more information, see  [Loyalty rewards](/docs/loyalty-api/overview/#loyalty-overview-loyalty-rewards).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$body = new \SquareConnect\Model\CreateLoyaltyRewardRequest(); // \SquareConnect\Model\CreateLoyaltyRewardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createLoyaltyReward($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->createLoyaltyReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\CreateLoyaltyRewardRequest**](../Model/CreateLoyaltyRewardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateLoyaltyRewardResponse**](../Model/CreateLoyaltyRewardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoyaltyReward**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\DeleteLoyaltyRewardResponse deleteLoyaltyReward($reward_id)

DeleteLoyaltyReward

Deletes a loyalty reward by doing the following:  - Returns the loyalty points back to the loyalty account. - If an order ID was specified when the reward was created  (see [CreateLoyaltyReward](/reference/square/loyalty-api/create-loyalty-reward)),  it updates the order by removing the reward and related  discounts.  You cannot delete a reward that has reached the terminal state (REDEEMED).  For more information, see  [Loyalty rewards](/docs/loyalty-api/overview/#loyalty-overview-loyalty-rewards).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$reward_id = "reward_id_example"; // string | The ID of the `loyalty reward` to delete.

try {
    $result = $apiInstance->deleteLoyaltyReward($reward_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->deleteLoyaltyReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The ID of the &#x60;loyalty reward&#x60; to delete. |

### Return type

[**\SquareConnect\Model\DeleteLoyaltyRewardResponse**](../Model/DeleteLoyaltyRewardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLoyaltyPrograms**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListLoyaltyProgramsResponse listLoyaltyPrograms()

ListLoyaltyPrograms

Returns a list of loyalty programs in the seller's account. Currently, a seller can only have one loyalty program. For more information, see  [Loyalty Overview](/docs/loyalty/overview). .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();

try {
    $result = $apiInstance->listLoyaltyPrograms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->listLoyaltyPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\ListLoyaltyProgramsResponse**](../Model/ListLoyaltyProgramsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redeemLoyaltyReward**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RedeemLoyaltyRewardResponse redeemLoyaltyReward($reward_id, $body)

RedeemLoyaltyReward

Redeems a loyalty reward.  The endpoint sets the reward to the terminal state (`REDEEMED`).   If you are using your own order processing system (not using the  Orders API), you call this endpoint after the buyer paid for the  purchase.  After the reward reaches the terminal state, it cannot be deleted.  In other words, points used for the reward cannot be returned  to the account.  For more information, see  [Loyalty rewards](/docs/loyalty-api/overview/#loyalty-overview-loyalty-rewards).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$reward_id = "reward_id_example"; // string | The ID of the `loyalty reward` to redeem.
$body = new \SquareConnect\Model\RedeemLoyaltyRewardRequest(); // \SquareConnect\Model\RedeemLoyaltyRewardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->redeemLoyaltyReward($reward_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->redeemLoyaltyReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The ID of the &#x60;loyalty reward&#x60; to redeem. |
 **body** | [**\SquareConnect\Model\RedeemLoyaltyRewardRequest**](../Model/RedeemLoyaltyRewardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\RedeemLoyaltyRewardResponse**](../Model/RedeemLoyaltyRewardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoyaltyAccount**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveLoyaltyAccountResponse retrieveLoyaltyAccount($account_id)

RetrieveLoyaltyAccount

Retrieves a loyalty account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$account_id = "account_id_example"; // string | The ID of the `loyalty account` to retrieve.

try {
    $result = $apiInstance->retrieveLoyaltyAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->retrieveLoyaltyAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The ID of the &#x60;loyalty account&#x60; to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveLoyaltyAccountResponse**](../Model/RetrieveLoyaltyAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoyaltyReward**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveLoyaltyRewardResponse retrieveLoyaltyReward($reward_id)

RetrieveLoyaltyReward

Retrieves a loyalty reward.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$reward_id = "reward_id_example"; // string | The ID of the `loyalty reward` to retrieve.

try {
    $result = $apiInstance->retrieveLoyaltyReward($reward_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->retrieveLoyaltyReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The ID of the &#x60;loyalty reward&#x60; to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveLoyaltyRewardResponse**](../Model/RetrieveLoyaltyRewardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLoyaltyAccounts**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\SearchLoyaltyAccountsResponse searchLoyaltyAccounts($body)

SearchLoyaltyAccounts

Searches for loyalty accounts.  In the current implementation, you can search for a loyalty account using the phone number associated with the account.  If no phone number is provided, all loyalty accounts are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$body = new \SquareConnect\Model\SearchLoyaltyAccountsRequest(); // \SquareConnect\Model\SearchLoyaltyAccountsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchLoyaltyAccounts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->searchLoyaltyAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchLoyaltyAccountsRequest**](../Model/SearchLoyaltyAccountsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchLoyaltyAccountsResponse**](../Model/SearchLoyaltyAccountsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLoyaltyEvents**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\SearchLoyaltyEventsResponse searchLoyaltyEvents($body)

SearchLoyaltyEvents

Searches for loyalty events.  A Square loyalty program maintains a ledger of events that occur during the lifetime of a  buyer's loyalty account. Each change in the point balance  (for example, points earned, points redeemed, and points expired) is  recorded in the ledger. Using this endpoint, you can search the ledger for events.  For more information, see  [Loyalty events](/docs/loyalty-api/overview/#loyalty-events).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$body = new \SquareConnect\Model\SearchLoyaltyEventsRequest(); // \SquareConnect\Model\SearchLoyaltyEventsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchLoyaltyEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->searchLoyaltyEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchLoyaltyEventsRequest**](../Model/SearchLoyaltyEventsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchLoyaltyEventsResponse**](../Model/SearchLoyaltyEventsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLoyaltyRewards**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\SearchLoyaltyRewardsResponse searchLoyaltyRewards($body)

SearchLoyaltyRewards

Searches for loyalty rewards in a loyalty account.   In the current implementation, the endpoint supports search by the reward `status`.  If you know a reward ID, use the  [RetrieveLoyaltyReward](/reference/square/loyalty-api/retrieve-loyalty-reward) endpoint.  For more information about loyalty rewards, see  [Loyalty Rewards](/docs/loyalty-api/overview/#loyalty-rewards).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\LoyaltyApi();
$body = new \SquareConnect\Model\SearchLoyaltyRewardsRequest(); // \SquareConnect\Model\SearchLoyaltyRewardsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->searchLoyaltyRewards($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->searchLoyaltyRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SquareConnect\Model\SearchLoyaltyRewardsRequest**](../Model/SearchLoyaltyRewardsRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\SearchLoyaltyRewardsResponse**](../Model/SearchLoyaltyRewardsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

