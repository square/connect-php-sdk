# CatalogDiscount

### Description

A discount in the Catalog object model.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The discount name. Searchable. This field has max length of 255 Unicode code points. | [optional] 
**discount_type** | getDiscountType() | setDiscountType($value) | **string** | Indicates whether the discount is a fixed amount or percentage, or entered at the time of sale. See [CatalogDiscountType](#type-catalogdiscounttype) for possible values | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | The percentage of the discount as a string representation of a decimal number, using a &#x60;.&#x60; as the decimal separator and without a &#x60;%&#x60; sign. A value of &#x60;7.5&#x60; corresponds to &#x60;7.5%&#x60;. Specify a percentage of &#x60;0&#x60; if &#x60;discount_type&#x60; is &#x60;VARIABLE_PERCENTAGE&#x60;.  Do not include this field for amount-based or variable discounts. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of the discount. Specify an amount of &#x60;0&#x60; if &#x60;discount_type&#x60; is &#x60;VARIABLE_AMOUNT&#x60;.  Do not include this field for percentage-based or variable discounts. | [optional] 
**pin_required** | getPinRequired() | setPinRequired($value) | **bool** | Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment in the Square Point of Sale app. | [optional] 
**label_color** | getLabelColor() | setLabelColor($value) | **string** | The color of the discount display label in the Square Point of Sale app. This must be a valid hex color code. | [optional] 
**modify_tax_basis** | getModifyTaxBasis() | setModifyTaxBasis($value) | **string** | Indicates whether this discount should reduce the price used to calculate tax.  Most discounts should use &#x60;MODIFY_TAX_BASIS&#x60;. However, in some circumstances taxes must be calculated based on an item&#39;s price, ignoring a particular discount. For example, in many US jurisdictions, a manufacturer coupon or instant rebate reduces the price a customer pays but does not reduce the sale price used to calculate how much sales tax is due. In this case, the discount representing that manufacturer coupon should have &#x60;DO_NOT_MODIFY_TAX_BASIS&#x60; for this field.  If you are unsure whether you need to use this field, consult your tax professional. See [CatalogDiscountModifyTaxBasis](#type-catalogdiscountmodifytaxbasis) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

