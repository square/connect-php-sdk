# Order

### Description

Contains all information related to a single order to process with Square, including line items that specify the products to purchase. Order objects also include information on any associated tenders, refunds, and returns.  All Connect V2 Transactions have all been converted to Orders including all associated itemization data.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The order&#39;s unique ID.  This field is read-only. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the merchant location this order is associated with. | 
**reference_id** | getReferenceId() | setReferenceId($value) | **string** | A client specified identifier to associate an entity in another system with this order. | [optional] 
**source** | getSource() | setSource($value) | [**\SquareConnect\Model\OrderSource**](OrderSource.md) | The origination details of the order. | [optional] 
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | The [Customer](#type-customer) ID of the customer associated with the order. | [optional] 
**line_items** | getLineItems() | setLineItems($value) | [**\SquareConnect\Model\OrderLineItem[]**](OrderLineItem.md) | The line items included in the order. | [optional] 
**taxes** | getTaxes() | setTaxes($value) | [**\SquareConnect\Model\OrderLineItemTax[]**](OrderLineItemTax.md) | A list of taxes applied to this order. On read or retrieve, this list includes both order-level and item-level taxes. When creating an Order, set your order-level taxes in this list. | [optional] 
**discounts** | getDiscounts() | setDiscounts($value) | [**\SquareConnect\Model\OrderLineItemDiscount[]**](OrderLineItemDiscount.md) | A list of discounts applied to this order. On read or retrieve, this list includes both order-level and item-level discounts. When creating an Order, set your order-level discounts in this list. | [optional] 
**service_charges** | getServiceCharges() | setServiceCharges($value) | [**\SquareConnect\Model\OrderServiceCharge[]**](OrderServiceCharge.md) | A list of service charges applied to the order. | [optional] 
**fulfillments** | getFulfillments() | setFulfillments($value) | [**\SquareConnect\Model\OrderFulfillment[]**](OrderFulfillment.md) | Details on order fulfillment.  Orders can only be created with at most one fulfillment. However, orders returned by the API may contain multiple fulfillments. | [optional] 
**returns** | getReturns() | setReturns($value) | [**\SquareConnect\Model\OrderReturn[]**](OrderReturn.md) | Collection of items from sale Orders being returned in this one. Normally part of an Itemized Return or Exchange.  There will be exactly one &#x60;Return&#x60; object per sale Order being referenced.  This field is read-only. | [optional] 
**return_amounts** | getReturnAmounts() | setReturnAmounts($value) | [**\SquareConnect\Model\OrderMoneyAmounts**](OrderMoneyAmounts.md) | Rollup of returned money amounts.  This field is read-only. | [optional] 
**net_amounts** | getNetAmounts() | setNetAmounts($value) | [**\SquareConnect\Model\OrderMoneyAmounts**](OrderMoneyAmounts.md) | Net money amounts (sale money - return money).  This field is read-only. | [optional] 
**rounding_adjustment** | getRoundingAdjustment() | setRoundingAdjustment($value) | [**\SquareConnect\Model\OrderRoundingAdjustment**](OrderRoundingAdjustment.md) | A positive or negative rounding adjustment to the total of the order, commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency.  This field is read-only. | [optional] 
**tenders** | getTenders() | setTenders($value) | [**\SquareConnect\Model\Tender[]**](Tender.md) | The Tenders which were used to pay for the Order. This field is read-only. | [optional] 
**refunds** | getRefunds() | setRefunds($value) | [**\SquareConnect\Model\Refund[]**](Refund.md) | The Refunds that are part of this Order. This field is read-only. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | Timestamp for when the order was created. In RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;.  This field is read-only. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | Timestamp for when the order was last updated. In RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;.  This field is read-only. | [optional] 
**closed_at** | getClosedAt() | setClosedAt($value) | **string** | Timestamp for when the order was closed. In RFC 3339 format, e.g., \&quot;2016-09-04T23:59:33.123Z\&quot;.  This field is read-only. | [optional] 
**state** | getState() | setState($value) | **string** | The current state of the order. &#x60;OPEN&#x60;,&#x60;COMPLETED&#x60;,&#x60;CANCELED&#x60; See [OrderState](#type-orderstate) for possible values | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money to collect for the order.  This field is read-only. | [optional] 
**total_tax_money** | getTotalTaxMoney() | setTotalTaxMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total tax amount of money to collect for the order.  This field is read-only. | [optional] 
**total_discount_money** | getTotalDiscountMoney() | setTotalDiscountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total discount amount of money to collect for the order.  This field is read-only. | [optional] 
**total_service_charge_money** | getTotalServiceChargeMoney() | setTotalServiceChargeMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of money collected in service charges for the order.  Note: &#x60;total_service_charge_money&#x60; is the sum of &#x60;applied_money&#x60; fields for each individual service charge. Therefore, &#x60;total_service_charge_money&#x60; will only include inclusive tax amounts, not additive tax amounts.  This field is read-only. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

