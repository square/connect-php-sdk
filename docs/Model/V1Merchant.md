# V1Merchant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The merchant account&#39;s unique identifier. | [optional] 
**name** | **string** | The name associated with the merchant account. | [optional] 
**email** | **string** | The email address associated with the merchant account. | [optional] 
**account_type** | **string** | Indicates whether the merchant account corresponds to a single-location account (LOCATION) or a business account (BUSINESS). This value is almost always LOCATION. | [optional] 
**account_capabilities** | **string[]** | Capabilities that are enabled for the merchant&#39;s Square account. Capabilities that are not listed in this array are not enabled for the account. | [optional] 
**country_code** | **string** | The country associated with the merchant account, in ISO 3166-1-alpha-2 format. | [optional] 
**language_code** | **string** | The language associated with the merchant account, in BCP 47 format. | [optional] 
**currency_code** | **string** | The currency associated with the merchant account, in ISO 4217 format. For example, the currency code for US dollars is USD. | [optional] 
**business_name** | **string** | The name of the merchant&#39;s business. | [optional] 
**business_address** | [**\SquareConnect\Model\Address**](Address.md) | The address of the merchant&#39;s business. | [optional] 
**business_phone** | [**\SquareConnect\Model\V1PhoneNumber**](V1PhoneNumber.md) | The phone number of the merchant&#39;s business. | [optional] 
**business_type** | **string** | The type of business operated by the merchant. | [optional] 
**shipping_address_** | [**\SquareConnect\Model\Address**](Address.md) | The merchant&#39;s shipping address. | [optional] 
**location_details** | [**\SquareConnect\Model\V1MerchantLocationDetails**](V1MerchantLocationDetails.md) |  | [optional] 
**market_url** | **string** | The URL of the merchant&#39;s online store. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


