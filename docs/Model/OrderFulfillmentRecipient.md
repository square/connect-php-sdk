# OrderFulfillmentRecipient

### Description

Contains information on the recipient of a fulfillment.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | The Customer ID of the customer associated with the fulfillment.  If &#x60;customer_id&#x60; is provided, the fulfillment recipient&#39;s &#x60;display_name&#x60;, &#x60;email_address&#x60;, and &#x60;phone_number&#x60; are automatically populated from the targeted customer profile. If these fields are set in the request, the request values will override the information from the customer profile. If the targeted customer profile does not contain the necessary information and these fields are left unset, the request will result in an error. | [optional] 
**display_name** | getDisplayName() | setDisplayName($value) | **string** | The display name of the fulfillment recipient.  If provided, overrides the value pulled from the customer profile indicated by &#x60;customer_id&#x60;. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The email address of the fulfillment recipient.  If provided, overrides the value pulled from the customer profile indicated by &#x60;customer_id&#x60;. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The phone number of the fulfillment recipient.  If provided, overrides the value pulled from the customer profile indicated by &#x60;customer_id&#x60;. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The address of the fulfillment recipient.  If provided, overrides the value pulled from the customer profile indicated by &#x60;customer_id&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

