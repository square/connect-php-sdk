# Refund

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The refund&#39;s unique ID. | 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the refund&#39;s associated location. | 
**transaction_id** | getTransactionId() | setTransactionId($value) | **string** | The ID of the transaction that the refunded tender is part of. | 
**tender_id** | getTenderId() | setTenderId($value) | **string** | The ID of the refunded tender. | 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the refund was created, in RFC 3339 format. | [optional] 
**reason** | getReason() | setReason($value) | **string** | The reason for the refund being issued. | 
**amount_money** | getAmountMoney() | setAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of money refunded to the buyer. | 
**status** | getStatus() | setStatus($value) | **string** | The current status of the refund (&#x60;PENDING&#x60;, &#x60;APPROVED&#x60;, &#x60;REJECTED&#x60;, or &#x60;FAILED&#x60;). | 
**processing_fee_money** | getProcessingFeeMoney() | setProcessingFeeMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The amount of Square processing fee money refunded to the *merchant*. | [optional] 
**additional_recipients** | getAdditionalRecipients() | setAdditionalRecipients($value) | [**\SquareConnect\Model\AdditionalRecipient[]**](AdditionalRecipient.md) | Additional recipients (other than the merchant) receiving a portion of this refund. For example, fees assessed on a refund of a purchase by a third party integration. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

