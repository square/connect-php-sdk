# CustomerQuery

### Description

Represents a query (including filtering criteria, sorting criteria, or both) used to search for customer profiles.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**filter** | getFilter() | setFilter($value) | [**\SquareConnect\Model\CustomerFilter**](CustomerFilter.md) | A list of filtering criteria. | [optional] 
**sort** | getSort() | setSort($value) | [**\SquareConnect\Model\CustomerSort**](CustomerSort.md) | Sorting criteria for query results. The default behavior is to sort  customers alphabetically by &#x60;given_name&#x60; and &#x60;family_name&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

