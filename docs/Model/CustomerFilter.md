# CustomerFilter

### Description

Represents a set of `CustomerQuery` filters used to limit the set of `Customers` returned by `SearchCustomers`.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**creation_source** | getCreationSource() | setCreationSource($value) | [**\SquareConnect\Model\CustomerCreationSourceFilter**](CustomerCreationSourceFilter.md) | A filter to select customers based on their creation source. | [optional] 
**created_at** | getCreatedAt() | setCreatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | A filter to select customers based on when they were created. | [optional] 
**updated_at** | getUpdatedAt() | setUpdatedAt($value) | [**\SquareConnect\Model\TimeRange**](TimeRange.md) | A filter to select customers based on when they were updated. | [optional] 
**group_ids** | getGroupIds() | setGroupIds($value) | [**\SquareConnect\Model\FilterValue**](FilterValue.md) | A filter to select customers based on their group membership.  The &#x60;group_ids&#x60; is a JSON object of the following general format: &#x60;&#x60;&#x60; \&quot;group_ids\&quot;: { \&quot;any\&quot;:  [\&quot;{group_a_id}\&quot;, \&quot;{group_b_id}\&quot;, ...], \&quot;all\&quot;:  [\&quot;{group_1_id}\&quot;, \&quot;{group_2_id}\&quot;, ...], &#39;none\&quot;: [\&quot;{group_i_id}\&quot;, \&quot;{group_ii_id}\&quot;, ...] } &#x60;&#x60;&#x60;  You can use any combination of the above &#x60;group_ids&#x60; fields (also known as &#x60;FilterValue&#x60; properties)  to specify how customers are selected based on their group membership.   With the &#x60;any&#x60; option, the search returns customers in Groups &#x60;A&#x60; or &#x60;B&#x60; or ... of the list. With the &#x60;all&#x60; option, the search returns customers in Groups &#x60;1&#x60; and &#x60;2&#x60; and ... of the list With the &#x60;none&#x60; option, the search returns customers not in Groups &#x60;i&#x60; and not in &#x60;ii&#x60; and not in ... of the list.  If any of the search conditions is not met, including when an invalid or non-existent group ID is provided, the result is an empty list.   You can use the &#x60;group_ids&#x60; search filter with other available filters.   You cannot use the &#x60;group_ids&#x60; filter to select customers based on segment membership. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

