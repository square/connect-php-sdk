# UpdateItemTaxesRequest

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**item_ids** | getItemIds() | setItemIds($value) | **string[]** | The [CatalogItem](#type-catalogitem)s whose enabled/disabled [CatalogTax](#type-catalogtax)es are being updated. | 
**taxes_to_enable** | getTaxesToEnable() | setTaxesToEnable($value) | **string[]** | The set of [CatalogTax](#type-catalogtax)es (referenced by ID) to enable for the [CatalogItem](#type-catalogitem). | [optional] 
**taxes_to_disable** | getTaxesToDisable() | setTaxesToDisable($value) | **string[]** | The set of [CatalogTax](#type-catalogtax)es (referenced by ID) to disable for the [CatalogItem](#type-catalogitem). | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

