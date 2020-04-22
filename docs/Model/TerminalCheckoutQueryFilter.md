# TerminalCheckoutQueryFilter

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**device_id** | getDeviceId() | setDeviceId($value) | **string** | &#x60;TerminalCheckout&#x60;s associated with a specific device. If no device is specified then all &#x60;TerminalCheckout&#x60;s for the merchant will be displayed. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | Time range for the beginning of the reporting period. Inclusive. Default: The current time minus one day. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | Filtered results with the desired status of the &#x60;TerminalCheckout&#x60; Options: PENDING, IN\\_PROGRESS, CANCELED, COMPLETED | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

