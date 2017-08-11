# V1Tender

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The tender&#39;s unique ID. | [optional] 
**type** | getType() | setType($value) | **string** | The type of tender. | [optional] 
**name** | getName() | setName($value) | **string** | A human-readable description of the tender. | [optional] 
**employee_id** | getEmployeeId() | setEmployeeId($value) | **string** | The ID of the employee that processed the tender. | [optional] 
**receipt_url** | getReceiptUrl() | setReceiptUrl($value) | **string** | The URL of the receipt for the tender. | [optional] 
**card_brand** | getCardBrand() | setCardBrand($value) | **string** | The brand of credit card provided. | [optional] 
**pan_suffix** | getPanSuffix() | setPanSuffix($value) | **string** | The last four digits of the provided credit card&#39;s account number. | [optional] 
**entry_method** | getEntryMethod() | setEntryMethod($value) | **string** | The tender&#39;s unique ID. | [optional] 
**payment_note** | getPaymentNote() | setPaymentNote($value) | **string** | Notes entered by the merchant about the tender at the time of payment, if any. Typically only present for tender with the type: OTHER. | [optional] 
**total_money** | getTotalMoney() | setTotalMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total amount of money provided in this form of tender. | [optional] 
**tendered_money** | getTenderedMoney() | setTenderedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of total_money applied to the payment. | [optional] 
**change_back_money** | getChangeBackMoney() | setChangeBackMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of total_money returned to the buyer as change. | [optional] 
**refunded_money** | getRefundedMoney() | setRefundedMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all refunds applied to this tender. This amount is always negative or zero. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

