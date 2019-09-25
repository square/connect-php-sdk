# PayOrderRequest

### Description

Defines the fields that are included in requests to the [PayOrder](#endpoint-payorder) endpoint.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**idempotency_key** | getIdempotencyKey() | setIdempotencyKey($value) | **string** | A value you specify that uniquely identifies this request among requests you&#39;ve sent. If you&#39;re unsure whether a particular payment request was completed successfully, you can reattempt it with the same idempotency key without worrying about duplicate payments.  See [Idempotency](https://developer.squareup.com/docs/working-with-apis/idempotency) for more information. | 
**order_version** | getOrderVersion() | setOrderVersion($value) | **int** | The version of the order being paid. If not supplied, the latest version will be paid. | [optional] 
**payment_ids** | getPaymentIds() | setPaymentIds($value) | **string[]** |  | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

