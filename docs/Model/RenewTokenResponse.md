# RenewTokenResponse

### Description


**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**access_token** | getAccessToken() | setAccessToken($value) | **string** | The renewed access token. This value might be different from the &#x60;access_token&#x60; you provided in your request. You provide this token in a header with every request to Connect API endpoints. See [Request and response headers](https://developer.squareup.com/docs/api/connect/v2/#requestandresponseheaders) for the format of this header. | [optional] 
**token_type** | getTokenType() | setTokenType($value) | **string** | This value is always _bearer_. | [optional] 
**expires_at** | getExpiresAt() | setExpiresAt($value) | **string** | The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** | The ID of the authorizing merchant&#39;s business. | [optional] 
**subscription_id** | getSubscriptionId() | setSubscriptionId($value) | **string** | __LEGACY FIELD__. The ID of the merchant subscription associated with the authorization. Only present if the merchant signed up for a subscription during authorization.. | [optional] 
**plan_id** | getPlanId() | setPlanId($value) | **string** | __LEGACY FIELD__. The ID of the subscription plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

