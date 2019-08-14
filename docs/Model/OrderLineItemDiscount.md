# OrderLineItemDiscount

### Description

Represents a discount that applies to one or more line items in an order.  Fixed-amount, order-scoped discounts are distributed across all non-zero line item totals. The amount distributed to each line item is relative to the amount contributed by the item to the order subtotal.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**uid** | getUid() | setUid($value) | **string** | Unique ID that identifies the discount only within this order. | [optional] 
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | The catalog object id referencing [CatalogDiscount](#type-catalogdiscount). | [optional] 
**name** | getName() | setName($value) | **string** | The discount&#39;s name. | [optional] 
**type** | getType() | setType($value) | **string** | The type of the discount. If it is created by API, it would be either &#x60;FIXED_PERCENTAGE&#x60; or &#x60;FIXED_AMOUNT&#x60;.  VARIABLE_* is not supported in API because the order is created at the time of sale and either percentage or amount has to be specified. See [OrderLineItemDiscountType](#type-orderlineitemdiscounttype) for possible values | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | The percentage of the discount, as a string representation of a decimal number. A value of &#x60;7.25&#x60; corresponds to a percentage of 7.25%.  The percentage won&#39;t be set for an amount-based discount. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total declared monetary amount of the discount.  &#x60;amount_money&#x60; is not set for percentage-based discounts. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of discount actually applied to the line item.  Represents the amount of money applied as a line item-scoped discount. When an amount-based discount is scoped to the entire order, the value of &#x60;applied_money&#x60; is different from &#x60;amount_money&#x60; because the total amount of the discount is distributed across all line items. | [optional] 
**scope** | getScope() | setScope($value) | **string** | Indicates the level at which the discount applies. For &#x60;ORDER&#x60; scoped discounts, Square generates references in &#x60;applied_discounts&#x60; on all order line items that do not have them. For &#x60;LINE_ITEM&#x60; scoped discounts, the discount only applies to line items with a discount reference in their &#x60;applied_discounts&#x60; field.  This field is immutable. To change the scope of a discount you must delete the discount and re-add it as a new discount. See [OrderLineItemDiscountScope](#type-orderlineitemdiscountscope) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

