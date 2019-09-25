# Tender

### Description

Represents a tender (i.e., a method of payment) used in a Square transaction.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The tender&#39;s unique ID. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the transaction&#39;s associated location. | [optional] 
**transaction_id** | getTransactionId() | setTransactionId($value) | **string** | The ID of the tender&#39;s associated transaction. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the tender was created, in RFC 3339 format. | [optional] 
**note** | getNote() | setNote($value) | **string** | An optional note associated with the tender at the time of payment. | [optional] 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The total amount of the tender, including &#x60;tip_money&#x60;. If the tender has a &#x60;payment_id&#x60;, the &#x60;total_money&#x60; of the corresponding &#x60;Payment&#x60; will be equal to the &#x60;amount_money&#x60; of the tender. | [optional] 
**tip_money** | getTipMoney() | setTipMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The tip&#39;s amount of the tender. | [optional] 
**processing_fee_money** | getProcessingFeeMoney() | setProcessingFeeMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of any Square processing fees applied to the tender.  This field is not immediately populated when a new transaction is created. It is usually available after about ten seconds. | [optional] 
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | If the tender is associated with a customer or represents a customer&#39;s card on file, this is the ID of the associated customer. | [optional] 
**type** | getType() | setType($value) | **string** | The type of tender, such as &#x60;CARD&#x60; or &#x60;CASH&#x60;. See [TenderType](#type-tendertype) for possible values | 
**card_details** | getCardDetails() | setCardDetails($value) | [**\SquareConnect\Model\TenderCardDetails**](TenderCardDetails.md) | The details of the card tender.  This value is present only if the value of &#x60;type&#x60; is &#x60;CARD&#x60;. | [optional] 
**cash_details** | getCashDetails() | setCashDetails($value) | [**\SquareConnect\Model\TenderCashDetails**](TenderCashDetails.md) | The details of the cash tender.  This value is present only if the value of &#x60;type&#x60; is &#x60;CASH&#x60;. | [optional] 
**additional_recipients** | getAdditionalRecipients() | setAdditionalRecipients($value) | [**\SquareConnect\Model\AdditionalRecipient[]**](AdditionalRecipient.md) | Additional recipients (other than the merchant) receiving a portion of this tender. For example, fees assessed on the purchase by a third party integration. | [optional] 
**payment_id** | getPaymentId() | setPaymentId($value) | **string** | The ID of the &#x60;Payment&#x60; that corresponds to this tender. This value is only present for payments created with the v2 Payments API. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

