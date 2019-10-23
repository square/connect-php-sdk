# CreateOrderRequestTax

### Description

__Deprecated__: Please use the [OrderLineItemTax](#type-orderlineitemtax) type in the order field of [CreateOrderRequest](#type-createorderrequest) instead.  Represents a tax that can apply to either a single line item or an entire order.
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**catalog_object_id** | getCatalogObjectId() | setCatalogObjectId($value) | **string** | Only used for catalog taxes. The catalog object ID of an existing &#x60;CatalogTax&#x60;.  Do not provide a value for this field if you provide values in other fields for an ad hoc tax. | [optional] 
**name** | getName() | setName($value) | **string** | Only used for ad hoc taxes. The tax&#39;s name.  Do not provide a value for this field if you set &#x60;catalog_object_id&#x60;. | [optional] 
**type** | getType() | setType($value) | **string** | Only used for ad hoc taxes. Indicates the calculation method used to apply the line item tax.  Default: &#x60;ADDITIVE&#x60;; See &#x60;OrderLineItemTaxType&#x60; for possible values. See [OrderLineItemTaxType](#type-orderlineitemtaxtype) for possible values | [optional] 
**percentage** | getPercentage() | setPercentage($value) | **string** | Only used for ad hoc taxes. The percentage of the tax, as a string representation of a decimal number.  A value of &#x60;7.25&#x60; corresponds to a percentage of 7.25%. This value range between 0.0 up to 100.0 | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

