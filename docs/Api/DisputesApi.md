# SquareConnect\DisputesApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptDispute**](DisputesApi.md#acceptDispute) | **POST** /v2/disputes/{dispute_id}/accept | AcceptDispute
[**createDisputeEvidenceText**](DisputesApi.md#createDisputeEvidenceText) | **POST** /v2/disputes/{dispute_id}/evidence_text | CreateDisputeEvidenceText
[**listDisputeEvidence**](DisputesApi.md#listDisputeEvidence) | **GET** /v2/disputes/{dispute_id}/evidence | ListDisputeEvidence
[**listDisputes**](DisputesApi.md#listDisputes) | **GET** /v2/disputes | ListDisputes
[**removeDisputeEvidence**](DisputesApi.md#removeDisputeEvidence) | **DELETE** /v2/disputes/{dispute_id}/evidence/{evidence_id} | RemoveDisputeEvidence
[**retrieveDispute**](DisputesApi.md#retrieveDispute) | **GET** /v2/disputes/{dispute_id} | RetrieveDispute
[**retrieveDisputeEvidence**](DisputesApi.md#retrieveDisputeEvidence) | **GET** /v2/disputes/{dispute_id}/evidence/{evidence_id} | RetrieveDisputeEvidence
[**submitEvidence**](DisputesApi.md#submitEvidence) | **POST** /v2/disputes/{dispute_id}/submit-evidence | SubmitEvidence


# **acceptDispute**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\AcceptDisputeResponse acceptDispute($dispute_id)

AcceptDispute

Accepts loss on a dispute. Square returns the disputed amount to the cardholder and updates the dispute state to ACCEPTED.  Square debits the disputed amount from the seller’s Square account. If the Square account balance does not have sufficient funds, Square debits the associated bank account. For an overview of the Disputes API, see [Overview](/docs/disputes-api/overview).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | ID of the dispute you want to accept.

try {
    $result = $apiInstance->acceptDispute($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->acceptDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| ID of the dispute you want to accept. |

### Return type

[**\SquareConnect\Model\AcceptDisputeResponse**](../Model/AcceptDisputeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDisputeEvidenceText**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\CreateDisputeEvidenceTextResponse createDisputeEvidenceText($dispute_id, $body)

CreateDisputeEvidenceText

Uploads text to use as evidence for a dispute challenge. For more information, see [Challenge a Dispute](/docs/disputes-api/process-disputes#challenge-a-dispute).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute you want to upload evidence for.
$body = new \SquareConnect\Model\CreateDisputeEvidenceTextRequest(); // \SquareConnect\Model\CreateDisputeEvidenceTextRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $apiInstance->createDisputeEvidenceText($dispute_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->createDisputeEvidenceText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute you want to upload evidence for. |
 **body** | [**\SquareConnect\Model\CreateDisputeEvidenceTextRequest**](../Model/CreateDisputeEvidenceTextRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateDisputeEvidenceTextResponse**](../Model/CreateDisputeEvidenceTextResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDisputeEvidence**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListDisputeEvidenceResponse listDisputeEvidence($dispute_id)

ListDisputeEvidence

Returns a list of evidence associated with a dispute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute.

try {
    $result = $apiInstance->listDisputeEvidence($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->listDisputeEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute. |

### Return type

[**\SquareConnect\Model\ListDisputeEvidenceResponse**](../Model/ListDisputeEvidenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDisputes**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\ListDisputesResponse listDisputes($cursor, $states, $location_id)

ListDisputes

Returns a list of disputes associated with a particular account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$cursor = "cursor_example"; // string | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query. For more information, see [Paginating](https://developer.squareup.com/docs/basics/api101/pagination).
$states = "states_example"; // string | The dispute states to filter the result. If not specified, the endpoint returns all open disputes (dispute status is not `INQUIRY_CLOSED`, `WON`, or `LOST`).
$location_id = "location_id_example"; // string | The ID of the location for which to return  a list of disputes. If not specified, the endpoint returns all open disputes (dispute status is not `INQUIRY_CLOSED`, `WON`, or  `LOST`) associated with all locations.

try {
    $result = $apiInstance->listDisputes($cursor, $states, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->listDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query. For more information, see [Paginating](https://developer.squareup.com/docs/basics/api101/pagination). | [optional]
 **states** | **string**| The dispute states to filter the result. If not specified, the endpoint returns all open disputes (dispute status is not &#x60;INQUIRY_CLOSED&#x60;, &#x60;WON&#x60;, or &#x60;LOST&#x60;). | [optional]
 **location_id** | **string**| The ID of the location for which to return  a list of disputes. If not specified, the endpoint returns all open disputes (dispute status is not &#x60;INQUIRY_CLOSED&#x60;, &#x60;WON&#x60;, or  &#x60;LOST&#x60;) associated with all locations. | [optional]

### Return type

[**\SquareConnect\Model\ListDisputesResponse**](../Model/ListDisputesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDisputeEvidence**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RemoveDisputeEvidenceResponse removeDisputeEvidence($dispute_id, $evidence_id)

RemoveDisputeEvidence

Removes specified evidence from a dispute.  Square does not send the bank any evidence that is removed. Also, you cannot remove evidence after submitting it to the bank using [SubmitEvidence](/reference/square/disputes-api/submit-evidence).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute you want to remove evidence from.
$evidence_id = "evidence_id_example"; // string | The ID of the evidence you want to remove.

try {
    $result = $apiInstance->removeDisputeEvidence($dispute_id, $evidence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->removeDisputeEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute you want to remove evidence from. |
 **evidence_id** | **string**| The ID of the evidence you want to remove. |

### Return type

[**\SquareConnect\Model\RemoveDisputeEvidenceResponse**](../Model/RemoveDisputeEvidenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDispute**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveDisputeResponse retrieveDispute($dispute_id)

RetrieveDispute

Returns details of a specific dispute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute you want more details about.

try {
    $result = $apiInstance->retrieveDispute($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->retrieveDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute you want more details about. |

### Return type

[**\SquareConnect\Model\RetrieveDisputeResponse**](../Model/RetrieveDisputeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDisputeEvidence**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\RetrieveDisputeEvidenceResponse retrieveDisputeEvidence($dispute_id, $evidence_id)

RetrieveDisputeEvidence

Returns the specific evidence metadata associated with a specific dispute.  You must maintain a copy of the evidence you upload if you want to reference it later. You cannot download the evidence after you upload it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute that you want to retrieve evidence from.
$evidence_id = "evidence_id_example"; // string | The ID of the evidence to retrieve.

try {
    $result = $apiInstance->retrieveDisputeEvidence($dispute_id, $evidence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->retrieveDisputeEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute that you want to retrieve evidence from. |
 **evidence_id** | **string**| The ID of the evidence to retrieve. |

### Return type

[**\SquareConnect\Model\RetrieveDisputeEvidenceResponse**](../Model/RetrieveDisputeEvidenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitEvidence**
**Note: This endpoint is in beta.**
> \SquareConnect\Model\SubmitEvidenceResponse submitEvidence($dispute_id)

SubmitEvidence

Submits evidence to the cardholder's bank.  Before submitting evidence, Square compiles all available evidence. This includes evidence uploaded using the [CreateDisputeEvidenceFile](/reference/square/disputes-api/create-dispute-evidence-file) and [CreateDisputeEvidenceText](/reference/square/disputes-api/create-dispute-evidence-text) endpoints, and evidence automatically provided by Square, when available. For more information, see [Challenge a Dispute](/docs/disputes-api/process-disputes#challenge-a-dispute).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SquareConnect\Api\DisputesApi();
$dispute_id = "dispute_id_example"; // string | The ID of the dispute you want to submit evidence for.

try {
    $result = $apiInstance->submitEvidence($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->submitEvidence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | **string**| The ID of the dispute you want to submit evidence for. |

### Return type

[**\SquareConnect\Model\SubmitEvidenceResponse**](../Model/SubmitEvidenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

