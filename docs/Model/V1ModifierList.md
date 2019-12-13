# V1ModifierList

### Description

V1ModifierList
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The modifier list&#39;s unique ID. | [optional] 
**name** | getName() | setName($value) | **string** | The modifier list&#39;s name. | [optional] 
**selection_type** | getSelectionType() | setSelectionType($value) | **string** | Indicates whether MULTIPLE options or a SINGLE option from the modifier list can be applied to a single item. See [V1ModifierListSelectionType](#type-v1modifierlistselectiontype) for possible values | [optional] 
**modifier_options** | getModifierOptions() | setModifierOptions($value) | [**\SquareConnect\Model\V1ModifierOption[]**](V1ModifierOption.md) | The options included in the modifier list. | [optional] 
**v2_id** | getV2Id() | setV2Id($value) | **string** | The ID of the CatalogObject in the Connect v2 API. Objects that are shared across multiple locations share the same v2 ID. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

