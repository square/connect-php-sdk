# SearchOrdersFulfillmentFilter

### Description

Filter based on [Order Fulfillment](#type-orderfulfillment) information.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**fulfillment_types** | getFulfillmentTypes() | setFulfillmentTypes($value) | **string[]** | List of &#x60;fulfillment types&#x60; to filter for. Will return orders if any of its fulfillments match any of the fulfillment types listed in this field. See [OrderFulfillmentType](#type-orderfulfillmenttype) for possible values | 
**fulfillment_states** | getFulfillmentStates() | setFulfillmentStates($value) | **string[]** | List of &#x60;fulfillment states&#x60; to filter for. Will return orders if any of its fulfillments match any of the fulfillment states listed in this field. See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

