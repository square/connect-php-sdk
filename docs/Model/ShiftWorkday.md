# ShiftWorkday

### Description

A `Shift` search query filter parameter that sets a range of days that  a `Shift` must start or end in before passing the filter condition.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**date_range** | getDateRange() | setDateRange($value) | [**\SquareConnect\Model\DateRange**](DateRange.md) | Dates for fetching the shifts | [optional] 
**match_shifts_by** | getMatchShiftsBy() | setMatchShiftsBy($value) | **string** | The strategy on which the dates are applied. See [ShiftWorkdayMatcher](#type-shiftworkdaymatcher) for possible values | [optional] 
**default_timezone** | getDefaultTimezone() | setDefaultTimezone($value) | **string** | Location-specific timezones convert workdays to datetime filters. Every location included in the query must have a timezone, or this field must be provided as a fallback. Format: the IANA timezone database identifier for the relevant timezone. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

