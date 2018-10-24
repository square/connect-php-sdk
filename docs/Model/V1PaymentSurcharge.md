# V1PaymentSurcharge

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The name of the surcharge. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money applied to the order as a result of the surcharge. | [optional] 
**rate** | getRate() | setRate($value) | **string** | The amount of the surcharge as a percentage. The percentage is provided as a string representing the decimal equivalent of the percentage. For example, \&quot;0.7\&quot; corresponds to a 7% surcharge. Exactly one of rate or amount_money should be set. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of the surcharge as a Money object. Exactly one of rate or amount_money should be set. | [optional] 
**type** | getType() | setType($value) | **string** | Indicates the source of the surcharge. For example, if it was applied as an automatic gratuity for a large group. | [optional] 
**taxable** | getTaxable() | setTaxable($value) | **bool** | Indicates whether the surcharge is taxable. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\V1PaymentTax[]**](V1PaymentTax.md) | The list of taxes that should be applied to the surcharge. | [optional] 
**surcharge_id** | getSurchargeId() | setSurchargeId($value) | **string** | A Square-issued unique identifier associated with the surcharge. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

