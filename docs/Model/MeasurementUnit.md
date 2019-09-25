# MeasurementUnit

### Description

Represents a unit of measurement to use with a quantity, such as ounces or inches. Exactly one of the following fields are required: `custom_unit`, `area_unit`, `length_unit`, `volume_unit`, and `weight_unit`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**custom_unit** | getCustomUnit() | setCustomUnit($value) | [**\SquareConnect\Model\MeasurementUnitCustom**](MeasurementUnitCustom.md) | A custom unit of measurement defined by the seller using the Point of Sale app or ad-hoc as an order line item. | [optional] 
**area_unit** | getAreaUnit() | setAreaUnit($value) | **string** | Represents a standard area unit. See [MeasurementUnitArea](#type-measurementunitarea) for possible values | [optional] 
**length_unit** | getLengthUnit() | setLengthUnit($value) | **string** | Represents a standard length unit. See [MeasurementUnitLength](#type-measurementunitlength) for possible values | [optional] 
**volume_unit** | getVolumeUnit() | setVolumeUnit($value) | **string** | Represents a standard volume unit. See [MeasurementUnitVolume](#type-measurementunitvolume) for possible values | [optional] 
**weight_unit** | getWeightUnit() | setWeightUnit($value) | **string** | Represents a standard unit of weight or mass. See [MeasurementUnitWeight](#type-measurementunitweight) for possible values | [optional] 
**generic_unit** | getGenericUnit() | setGenericUnit($value) | **string** | Reserved for API integrations that lack the ability to specify a real measurement unit See [MeasurementUnitGeneric](#type-measurementunitgeneric) for possible values | [optional] 
**time_unit** | getTimeUnit() | setTimeUnit($value) | **string** | Represents a standard unit of time. See [MeasurementUnitTime](#type-measurementunittime) for possible values | [optional] 
**type** | getType() | setType($value) | **string** | Represents the type of the measurement unit. See [MeasurementUnitUnitType](#type-measurementunitunittype) for possible values | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

