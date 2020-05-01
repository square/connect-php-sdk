# CreateDeviceCodeRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A unique string that identifies this CreateCheckout request. Keys can be any valid string but must be unique for every CreateCheckout request.  See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more information. | 
**device_code** | getDeviceCode() | setDeviceCode($value) | [**\SquareConnect\Model\DeviceCode**](DeviceCode.md) | The device code to create. | 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

