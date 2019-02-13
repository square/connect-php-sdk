# OrderFulfillmentRecipient

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**customer_id** | getCustomerId() | setCustomerId($value) | **string** | The Customer ID of the customer associated with the fulfillment.  If customer_id is provided, the corresponding recipient information fields (&#x60;display_name&#x60;, &#x60;email_address&#x60;, and &#x60;phone_number&#x60;) are automatically populated from the relevant customer profile. If the targeted profile information does not contain the necessary required information, the request will result in an error. | [optional] 
**display_name** | getDisplayName() | setDisplayName($value) | **string** | The display name of the fulfillment recipient.  If provided, overrides the value from customer profile indicated by customer_id. | [optional] 
**email_address** | getEmailAddress() | setEmailAddress($value) | **string** | The email address of the fulfillment recipient.  If provided, overrides the value from customer profile indicated by customer_id. | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The phone number of the fulfillment recipient.  If provided, overrides the value from customer profile indicated by customer_id. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

