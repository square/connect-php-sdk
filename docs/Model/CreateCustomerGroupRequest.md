# CreateCustomerGroupRequest

### Description

Defines the body parameters that can be provided in a request to the [CreateCustomerGroup](#endpoint-createcustomegroup) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | The idempotency key for the request. See the [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency) guide for more information. | [optional] 
**group** | getGroup() | setGroup($value) | [**\SquareConnect\Model\CustomerGroup**](CustomerGroup.md) | The customer group to create. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

