# ListBankAccountsResponse

### Description

Response object returned by ListBankAccounts.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 
**bank_accounts** | getBankAccounts() | setBankAccounts($value) | [**\SquareConnect\Model\BankAccount[]**](BankAccount.md) | List of BankAccounts associated with this account. | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | When a response is truncated, it includes a cursor that you can  use in a subsequent request to fetch next set of bank accounts. If empty, this is the final response.  For more information, see [Pagination](https://developer.squareup.com/docs/docs/working-with-apis/pagination). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

