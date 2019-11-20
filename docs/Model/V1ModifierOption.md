# V1ModifierOption

### Description

V1ModifierOption
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The modifier option&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The modifier option&#39;s name. | [optional] 
**price_money** | getPriceMoney() | setPriceMoney($value) | [**\SquareConnect\Model\V1Money**](V1Money.md) | The modifier option&#39;s price. | [optional] 
**on_by_default** | getOnByDefault() | setOnByDefault($value) | **bool** | If true, the modifier option is the default option in a modifier list for which selection_type is SINGLE. | [optional] 
**ordinal** | getOrdinal() | setOrdinal($value) | **int** | Indicates the modifier option&#39;s list position when displayed in Square Point of Sale and the merchant dashboard. If more than one modifier option in the same modifier list has the same ordinal value, those options are displayed in alphabetical order. | [optional] 
**modifier_list_id** | getModifierListId() | setModifierListId($value) | **string** | The ID of the modifier list the option belongs to. | [optional] 
**v2_id** | getV2Id() | setV2Id($value) | **string** | The ID of the CatalogObject in the Connect v2 API. Objects that are shared across multiple locations share the same v2 ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

