# SearchOrdersCustomerFilter

### Description

Filter based on Order `customer_id` and any Tender `customer_id` associated with the Order. Does not filter based on the [FulfillmentRecipient](#type-orderfulfillmentrecipient) `customer_id`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**customer_ids** | getCustomerIds() | setCustomerIds($value) | **string[]** | Filter by orders with any of the listed &#x60;customer_id&#x60;s.  Max: 10 &#x60;customer_id&#x60;s. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

