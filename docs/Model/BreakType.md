# BreakType

### Description

A defined break template that sets an expectation for possible `Break`  instances on a `Shift`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | UUID for this object. | [optional] 
**location_id** | getLocationId() | setLocationId($value) | **string** | The ID of the business location this type of break applies to. | 
**break_name** | getBreakName() | setBreakName($value) | **string** | A human-readable name for this type of break. Will be displayed to employees in Square products. | 
**expected_duration** | getExpectedDuration() | setExpectedDuration($value) | **string** | Format: RFC-3339 P[n]Y[n]M[n]DT[n]H[n]M[n]S. The expected length of this break. Precision below minutes is truncated. | 
**is_paid** | getIsPaid() | setIsPaid($value) | **bool** | Whether this break counts towards time worked for compensation purposes. | 
**version** | getVersion() | setVersion($value) | **int** | Used for resolving concurrency issues; request will fail if version provided does not match server version at time of request. If a value is not provided, Square&#39;s servers execute a \&quot;blind\&quot; write; potentially  overwriting another writer&#39;s data. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | **string** | A read-only timestamp in RFC 3339 format. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

