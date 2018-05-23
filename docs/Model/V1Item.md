# V1Item

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**id** | getId() | setId($value) | **string** | The item&#39;s ID. Must be unique among all entity IDs ever provided on behalf of the merchant. You can never reuse an ID. This value can include alphanumeric characters, dashes (-), and underscores (_). | [optional] 
**name** | getName() | setName($value) | **string** | The item&#39;s name. | [optional] 
**description** | getDescription() | setDescription($value) | **string** | The item&#39;s description. | [optional] 
**type** | getType() | setType($value) | **string** | The item&#39;s type. This value is NORMAL for almost all items. | [optional] 
**color** | getColor() | setColor($value) | **string** | The color of the discount&#39;s display label in Square Register, if not the default color. The default color is 9da2a6. | [optional] 
**abbreviation** | getAbbreviation() | setAbbreviation($value) | **string** | The text of the item&#39;s display label in Square Register. Only up to the first five characters of the string are used. | [optional] 
**visibility** | getVisibility() | setVisibility($value) | **string** | Indicates whether the item is viewable from the merchant&#39;s online store (PUBLIC) or PRIVATE. | [optional] 
**available_online** | getAvailableOnline() | setAvailableOnline($value) | **bool** | If true, the item can be added to shipping orders from the merchant&#39;s online store. | [optional] 
**master_image** | getMasterImage() | setMasterImage($value) | [**\SquareConnect\Model\V1ItemImage**](V1ItemImage.md) | The item&#39;s master image, if any. | [optional] 
**category** | getCategory() | setCategory($value) | [**\SquareConnect\Model\V1Category**](V1Category.md) | The category the item belongs to, if any. | [optional] 
**variations** | getVariations() | setVariations($value) | [**\SquareConnect\Model\V1Variation[]**](V1Variation.md) | The item&#39;s variations. You must specify at least one variation. | [optional] 
**modifier_lists** | getModifierLists() | setModifierLists($value) | [**\SquareConnect\Model\V1Variation[]**](V1Variation.md) | The modifier lists that apply to the item, if any. | [optional] 
**fees** | getFees() | setFees($value) | [**\SquareConnect\Model\V1Fee[]**](V1Fee.md) | The fees that apply to the item, if any. | [optional] 
**taxable** | getTaxable() | setTaxable($value) | **bool** | Deprecated. This field is not used. | [optional] 
**category_id** | getCategoryId() | setCategoryId($value) | **string** | The ID of the item&#39;s category, if any. | [optional] 
**available_for_pickup** | getAvailableForPickup() | setAvailableForPickup($value) | **bool** | If true, the item can be added to pickup orders from the merchant&#39;s online store. Default value: false | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

