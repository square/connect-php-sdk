# ProcessingFee

### Description

Represents Square processing fee.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**effective_at** | getEffectiveAt() | setEffectiveAt($value) | **string** | Timestamp of when the fee takes effect, in RFC 3339 format. | [optional] 
**type** | getType() | setType($value) | **string** | The type of fee assessed or adjusted. Can be one of: &#x60;INITIAL&#x60;, &#x60;ADJUSTMENT&#x60;. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The fee amount assessed or adjusted by Square. May be negative.  Positive values represent funds being assessed, while negative values represent funds being returned. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

