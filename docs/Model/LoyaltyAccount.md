# LoyaltyAccount

### Description

Describes a loyalty account. For more information, see  [Loyalty Overview](/docs/loyalty/overview).

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-assigned ID of the loyalty account. | [optional] 
**mappings** | getMappings() | setMappings($value) | [**\SquareConnect\Model\LoyaltyAccountMapping[]**](LoyaltyAccountMapping.md) | The list of mappings that the account is associated with.  Currently, a buyer can only be mapped to a loyalty account using  a phone number. Therefore, the list can only have one mapping. | 
**program_id** | getProgramId() | setProgramId($value) | **string** | The Square-assigned ID of the &#x60;loyalty program&#x60; to which the account belongs. | 
**balance** | getBalance() | setBalance($value) | **int** | The available point balance in the loyalty account. | [optional] 
**lifetime_points** | getLifetimePoints() | setLifetimePoints($value) | **int** | The total points accrued during the lifetime of the account. | [optional] 
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | The Square-assigned ID of the &#x60;customer&#x60; that is associated with the account. | [optional] 
**enrolled_at** | getEnrolledAt() | setEnrolledAt($value) | **string** | The timestamp when enrollment occurred, in RFC 3339 format. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The timestamp when the loyalty account was created, in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | The timestamp when the loyalty account was last updated, in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

