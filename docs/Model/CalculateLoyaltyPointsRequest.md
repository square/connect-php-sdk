# CalculateLoyaltyPointsRequest

### Description

A request to calculate the points that a buyer can earn from  a specified purchase.

## Properties
Name | Getter | Setter | Type | Description | Notes
------------ | ------------- | ------------- | ------------- | ------------- | -------------
**order_id** | getOrderId() | setOrderId($value) | **string** | The &#x60;order&#x60; ID for which to calculate the points. Specify this field if your application uses the Orders API to process orders. Otherwise, specify the &#x60;transaction_amount&#x60;. | [optional] 
**transaction_amount_money** | getTransactionAmountMoney() | setTransactionAmountMoney($value) | [**\SquareConnect\Model\Money**](Money.md) | The purchase amount for which to calculate the points.  Specify this field if your application does not use the Orders API to process orders. Otherwise, specify the &#x60;order_id&#x60;. | [optional] 

Note: All properties are protected and only accessed via getters and setters.

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

