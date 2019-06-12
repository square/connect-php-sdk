# OrderServiceCharge

### Description

Represents a service charge applied to an order.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**uid** | getUid() | setUid($value) | **string** | Unique ID that identifies the service charge only within this order.  This field is read-only. | [optional] 
**name** | getName() | setName($value) | **string** | The name of the service charge. | [optional] 
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The catalog object ID referencing the service charge [CatalogObject](#type-catalogobject). | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | The service charge percentage, as a string representation of a decimal number.  For example, &#x60;7.25&#x60; indicates 7.25%  Exactly one of &#x60;percentage&#x60; or &#x60;amount_money&#x60; should be set. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of a non-percentage based service charge.  Exactly one of &#x60;percentage&#x60; or &#x60;amount_money&#x60; should be set. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money applied to the order by the service charge, as calculated by the server.  For fixed-amount service charges, &#x60;applied_money&#x60; is equal to &#x60;amount_money&#x60;.  For percentage-based service charges, &#x60;applied_money&#x60; is the money calculated using the percentage. The &#x60;applied_money&#x60; field will include any inclusive tax amounts as well.  This field is read-only. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for the service charge.  Note that &#x60;total_money&#x60; does not equal &#x60;applied_money&#x60; plus &#x60;total_tax_money&#x60; if an inclusive tax is applied to the service charge since the inclusive tax amount will be included in both &#x60;applied_money&#x60; and &#x60;total_tax_money&#x60;.  This field is read-only. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of tax money to collect for the service charge.  This field is read-only. | [optional] 
**calculation_phase** | getCalculationPhase() | setCalculationPhase($value) | **string** | The calculation phase at which to apply the service charge. See [OrderServiceChargeCalculationPhase](#type-orderservicechargecalculationphase) for possible values | [optional] 
**taxable** | getTaxable() | setTaxable($value) | **bool** | Indicates whether the service charge can be taxed. If set to &#x60;true&#x60;, any order-level taxes will automatically apply to this service charge. Note that service charges calculated in the &#x60;TOTAL_PHASE&#x60; cannot be marked as taxable. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\OrderLineItemTax[]**](OrderLineItemTax.md) | Taxes applied to the service charge. By default, order-level taxes apply to service charges calculated in the &#x60;SUBTOTAL_PHASE&#x60; if &#x60;taxable&#x60; is set to &#x60;true&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

