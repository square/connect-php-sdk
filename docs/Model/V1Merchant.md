# V1Merchant

### Description

Defines the fields that are included in the response body of a request to the **RetrieveBusiness** endpoint.
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The merchant account&#39;s unique identifier. | [optional] 
**name** | getName() | setName($value) | **string** | The name associated with the merchant account. | [optional] 
**email** | getEmail() | setEmail($value) | **string** | The email address associated with the merchant account. | [optional] 
**account_type** | getAccountType() | setAccountType($value) | **string** | Indicates whether the merchant account corresponds to a single-location account (LOCATION) or a business account (BUSINESS). This value is almost always LOCATION. See [V1MerchantAccountType](#type-v1merchantaccounttype) for possible values | [optional] 
**account_capabilities** | getAccountCapabilities() | setAccountCapabilities($value) | **string[]** | Capabilities that are enabled for the merchant&#39;s Square account. Capabilities that are not listed in this array are not enabled for the account. | [optional] 
**country_code** | getCountryCode() | setCountryCode($value) | **string** | The country associated with the merchant account, in ISO 3166-1-alpha-2 format. | [optional] 
**language_code** | getLanguageCode() | setLanguageCode($value) | **string** | The language associated with the merchant account, in BCP 47 format. | [optional] 
**currency_code** | getCurrencyCode() | setCurrencyCode($value) | **string** | The currency associated with the merchant account, in ISO 4217 format. For example, the currency code for US dollars is USD. | [optional] 
**business_name** | getBusinessName() | setBusinessName($value) | **string** | The name of the merchant&#39;s business. | [optional] 
**business_address** | getBusinessAddress() | setBusinessAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The address of the merchant&#39;s business. | [optional] 
**business_phone** | getBusinessPhone() | setBusinessPhone($value) | [**\SquareConnect\Model\V1PhoneNumber**](V1PhoneNumber.md) | The phone number of the merchant&#39;s business. | [optional] 
**business_type** | getBusinessType() | setBusinessType($value) | **string** | The type of business operated by the merchant. See [V1MerchantBusinessType](#type-v1merchantbusinesstype) for possible values | [optional] 
**shipping_address** | getShippingAddress() | setShippingAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The merchant&#39;s shipping address. | [optional] 
**location_details** | getLocationDetails() | setLocationDetails($value) | [**\SquareConnect\Model\V1MerchantLocationDetails**](V1MerchantLocationDetails.md) | Additional information for a single-location account specified by its associated business account, if it has one. | [optional] 
**market_url** | getMarketUrl() | setMarketUrl($value) | **string** | The URL of the merchant&#39;s online store. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

