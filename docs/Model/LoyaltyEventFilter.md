# LoyaltyEventFilter

### Description

The filtering criteria. If the request specifies multiple filters,  the endpoint uses a logical AND to evaluate them.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**loyalty_account_filter** | getLoyaltyAccountFilter() | setLoyaltyAccountFilter($value) | [**\SquareConnect\Model\LoyaltyEventLoyaltyAccountFilter**](LoyaltyEventLoyaltyAccountFilter.md) | Filter events by loyalty account. | [optional] 
**type_filter** | getTypeFilter() | setTypeFilter($value) | [**\SquareConnect\Model\LoyaltyEventTypeFilter**](LoyaltyEventTypeFilter.md) | Filter events by event type. | [optional] 
**date_time_filter** | getDateTimeFilter() | setDateTimeFilter($value) | [**\SquareConnect\Model\LoyaltyEventDateTimeFilter**](LoyaltyEventDateTimeFilter.md) | Filter events by date time range.  For each range, the start time is inclusive and the end time  is exclusive. | [optional] 
**location_filter** | getLocationFilter() | setLocationFilter($value) | [**\SquareConnect\Model\LoyaltyEventLocationFilter**](LoyaltyEventLocationFilter.md) | Filter events by location. | [optional] 
**order_filter** | getOrderFilter() | setOrderFilter($value) | [**\SquareConnect\Model\LoyaltyEventOrderFilter**](LoyaltyEventOrderFilter.md) | Filter events by the order associated with the event. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

