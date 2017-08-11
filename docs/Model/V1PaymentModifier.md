# V1PaymentModifier

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The modifier option&#39;s name. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that this modifier option adds to the payment. | [optional] 
**modifier_option_id** | getModifierOptionId() | setModifierOptionId($value) | **string** | TThe ID of the applied modifier option, if available. Modifier options applied in older versions of Square Register might not have an ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

