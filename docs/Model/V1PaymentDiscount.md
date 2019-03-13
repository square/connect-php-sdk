# V1PaymentDiscount

### Description

V1PaymentDiscount

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**name** | getName() | setName($value) | **string** | The discount&#39;s name. | [optional] 
**applied_money** | getAppliedMoney() | setAppliedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that this discount adds to the payment (note that this value is always negative or zero). | [optional] 
**discount_id** | getDiscountId() | setDiscountId($value) | **string** | The ID of the applied discount, if available. Discounts applied in older versions of Square Register might not have an ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

