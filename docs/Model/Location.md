# Location

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The location&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The location&#39;s name. | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The location&#39;s physical address. | [optional] 
**timezone** | getTimezone() | setTimezone($value) | **string** | The [IANA Timezone Database](https://www.iana.org/time-zones) identifier for the location&#39;s timezone. | [optional] 
**capabilities** | getCapabilities() | setCapabilities($value) | **string[]** | Indicates which Square features are enabled for the location.  See [LocationCapability](#type-locationcapability) for possible values. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

