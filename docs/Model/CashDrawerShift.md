# CashDrawerShift

### Description

This model gives the details of a cash drawer shift. The cash_payment_money, cash_refund_money, cash_paid_in_money, and cash_paid_out_money fields are all computed by summing their respective event types.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The shift unique ID. | [optional] 
**state** | getState() | setState($value) | **string** | The shift current state. See [CashDrawerShiftState](#type-cashdrawershiftstate) for possible values | [optional] 
**opened_at** | getOpenedAt() | setOpenedAt($value) | **string** | The time when the shift began, in ISO 8601 format. | [optional] 
**ended_at** | getEndedAt() | setEndedAt($value) | **string** | The time when the shift ended, in ISO 8601 format. | [optional] 
**closed_at** | getClosedAt() | setClosedAt($value) | **string** | The time when the shift was closed, in ISO 8601 format. | [optional] 
**employee_ids** | getEmployeeIds() | setEmployeeIds($value) | **string[]** | The IDs of all employees that were logged into Square Point of Sale at any point while the cash drawer shift was open. | [optional] 
**opening_employee_id** | getOpeningEmployeeId() | setOpeningEmployeeId($value) | **string** | The ID of the employee that started the cash drawer shift. | [optional] 
**ending_employee_id** | getEndingEmployeeId() | setEndingEmployeeId($value) | **string** | The ID of the employee that ended the cash drawer shift. | [optional] 
**closing_employee_id** | getClosingEmployeeId() | setClosingEmployeeId($value) | **string** | The ID of the employee that closed the cash drawer shift by auditing the cash drawer contents. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The free-form text description of a cash drawer by an employee. | [optional] 
**opened_cash_money** | getOpenedCashMoney() | setOpenedCashMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money in the cash drawer at the start of the shift. The amount must be greater than or equal to zero. | [optional] 
**cash_payment_money** | getCashPaymentMoney() | setCashPaymentMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money added to the cash drawer from cash payments. This is computed by summing all events with the types CASH_TENDER_PAYMENT and CASH_TENDER_CANCELED_PAYMENT. The amount is always greater than or equal to zero. | [optional] 
**cash_refunds_money** | getCashRefundsMoney() | setCashRefundsMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money removed from the cash drawer from cash refunds. It is computed by summing the events of type CASH_TENDER_REFUND. The amount is always greater than or equal to zero. | [optional] 
**cash_paid_in_money** | getCashPaidInMoney() | setCashPaidInMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money added to the cash drawer for reasons other than cash payments. It is computed by summing the events of type PAID_IN. The amount is always greater than or equal to zero. | [optional] 
**cash_paid_out_money** | getCashPaidOutMoney() | setCashPaidOutMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money removed from the cash drawer for reasons other than cash refunds. It is computed by summing the events of type PAID_OUT. The amount is always greater than or equal to zero. | [optional] 
**expected_cash_money** | getExpectedCashMoney() | setExpectedCashMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money that should be in the cash drawer at the end of the shift, based on the shift&#39;s other money amounts. This can be negative if employees have not correctly recorded all the events on the cash drawer. cash_paid_out_money is a summation of amounts from cash_payment_money (zero or positive), cash_refunds_money (zero or negative), cash_paid_in_money (zero or positive), and cash_paid_out_money (zero or negative) event types. | [optional] 
**closed_cash_money** | getClosedCashMoney() | setClosedCashMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money found in the cash drawer at the end of the shift by an auditing employee. The amount should be positive. | [optional] 
**device** | getDevice() | setDevice($value) | [**\SquareConnect\Model\CashDrawerDevice**](CashDrawerDevice.md) | The device running Square Point of Sale that was connected to the cash drawer. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

