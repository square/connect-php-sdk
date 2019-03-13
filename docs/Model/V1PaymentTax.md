# V1PaymentTax

### Description

V1PaymentTax

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**name** | getName() | setName($value) | **string** | The merchant-defined name of the tax. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that this tax adds to the payment. | [optional] 
**rate** | getRate() | setRate($value) | **string** | The rate of the tax, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. | [optional] 
**inclusion_type** | getInclusionType() | setInclusionType($value) | **string** | Whether the tax is an ADDITIVE tax or an INCLUSIVE tax. See [V1PaymentTaxInclusionType](#type-v1paymenttaxinclusiontype) for possible values | [optional] 
**fee_id** | getFeeId() | setFeeId($value) | **string** | The ID of the tax, if available. Taxes applied in older versions of Square Register might not have an ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

