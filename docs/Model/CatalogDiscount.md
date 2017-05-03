# CatalogDiscount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The discount&#39;s name. Searchable. | 
**discount_type** | **string** | Indicates whether the discount is a fixed amount or percentage, or entered at the time of sale. See [CatalogDiscountType](#type-catalogdiscounttype) for all possible values. | [optional] 
**percentage** | **string** | The percentage of the discount as a string representation of a decimal number, using a &#x60;.&#x60; as the decimal separator and without a &#x60;%&#x60; sign. A value of &#x60;7.5&#x60; corresponds to &#x60;7.5%&#x60;. Specify a percentage of &#x60;0&#x60; if &#x60;discount_type&#x60; is &#x60;VARIABLE_PERCENTAGE&#x60;.  Do not include this field for amount-based or variable discounts. | [optional] 
**amount_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of the discount. Specify an amount of &#x60;0&#x60; if &#x60;discount_type&#x60; is &#x60;VARIABLE_AMOUNT&#x60;.  Do not include this field for percentage-based or variable discounts. | [optional] 
**pin_required** | **bool** | Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment in the Square Point of Sale app. | [optional] 
**label_color** | **string** | The color of the discount&#39;s display label in the Square Point of Sale app. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


