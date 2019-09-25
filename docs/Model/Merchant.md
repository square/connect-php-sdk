# Merchant

### Description

Represents a Square seller.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-issued ID of the merchant. | [optional] 
**business_name** | getBusinessName() | setBusinessName($value) | **string** | The business name of the merchant. | [optional] 
**country** | getCountry() | setCountry($value) | **string** | The country code associated with the merchant account, in ISO 3166-1-alpha-2 format. See [Country](#type-country) for possible values | 
**language_code** | getLanguageCode() | setLanguageCode($value) | **string** | The language code associated with the merchant account, in BCP 47 format. | [optional] 
**currency** | getCurrency() | setCurrency($value) | **string** | The currency associated with the merchant account, in ISO 4217 format. See [Currency](#type-currency) for possible values | [optional] 
**status** | getStatus() | setStatus($value) | **string** | The merchant status, active or inactive. See [MerchantStatus](#type-merchantstatus) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

