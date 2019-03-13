# V1ListEmployeeRolesRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order** | getOrder() | setOrder($value) | **string** | The order in which employees are listed in the response, based on their created_at field.Default value: ASC See [SortOrder](#type-sortorder) for possible values | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional] 
**batch_token** | getBatchToken() | setBatchToken($value) | **string** | A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

