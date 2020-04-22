# CatalogQuickAmount

### Description

Represents a Quick Amount in the Catalog.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**type** | getType() | setType($value) | **string** | Represents the type of the Quick Amount. See [CatalogQuickAmountType](#type-catalogquickamounttype) for possible values | 
**amount** | getAmount() | setAmount($value) | [**\SquareConnect\Model\Money**](Money.md) | Represents the actual amount of the Quick Amount with Money type. | 
**score** | getScore() | setScore($value) | **int** | Describes the ranking of the Quick Amount provided by machine learning model, in the range [0, 100]. MANUAL type amount will always have score &#x3D; 100. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | The order in which this Quick Amount should be displayed. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

