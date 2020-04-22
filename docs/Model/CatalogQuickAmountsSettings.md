# CatalogQuickAmountsSettings

### Description

A parent Catalog Object model represents a set of Quick Amounts and the settings control the amounts.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**option** | getOption() | setOption($value) | **string** | Represents the option seller currently uses on Quick Amounts. See [CatalogQuickAmountsSettingsOption](#type-catalogquickamountssettingsoption) for possible values | 
**eligible_for_auto_amounts** | getEligibleForAutoAmounts() | setEligibleForAutoAmounts($value) | **bool** | Represents location&#39;s eligibility for auto amounts The boolean should be consistent with whether there are AUTO amounts in the &#x60;amounts&#x60;. | [optional] 
**amounts** | getAmounts() | setAmounts($value) | [**\SquareConnect\Model\CatalogQuickAmount[]**](CatalogQuickAmount.md) | Represents a set of Quick Amounts at this location. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

