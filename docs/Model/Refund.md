# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The refund&#39;s unique ID. | 
**location_id** | **string** | The ID of the refund&#39;s associated location. | 
**transaction_id** | **string** | The ID of the transaction that the refunded tender is part of. | 
**tender_id** | **string** | The ID of the refunded tender. | 
**created_at** | **string** | The time when the refund was created, in RFC 3339 format. | [optional] 
**reason** | **string** | The reason for the refund being issued. | 
**amount_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of money refunded to the buyer. | 
**status** | **string** | The current status of the refund (&#x60;PENDING&#x60;, &#x60;APPROVED&#x60;, &#x60;REJECTED&#x60;, or &#x60;FAILED&#x60;). | 
**processing_fee_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of Square processing fee money refunded to the *merchant*. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


