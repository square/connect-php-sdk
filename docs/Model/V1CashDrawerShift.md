# V1CashDrawerShift

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The shift&#39;s unique ID. | [optional] 
**event_type** | getEventType() | setEventType($value) | **string** | The shift&#39;s current state. | [optional] 
**opened_at** | getOpenedAt() | setOpenedAt($value) | **string** | The time when the shift began, in ISO 8601 format. | [optional] 
**ended_at** | getEndedAt() | setEndedAt($value) | **bool** | The time when the shift ended, in ISO 8601 format. | [optional] 
**closed_at** | getClosedAt() | setClosedAt($value) | **string** | The time when the shift was closed, in ISO 8601 format. | [optional] 
**employee_ids** | getEmployeeIds() | setEmployeeIds($value) | **string[]** | The IDs of all employees that were logged into Square Register at some point during the cash drawer shift. | [optional] 
**opening_employee_id** | getOpeningEmployeeId() | setOpeningEmployeeId($value) | **string** | The ID of the employee that started the cash drawer shift. | [optional] 
**ending_employee_id** | getEndingEmployeeId() | setEndingEmployeeId($value) | **string** | The ID of the employee that ended the cash drawer shift. | [optional] 
**closing_employee_id** | getClosingEmployeeId() | setClosingEmployeeId($value) | **string** | The ID of the employee that closed the cash drawer shift by auditing the cash drawer&#39;s contents. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The time when the timecard was created, in ISO 8601 format. | [optional] 
**starting_cash_money** | getStartingCashMoney() | setStartingCashMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money in the cash drawer at the start of the shift. | [optional] 
**cash_payment_money** | getCashPaymentMoney() | setCashPaymentMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money added to the cash drawer from cash payments. | [optional] 
**cash_refunds_money** | getCashRefundsMoney() | setCashRefundsMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money removed from the cash drawer from cash refunds. This value is always negative or zero. | [optional] 
**cash_paid_in_money** | getCashPaidInMoney() | setCashPaidInMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money added to the cash drawer for reasons other than cash payments. | [optional] 
**cash_paid_out_money** | getCashPaidOutMoney() | setCashPaidOutMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money removed from the cash drawer for reasons other than cash refunds. | [optional] 
**expected_cash_money** | getExpectedCashMoney() | setExpectedCashMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money that should be in the cash drawer at the end of the shift, based on the shift&#39;s other money amounts. | [optional] 
**closed_cash_money** | getClosedCashMoney() | setClosedCashMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of money found in the cash drawer at the end of the shift by an auditing employee. | [optional] 
**device** | getDevice() | setDevice($value) | [**\SquareConnect\Model\Device**](Device.md) | The device running Square Register that was connected to the cash drawer. | [optional] 
**events** | getEvents() | setEvents($value) | [**\SquareConnect\Model\V1CashDrawerEvent[]**](V1CashDrawerEvent.md) | All of the events (payments, refunds, and so on) that involved the cash drawer during the shift. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

