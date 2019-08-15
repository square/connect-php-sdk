# CardPaymentDetails

### Description

Reflects the current status of a card payment.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**status** | getStatus() | setStatus($value) | **string** | The card payment&#39;s current state. It can be one of: &#x60;AUTHORIZED&#x60;, &#x60;CAPTURED&#x60;, &#x60;VOIDED&#x60;, &#x60;FAILED&#x60;. | [optional] 
**card** | getCard() | setCard($value) | [**\SquareConnect\Model\Card**](Card.md) | The credit card&#39;s non-confidential details. | [optional] 
**entry_method** | getEntryMethod() | setEntryMethod($value) | **string** | The method used to enter the card&#39;s details for the payment.  Can be &#x60;KEYED&#x60;, &#x60;SWIPED&#x60;, &#x60;EMV&#x60;, &#x60;ON_FILE&#x60;, or &#x60;CONTACTLESS&#x60;. | [optional] 
**cvv_status** | getCvvStatus() | setCvvStatus($value) | **string** | Status code returned from the Card Verification Value (CVV) check. | [optional] 
**avs_status** | getAvsStatus() | setAvsStatus($value) | **string** | Status code returned from the Address Verification System (AVS) check. | [optional] 
**auth_result_code** | getAuthResultCode() | setAuthResultCode($value) | **string** | Status code returned by the card issuer that describes the payment&#39;s authorization status. | [optional] 
**application_identifier** | getApplicationIdentifier() | setApplicationIdentifier($value) | **string** | For EMV payments, identifies the EMV application used for the payment | [optional] 
**application_name** | getApplicationName() | setApplicationName($value) | **string** | For EMV payments, the human-readable name of the EMV application used for the payment. | [optional] 
**application_cryptogram** | getApplicationCryptogram() | setApplicationCryptogram($value) | **string** | For EMV payments, the cryptogram generated for the payment. | [optional] 
**errors** | getErrors() | setErrors($value) | [**\SquareConnect\Model\Error[]**](Error.md) | Information on errors encountered during the request. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

