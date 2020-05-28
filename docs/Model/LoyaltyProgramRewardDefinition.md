# LoyaltyProgramRewardDefinition

### Description

Provides details about the loyalty program reward tier definition.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**scope** | getScope() | setScope($value) | **string** | Indicates the scope of the reward tier. See [LoyaltyProgramRewardDefinitionScope](#type-loyaltyprogramrewarddefinitionscope) for possible values | 
**discount_type** | getDiscountType() | setDiscountType($value) | **string** | The type of discount the reward tier offers. See [LoyaltyProgramRewardDefinitionType](#type-loyaltyprogramrewarddefinitiontype) for possible values | 
**percentage_discount** | getPercentageDiscount() | setPercentageDiscount($value) | **string** | Present if &#x60;discount_type&#x60; is &#x60;FIXED_PERCENTAGE&#x60;. For example, a 7.25% off discount will be represented as \&quot;7.25\&quot;. | [optional] 
**catalog_object_ids** | getCatalogObjectIds() | setCatalogObjectIds($value) | **string[]** | A list of &#x60;catalog object&#x60; ids to which this reward can be applied. They are either all item-variation ids or category ids, depending on the &#x60;type&#x60; field. | [optional] 
**fixed_discount_money** | getFixedDiscountMoney() | setFixedDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | Present if &#x60;discount_type&#x60; is &#x60;FIXED_AMOUNT&#x60;. For example, $5 off. | [optional] 
**max_discount_money** | getMaxDiscountMoney() | setMaxDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | When &#x60;discount_type&#x60; is &#x60;FIXED_PERCENTAGE&#x60;, the maximum discount amount that can be applied. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

