# V1ListEmployeesRequest

### Description



## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order** | getOrder() | setOrder($value) | **string** | The order in which employees are listed in the response, based on their created_at field.      Default value: ASC See [SortOrder](#type-sortorder) for possible values | [optional] 
**begin_updated_at** | getBeginUpdatedAt() | setBeginUpdatedAt($value) | **string** | If filtering results by their updated_at field, the beginning of the requested reporting period, in ISO 8601 format | [optional] 
**end_updated_at** | getEndUpdatedAt() | setEndUpdatedAt($value) | **string** | If filtering results by there updated_at field, the end of the requested reporting period, in ISO 8601 format. | [optional] 
**begin_created_at** | getBeginCreatedAt() | setBeginCreatedAt($value) | **string** | If filtering results by their created_at field, the beginning of the requested reporting period, in ISO 8601 format. | [optional] 
**end_created_at** | getEndCreatedAt() | setEndCreatedAt($value) | **string** | If filtering results by their created_at field, the end of the requested reporting period, in ISO 8601 format. | [optional] 
**status** | getStatus() | setStatus($value) | **string** | If provided, the endpoint returns only employee entities with the specified status (ACTIVE or INACTIVE). See [V1ListEmployeesRequestStatus](#type-v1listemployeesrequeststatus) for possible values | [optional] 
**external_id** | getExternalId() | setExternalId($value) | **string** | If provided, the endpoint returns only employee entities with the specified external_id. | [optional] 
**limit** | getLimit() | setLimit($value) | **int** | The maximum integer number of employee entities to return in a single response. Default 100, maximum 200. | [optional] 
**batch_token** | getBatchToken() | setBatchToken($value) | **string** | A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

