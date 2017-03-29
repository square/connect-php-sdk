# V1PaymentTax

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\SquareConnect\Model\Error[]**](Error.md) | Any errors that occurred during the request. | [optional] 
**name** | **string** | The merchant-defined name of the tax. | [optional] 
**applied_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that this tax adds to the payment. | [optional] 
**rate** | **string** | The rate of the tax, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. | [optional] 
**inclusion_type** | **string** | Whether the tax is an ADDITIVE tax or an INCLUSIVE tax. | [optional] 
**fee_id** | **string** | The ID of the tax, if available. Taxes applied in older versions of Square Register might not have an ID. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


