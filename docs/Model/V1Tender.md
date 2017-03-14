# V1Tender

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The tender&#39;s unique ID. | [optional] 
**type** | **string** | The type of tender. | [optional] 
**name** | **string** | A human-readable description of the tender. | [optional] 
**employee_id** | **string** | The ID of the employee that processed the tender. | [optional] 
**receipt_url** | **string** | The URL of the receipt for the tender. | [optional] 
**card_brand** | **string** | The brand of credit card provided. | [optional] 
**pan_suffix** | **string** | The last four digits of the provided credit card&#39;s account number. | [optional] 
**entry_method** | **string** | The tender&#39;s unique ID. | [optional] 
**payment_note** | **string** | Notes entered by the merchant about the tender at the time of payment, if any. Typically only present for tender with the type: OTHER. | [optional] 
**total_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total amount of money provided in this form of tender. | [optional] 
**tendered_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of total_money applied to the payment. | [optional] 
**change_back_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The amount of total_money returned to the buyer as change. | [optional] 
**refunded_money** | [**\SquareConnect\Model\V1Money**](V1Money.md) | The total of all refunds applied to this tender. This amount is always negative or zero. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


