# DeviceCheckoutOptions

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**device_id** | getDeviceId() | setDeviceId($value) | **string** | The unique Id of the device intended for this &#x60;TerminalCheckout&#x60;. The Id can be retrieved from /v2/devices api. | 
**skip_receipt_screen** | getSkipReceiptScreen() | setSkipReceiptScreen($value) | **bool** | Instruct the device to skip the receipt screen. Defaults to false. | [optional] 
**tip_settings** | getTipSettings() | setTipSettings($value) | [**\SquareConnect\Model\TipSettings**](TipSettings.md) | Tip specific settings | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

