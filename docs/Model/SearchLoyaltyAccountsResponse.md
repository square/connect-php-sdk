# SearchLoyaltyAccountsResponse

### Description

A response that includes loyalty accounts that satisfy the search criteria.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**loyalty_accounts** | getLoyaltyAccounts() | setLoyaltyAccounts($value) | [**\SquareConnect\Model\LoyaltyAccount[]**](LoyaltyAccount.md) | The loyalty accounts that met the search criteria,   in order of creation date. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | The pagination cursor to use in a subsequent  request. If empty, this is the final response. For more information,  see [Pagination](https://developer.squareup.com/docs/docs/basics/api101/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

