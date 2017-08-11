# Card

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The card&#39;s unique ID, if any. | [optional] 
**card_brand** | getCardBrand() | setCardBrand($value) | **string** | The card&#39;s brand (such as &#x60;VISA&#x60;). See [CardBrand](#type-cardbrand) for all possible values. | [optional] 
**last_4** | getLast4() | setLast4($value) | **string** | The last 4 digits of the card&#39;s number. | [optional] 
**exp_month** | getExpMonth() | setExpMonth($value) | **int** | The month of the card&#39;s expiration date. This value is always between &#x60;1&#x60; and &#x60;12&#x60;, inclusive. | [optional] 
**exp_year** | getExpYear() | setExpYear($value) | **int** | The four-digit year of the card&#39;s expiration date. | [optional] 
**cardholder_name** | getCardholderName() | setCardholderName($value) | **string** | The cardholder name. This value is present only if this object represents a customer&#39;s card on file. | [optional] 
**billing_address** | getBillingAddress() | setBillingAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The card&#39;s billing address. This value is present only if this object represents a customer&#39;s card on file. | [optional] 
**fingerprint** | getFingerprint() | setFingerprint($value) | **string** | The unique string fingerprint for the card.  The fingerprint is based on the credit card number and is unique to the merchant.  If a card is used at multiple locations for the same merchant, it will have the same fingerprint in each case. Note: Fingerprint may not exist on old transactions. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

