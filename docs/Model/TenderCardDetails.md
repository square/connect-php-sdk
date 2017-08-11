# TenderCardDetails

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**status** | getStatus() | setStatus($value) | **string** | The credit card payment&#39;s current state (such as &#x60;AUTHORIZED&#x60; or &#x60;CAPTURED&#x60;). See [TenderCardDetailsStatus](#type-tendercarddetailsstatus) for possible values. | [optional] 
**card** | getCard() | setCard($value) | [**\SquareConnect\Model\Card**](Card.md) | The credit card&#39;s non-confidential details. | [optional] 
**entry_method** | getEntryMethod() | setEntryMethod($value) | **string** | The method used to enter the card&#39;s details for the transaction. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

