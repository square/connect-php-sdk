# V1Discount

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The discount&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The discount&#39;s name. | [optional] 
**rate** | getRate() | setRate($value) | **string** | The rate of the discount, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. This rate is 0 if discount_type is VARIABLE_PERCENTAGE. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of the discount. This amount is 0 if discount_type is VARIABLE_AMOUNT. This field is not included for rate-based discounts. | [optional] 
**discount_type** | getDiscountType() | setDiscountType($value) | **string** | Indicates whether the discount is a FIXED value or entered at the time of sale. | [optional] 
**pin_required** | getPinRequired() | setPinRequired($value) | **bool** | Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment. | [optional] 
**color** | getColor() | setColor($value) | **string** | The color of the discount&#39;s display label in Square Register, if not the default color. The default color is 9da2a6. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

