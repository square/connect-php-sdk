# DeviceCode

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The unique id for this device code. | [optional] 
**name** | getName() | setName($value) | **string** | An optional user-defined name for the device code. | [optional] 
**code** | getCode() | setCode($value) | **string** | The unique code that can be used to login. | [optional] 
**device_id** | getDeviceId() | setDeviceId($value) | **string** | The unique id of the device that used this code. Populated when the device is paired up. | [optional] 
**product_type** | getProductType() | setProductType($value) | **string** | The targeting product type of the device code. See [ProductType](#type-producttype) for possible values | 
**location_id** | getLocationId() | setLocationId($value) | **string** | The location assigned to this code. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | The pairing status of the device code. See [DeviceCodeStatus](#type-devicecodestatus) for possible values | [optional] 
**pair_by** | getPairBy() | setPairBy($value) | **string** | When this DeviceCode will expire and no longer login. Timestamp in RFC 3339 format. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | When this DeviceCode was created. Timestamp in RFC 3339 format. | [optional] 
**status_changed_at** | getStatusChangedAt() | setStatusChangedAt($value) | **string** | When this DeviceCode&#39;s status was last changed. Timestamp in RFC 3339 format. | [optional] 
**paired_at** | getPairedAt() | setPairedAt($value) | **string** | When this DeviceCode was paired. Timestamp in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

