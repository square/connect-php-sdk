# CatalogMeasurementUnit

### Description

Represents the unit used to measure a [CatalogItemVariation](#type-catalogitemvariation) and specifies the precision for decimal quantities.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**measurement_unit** | getMeasurementUnit() | setMeasurementUnit($value) | [**\SquareConnect\Model\MeasurementUnit**](MeasurementUnit.md) | Indicates the unit used to measure the quantity of a catalog item variation. | [optional] 
**precision** | getPrecision() | setPrecision($value) | **int** | Represents the maximum number of positions allowed after the decimal in quantities measured with this unit. For example, if the precision is 2, then an itemization’s quantity can be 0.01, 0.12, etc.  Min: 0  Max: 5  Default: 3 | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

