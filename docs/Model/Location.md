# Location

### Description

Represents one of a business's locations.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The Square-issued ID of the location. | [optional] 
**name** | getName() | setName($value) | **string** | The location&#39;s name. Location names are set by the account owner and displayed in the dashboard as the location&#39;s nickname | [optional] 
**address** | getAddress() | setAddress($value) | [**\SquareConnect\Model\Address**](Address.md) | The location&#39;s physical address. | [optional] 
**timezone** | getTimezone() | setTimezone($value) | **string** | The [IANA Timezone Database](https://www.iana.org/time-zones) identifier for the location&#39;s timezone. | [optional] 
**capabilities** | getCapabilities() | setCapabilities($value) | **string[]** | The Square features that are enabled for the location. See &#x60;LocationCapability&#x60; for possible values. See [LocationCapability](#type-locationcapability) for possible values | [optional] 
**status** | getStatus() | setStatus($value) | **string** | The location&#39;s status See [LocationStatus](#type-locationstatus) for possible values | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | **string** | The time when the location was created, in RFC 3339 format. | [optional] 
**merchant_id** | getMerchantId() | setMerchantId($value) | **string** | The ID of the merchant that owns the location. | [optional] 
**country** | getCountry() | setCountry($value) | **string** | The country of the location, in ISO 3166-1-alpha-2 format.  See &#x60;Country&#x60; for possible values. See [Country](#type-country) for possible values | [optional] 
**language_code** | getLanguageCode() | setLanguageCode($value) | **string** | The language associated with the location in [BCP 47 format](https://tools.ietf.org/html/bcp47#appendix-A). | [optional] 
**currency** | getCurrency() | setCurrency($value) | **string** | The currency used for all transactions at this location, in ISO 4217 format.  See &#x60;Currency&#x60; for possible values. See [Currency](#type-currency) for possible values | [optional] 
**phone_number** | getPhoneNumber() | setPhoneNumber($value) | **string** | The location&#39;s phone_number. | [optional] 
**business_name** | getBusinessName() | setBusinessName($value) | **string** | The location&#39;s business_name which is shown to its customers. For example, this is the name printed on its customer&#39;s receipts. | [optional] 
**type** | getType() | setType($value) | **string** | The location&#39;s type, as set by the account owner in the Square dashboard. Typically used to indicate whether or not the location object represents a physical space like a building or mall space. See [LocationType](#type-locationtype) for possible values | [optional] 
**website_url** | getWebsiteUrl() | setWebsiteUrl($value) | **string** | The location&#39;s website, as set by the account owner in the Square dashboard.  Default: none; only exists if explicitly set. | [optional] 
**business_hours** | getBusinessHours() | setBusinessHours($value) | [**\SquareConnect\Model\BusinessHours**](BusinessHours.md) | The hours of operation for a business location.  Default: none; only exists if explicitly set. | [optional] 
**business_email** | getBusinessEmail() | setBusinessEmail($value) | **string** | The email of the location. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The business description of the location. | [optional] 
**twitter_username** | getTwitterUsername() | setTwitterUsername($value) | **string** | The Twitter username of the location without the &#39;&amp;#64;&#39; symbol. | [optional] 
**instagram_username** | getInstagramUsername() | setInstagramUsername($value) | **string** | The Instagram username of the location without the &#39;&amp;#64;&#39; symbol. | [optional] 
**facebook_url** | getFacebookUrl() | setFacebookUrl($value) | **string** | The Facebook profile URL of the location. The URL should begin with &#39;facebook.com/&#39;. | [optional] 
**coordinates** | getCoordinates() | setCoordinates($value) | [**\SquareConnect\Model\Coordinates**](Coordinates.md) | The physical coordinates (latitude and longitude) of the location. | [optional] 
**logo_url** | getLogoUrl() | setLogoUrl($value) | **string** | The logo image URL of the location. | [optional] 
**pos_background_url** | getPosBackgroundUrl() | setPosBackgroundUrl($value) | **string** | The Point of Sale background image URL of the location. | [optional] 
**mcc** | getMcc() | setMcc($value) | **string** | The merchant category code (MCC) of the location, as standardized by ISO 18245. The MCC describes the kind of goods or services sold at the location. | [optional] [beta]

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

