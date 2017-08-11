# V1Fee

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The fee&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The fee&#39;s name. | [optional] 
**rate** | getRate() | setRate($value) | **string** | The rate of the fee, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. | [optional] 
**calculation_phase** | getCalculationPhase() | setCalculationPhase($value) | **string** | Forthcoming | [optional] 
**adjustment_type** | getAdjustmentType() | setAdjustmentType($value) | **string** | The type of adjustment the fee applies to a payment. Currently, this value is TAX for all fees. | [optional] 
**applies_to_custom_amounts** | getAppliesToCustomAmounts() | setAppliesToCustomAmounts($value) | **bool** | If true, the fee applies to custom amounts entered into Square Register that are not associated with a particular item. | [optional] 
**enabled** | getEnabled() | setEnabled($value) | **bool** | If true, the fee is applied to all appropriate items. If false, the fee is not applied at all. | [optional] 
**inclusion_type** | getInclusionType() | setInclusionType($value) | **string** | Whether the fee is ADDITIVE or INCLUSIVE. | [optional] 
**type** | getType() | setType($value) | **string** | In countries with multiple classifications for sales taxes, indicates which classification the fee falls under. Currently relevant only to Canadian merchants. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

