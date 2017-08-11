# Address

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**address_line_1** | getAddressLine1() | setAddressLine1($value) | **string** | The first line of the address.  Fields that start with &#x60;address_line&#x60; provide the address&#39;s most specific details, like street number, street name, and building name. They do *not* provide less specific details like city, state/province, or country (these details are provided in other fields). | [optional] 
**address_line_2** | getAddressLine2() | setAddressLine2($value) | **string** | The second line of the address, if any. | [optional] 
**address_line_3** | getAddressLine3() | setAddressLine3($value) | **string** | The third line of the address, if any. | [optional] 
**locality** | getLocality() | setLocality($value) | **string** | The city or town of the address. | [optional] 
**sublocality** | getSublocality() | setSublocality($value) | **string** | A civil region within the address&#39;s &#x60;locality&#x60;, if any. | [optional] 
**sublocality_2** | getSublocality2() | setSublocality2($value) | **string** | A civil region within the address&#39;s &#x60;sublocality&#x60;, if any. | [optional] 
**sublocality_3** | getSublocality3() | setSublocality3($value) | **string** | A civil region within the address&#39;s &#x60;sublocality_2&#x60;, if any. | [optional] 
**administrative_district_level_1** | getAdministrativeDistrictLevel1() | setAdministrativeDistrictLevel1($value) | **string** | A civil entity within the address&#39;s country. In the US, this is the state. | [optional] 
**administrative_district_level_2** | getAdministrativeDistrictLevel2() | setAdministrativeDistrictLevel2($value) | **string** | A civil entity within the address&#39;s &#x60;administrative_district_level_1&#x60;. In the US, this is the county. | [optional] 
**administrative_district_level_3** | getAdministrativeDistrictLevel3() | setAdministrativeDistrictLevel3($value) | **string** | A civil entity within the address&#39;s &#x60;administrative_district_level_2&#x60;, if any. | [optional] 
**postal_code** | getPostalCode() | setPostalCode($value) | **string** | The address&#39;s postal code. | [optional] 
**country** | getCountry() | setCountry($value) | **string** | The address&#39;s country, in ISO 3166-1-alpha-2 format. | [optional] 
**first_name** | getFirstName() | setFirstName($value) | **string** | Optional first name when it&#39;s representing recipient. | [optional] 
**last_name** | getLastName() | setLastName($value) | **string** | Optional last name when it&#39;s representing recipient. | [optional] 
**organization** | getOrganization() | setOrganization($value) | **string** | Optional organization name when it&#39;s representing recipient. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

