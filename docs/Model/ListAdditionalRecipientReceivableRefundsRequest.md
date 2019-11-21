# ListAdditionalRecipientReceivableRefundsRequest

### Description

Defines the query parameters that can be included in a request to the [ListAdditionalRecipientReceivableRefunds](#endpoint-listadditionalrecipientreceivablerefunds) endpoint.
**Note: This model is deprecated.**

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**begin_time** | getBeginTime() | setBeginTime($value) | **string** | The beginning of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time minus one year. | [optional] 
**end_time** | getEndTime() | setEndTime($value) | **string** | The end of the requested reporting period, in RFC 3339 format.  See [Date ranges](#dateranges) for details on date inclusivity/exclusivity.  Default value: The current time. | [optional] 
**sort_order** | getSortOrder() | setSortOrder($value) | **string** | The order in which results are listed in the response (&#x60;ASC&#x60; for oldest first, &#x60;DESC&#x60; for newest first).  Default value: &#x60;DESC&#x60; See [SortOrder](#type-sortorder) for possible values | [optional] 
**cursor** | getCursor() | setCursor($value) | **string** | A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

