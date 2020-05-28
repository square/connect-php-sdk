# LoyaltyAccountMapping

### Description

Associates a loyalty account with the buyer's phone number. or more information, see  [Loyalty Overview](/docs/loyalty/overview).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-assigned ID of the mapping. | [optional] 
**type** | getType() | setType($value) | **string** | The type of mapping. See [LoyaltyAccountMappingType](#type-loyaltyaccountmappingtype) for possible values | 
**value** | getValue() | setValue($value) | **string** | The phone number, in E.164 format. For example, \&quot;+14155551111\&quot;. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the mapping was created, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

