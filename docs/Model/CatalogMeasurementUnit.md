# CatalogMeasurementUnit

### Description

Represents the unit used to measure a `CatalogItemVariation` and specifies the precision for decimal quantities.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**measurement_unit** | getMeasurementUnit() | setMeasurementUnit($value) | [**\SquareConnect\Model\MeasurementUnit**](MeasurementUnit.md) | Indicates the unit used to measure the quantity of a catalog item variation. | [optional] 
**precision** | getPrecision() | setPrecision($value) | **int** | An integer between 0 and 5 that represents the maximum number of positions allowed after the decimal in quantities measured with this unit. For example:  - if the precision is 0, the quantity can be 1, 2, 3, etc. - if the precision is 1, the quantity can be 0.1, 0.2, etc. - if the precision is 2, the quantity can be 0.01, 0.12, etc.  Default: 3 | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

