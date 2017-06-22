# CatalogTax

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The tax&#39;s name. Searchable. | 
**calculation_phase** | **string** | Whether the tax is calculated based on a payment&#39;s subtotal or total. See [TaxCalculationPhase](#type-taxcalculationphase) for all possible values. | [optional] 
**inclusion_type** | **string** | Whether the tax is &#x60;ADDITIVE&#x60; or &#x60;INCLUSIVE&#x60;. See [TaxInclusionType](#type-taxinclusiontype) for all possible values. | [optional] 
**percentage** | **string** | The percentage of the tax in decimal form, using a &#x60;&#39;.&#39;&#x60; as the decimal separator and without a &#x60;&#39;%&#39;&#x60; sign. A value of &#x60;7.5&#x60; corresponds to 7.5%. | [optional] 
**applies_to_custom_amounts** | **bool** | If &#x60;true&#x60;, the fee applies to custom amounts entered into the Square Point of Sale app that are not associated with a particular [CatalogItem](#type-catalogitem). | [optional] 
**enabled** | **bool** | If &#x60;true&#x60;, the tax will be shown as enabled in the Square Point of Sale app. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


