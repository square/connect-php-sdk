Connect v2 PHP SDK [![Build Status](https://travis-ci.org/square/connect-php-sdk.svg?branch=master)](https://travis-ci.org/square/connect-php-sdk)
==================

This repository contains a generated PHP client SDK for the Square Connect APIs v2. Check out our [API
specification repository](https://github.com/square/connect-api-specification)
for the specification and template files we used to generate this.

If you are looking for a sample e-commerce application using these APIs, check out the [`connect-api-examples`](https://github.com/square/connect-api-examples/tree/master/connect-examples/v2/php_payment) repository. 

To learn more about the Square APIs in general, head on over to the [Square API documentation](https://docs.connect.squareup.com/)

Requirements
------------
* `PHP >= 5.4.0`
* A Square account and [developer application](https://connect.squareup.com/apps/) (for authorization)

Installing
-----

##### With Composer

The PHP SDK is available on Packagist. To add it to Composer, simply run:

```
$ php composer.phar require square/connect
```

Or add this line under `"require"` to your composer.json:

```
"require": {
    ...
    "square/connect": "*",
    ...
}
```
And then install your composer dependencies with 
```
$ php composer.phar install
```
##### From GitHub
Clone this repository, or download the zip into your project's folder and then add the following line in your code:
```
require('connect-php-sdk/autoload.php');
```
*Note: you might have to change the path depending on your project's folder structure.*

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new SquareConnect\Api\CheckoutApi();
$location_id = "location_id_example"; // string | The ID of the business location to associate the checkout with.
$body = new \SquareConnect\Model\CreateCheckoutRequest(); // \SquareConnect\Model\CreateCheckoutRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCheckout($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://connect.squareup.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CheckoutApi* | [**createCheckout**](docs/Api/CheckoutApi.md#createcheckout) | **POST** /v2/locations/{location_id}/checkouts | CreateCheckout
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /v2/customers | CreateCustomer
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /v2/customers/{customer_id} | DeleteCustomer
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /v2/customers | ListCustomers
*CustomerApi* | [**retrieveCustomer**](docs/Api/CustomerApi.md#retrievecustomer) | **GET** /v2/customers/{customer_id} | RetrieveCustomer
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer
*CustomerCardApi* | [**createCustomerCard**](docs/Api/CustomerCardApi.md#createcustomercard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
*CustomerCardApi* | [**deleteCustomerCard**](docs/Api/CustomerCardApi.md#deletecustomercard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard
*EmployeesApi* | [**v1CreateEmployee**](docs/Api/EmployeesApi.md#v1createemployee) | **POST** /v1/me/employees | Creates an employee for a business.
*EmployeesApi* | [**v1CreateEmployeeRole**](docs/Api/EmployeesApi.md#v1createemployeerole) | **POST** /v1/me/roles | Creates an employee role you can then assign to employees.
*EmployeesApi* | [**v1CreateTimecard**](docs/Api/EmployeesApi.md#v1createtimecard) | **POST** /v1/me/timecards | Creates a timecard for an employee. Each timecard corresponds to a single shift.
*EmployeesApi* | [**v1DeleteTimecard**](docs/Api/EmployeesApi.md#v1deletetimecard) | **DELETE** /v1/me/timecards/{timecard_id} | Deletes a timecard. Deleted timecards are still accessible from Connect API endpoints, but the value of their deleted field is set to true. See Handling deleted timecards for more information.
*EmployeesApi* | [**v1ListCashDrawerShifts**](docs/Api/EmployeesApi.md#v1listcashdrawershifts) | **GET** /v1/{location_id}/cash-drawer-shifts | Provides the details for all of a location&#39;s cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.
*EmployeesApi* | [**v1ListEmployeeRoles**](docs/Api/EmployeesApi.md#v1listemployeeroles) | **GET** /v1/me/roles | Provides summary information for all of a business&#39;s employee roles.
*EmployeesApi* | [**v1ListEmployees**](docs/Api/EmployeesApi.md#v1listemployees) | **GET** /v1/me/employees | Provides summary information for all of a business&#39;s employees.
*EmployeesApi* | [**v1ListTimecardEvents**](docs/Api/EmployeesApi.md#v1listtimecardevents) | **GET** /v1/me/timecards/{timecard_id}/events | Provides summary information for all events associated with a particular timecard.
*EmployeesApi* | [**v1ListTimecards**](docs/Api/EmployeesApi.md#v1listtimecards) | **GET** /v1/me/timecards | Provides summary information for all of a business&#39;s employee timecards.
*EmployeesApi* | [**v1RetrieveCashDrawerShift**](docs/Api/EmployeesApi.md#v1retrievecashdrawershift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | Provides the details for a single cash drawer shift, including all events that occurred during the shift.
*EmployeesApi* | [**v1RetrieveEmployee**](docs/Api/EmployeesApi.md#v1retrieveemployee) | **GET** /v1/me/employees/{employee_id} | Provides the details for a single employee.
*EmployeesApi* | [**v1RetrieveEmployeeRole**](docs/Api/EmployeesApi.md#v1retrieveemployeerole) | **GET** /v1/me/roles/{role_id} | Provides the details for a single employee role.
*EmployeesApi* | [**v1RetrieveTimecard**](docs/Api/EmployeesApi.md#v1retrievetimecard) | **GET** /v1/me/timecards/{timecard_id} | Provides the details for a single timecard.
*EmployeesApi* | [**v1UpdateEmployee**](docs/Api/EmployeesApi.md#v1updateemployee) | **PUT** /v1/me/employees/{employee_id} | v1UpdateEmployee
*EmployeesApi* | [**v1UpdateEmployeeRole**](docs/Api/EmployeesApi.md#v1updateemployeerole) | **PUT** /v1/me/roles/{role_id} | Modifies the details of an employee role.
*EmployeesApi* | [**v1UpdateTimecard**](docs/Api/EmployeesApi.md#v1updatetimecard) | **PUT** /v1/me/timecards/{timecard_id} | Modifies a timecard&#39;s details. This creates an API_EDIT event for the timecard. You can view a timecard&#39;s event history with the List Timecard Events endpoint.
*ItemsApi* | [**v1AdjustInventory**](docs/Api/ItemsApi.md#v1adjustinventory) | **POST** /v1/{location_id}/inventory/{variation_id} | Adjusts an item variation&#39;s current available inventory.
*ItemsApi* | [**v1ApplyFee**](docs/Api/ItemsApi.md#v1applyfee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.
*ItemsApi* | [**v1ApplyModifierList**](docs/Api/ItemsApi.md#v1applymodifierlist) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.
*ItemsApi* | [**v1CreateCategory**](docs/Api/ItemsApi.md#v1createcategory) | **POST** /v1/{location_id}/categories | Creates an item category.
*ItemsApi* | [**v1CreateDiscount**](docs/Api/ItemsApi.md#v1creatediscount) | **POST** /v1/{location_id}/discounts | Creates a discount.
*ItemsApi* | [**v1CreateFee**](docs/Api/ItemsApi.md#v1createfee) | **POST** /v1/{location_id}/fees | Creates a fee (tax).
*ItemsApi* | [**v1CreateItem**](docs/Api/ItemsApi.md#v1createitem) | **POST** /v1/{location_id}/items | Creates an item and at least one variation for it.
*ItemsApi* | [**v1CreateModifierList**](docs/Api/ItemsApi.md#v1createmodifierlist) | **POST** /v1/{location_id}/modifier-lists | Creates an item modifier list and at least one modifier option for it.
*ItemsApi* | [**v1CreateModifierOption**](docs/Api/ItemsApi.md#v1createmodifieroption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | Creates an item modifier option and adds it to a modifier list.
*ItemsApi* | [**v1CreatePage**](docs/Api/ItemsApi.md#v1createpage) | **POST** /v1/{location_id}/pages | Creates a Favorites page in Square Register.
*ItemsApi* | [**v1CreateVariation**](docs/Api/ItemsApi.md#v1createvariation) | **POST** /v1/{location_id}/items/{item_id}/variations | Creates an item variation for an existing item.
*ItemsApi* | [**v1DeleteCategory**](docs/Api/ItemsApi.md#v1deletecategory) | **DELETE** /v1/{location_id}/categories/{category_id} | Deletes an existing item category.
*ItemsApi* | [**v1DeleteDiscount**](docs/Api/ItemsApi.md#v1deletediscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | Deletes an existing discount.
*ItemsApi* | [**v1DeleteFee**](docs/Api/ItemsApi.md#v1deletefee) | **DELETE** /v1/{location_id}/fees/{fee_id} | Deletes an existing fee (tax).
*ItemsApi* | [**v1DeleteItem**](docs/Api/ItemsApi.md#v1deleteitem) | **DELETE** /v1/{location_id}/items/{item_id} | Deletes an existing item and all item variations associated with it.
*ItemsApi* | [**v1DeleteModifierList**](docs/Api/ItemsApi.md#v1deletemodifierlist) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | Deletes an existing item modifier list and all modifier options associated with it.
*ItemsApi* | [**v1DeleteModifierOption**](docs/Api/ItemsApi.md#v1deletemodifieroption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Deletes an existing item modifier option from a modifier list.
*ItemsApi* | [**v1DeletePage**](docs/Api/ItemsApi.md#v1deletepage) | **DELETE** /v1/{location_id}/pages/{page_id} | Deletes an existing Favorites page and all of its cells.
*ItemsApi* | [**v1DeletePageCell**](docs/Api/ItemsApi.md#v1deletepagecell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | Deletes a cell from a Favorites page in Square Register.
*ItemsApi* | [**v1DeleteVariation**](docs/Api/ItemsApi.md#v1deletevariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Deletes an existing item variation from an item.
*ItemsApi* | [**v1ListCategories**](docs/Api/ItemsApi.md#v1listcategories) | **GET** /v1/{location_id}/categories | Lists all of a location&#39;s item categories.
*ItemsApi* | [**v1ListDiscounts**](docs/Api/ItemsApi.md#v1listdiscounts) | **GET** /v1/{location_id}/discounts | Lists all of a location&#39;s discounts.
*ItemsApi* | [**v1ListFees**](docs/Api/ItemsApi.md#v1listfees) | **GET** /v1/{location_id}/fees | Lists all of a location&#39;s fees (taxes).
*ItemsApi* | [**v1ListInventory**](docs/Api/ItemsApi.md#v1listinventory) | **GET** /v1/{location_id}/inventory | Provides inventory information for all of a merchant&#39;s inventory-enabled item variations.
*ItemsApi* | [**v1ListItems**](docs/Api/ItemsApi.md#v1listitems) | **GET** /v1/{location_id}/items | Provides summary information for all of a location&#39;s items.
*ItemsApi* | [**v1ListModifierLists**](docs/Api/ItemsApi.md#v1listmodifierlists) | **GET** /v1/{location_id}/modifier-lists | Lists all of a location&#39;s modifier lists.
*ItemsApi* | [**v1ListPages**](docs/Api/ItemsApi.md#v1listpages) | **GET** /v1/{location_id}/pages | Lists all of a location&#39;s Favorites pages in Square Register.
*ItemsApi* | [**v1RemoveFee**](docs/Api/ItemsApi.md#v1removefee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.
*ItemsApi* | [**v1RemoveModifierList**](docs/Api/ItemsApi.md#v1removemodifierlist) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.
*ItemsApi* | [**v1RetrieveItem**](docs/Api/ItemsApi.md#v1retrieveitem) | **GET** /v1/{location_id}/items/{item_id} | Provides the details for a single item, including associated modifier lists and fees.
*ItemsApi* | [**v1RetrieveModifierList**](docs/Api/ItemsApi.md#v1retrievemodifierlist) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | Provides the details for a single modifier list.
*ItemsApi* | [**v1UpdateCategory**](docs/Api/ItemsApi.md#v1updatecategory) | **PUT** /v1/{location_id}/categories/{category_id} | Modifies the details of an existing item category.
*ItemsApi* | [**v1UpdateDiscount**](docs/Api/ItemsApi.md#v1updatediscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | Modifies the details of an existing discount.
*ItemsApi* | [**v1UpdateFee**](docs/Api/ItemsApi.md#v1updatefee) | **PUT** /v1/{location_id}/fees/{fee_id} | Modifies the details of an existing fee (tax).
*ItemsApi* | [**v1UpdateItem**](docs/Api/ItemsApi.md#v1updateitem) | **PUT** /v1/{location_id}/items/{item_id} | Modifies the core details of an existing item.
*ItemsApi* | [**v1UpdateModifierList**](docs/Api/ItemsApi.md#v1updatemodifierlist) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | Modifies the details of an existing item modifier list.
*ItemsApi* | [**v1UpdateModifierOption**](docs/Api/ItemsApi.md#v1updatemodifieroption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Modifies the details of an existing item modifier option.
*ItemsApi* | [**v1UpdatePage**](docs/Api/ItemsApi.md#v1updatepage) | **PUT** /v1/{location_id}/pages/{page_id} | Modifies the details of a Favorites page in Square Register.
*ItemsApi* | [**v1UpdatePageCell**](docs/Api/ItemsApi.md#v1updatepagecell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | Modifies a cell of a Favorites page in Square Register.
*ItemsApi* | [**v1UpdateVariation**](docs/Api/ItemsApi.md#v1updatevariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Modifies the details of an existing item variation.
*LocationApi* | [**listLocations**](docs/Api/LocationApi.md#listlocations) | **GET** /v2/locations | ListLocations
*LocationApi* | [**v1ListLocations**](docs/Api/LocationApi.md#v1listlocations) | **GET** /v1/me/locations | Provides details for a business&#39;s locations, including their IDs.
*LocationApi* | [**v1RetrieveBusiness**](docs/Api/LocationApi.md#v1retrievebusiness) | **GET** /v1/me | Get a business&#39;s information.
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
*RefundApi* | [**listRefunds**](docs/Api/RefundApi.md#listrefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
*TransactionApi* | [**captureTransaction**](docs/Api/TransactionApi.md#capturetransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
*TransactionApi* | [**charge**](docs/Api/TransactionApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
*TransactionApi* | [**listTransactions**](docs/Api/TransactionApi.md#listtransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
*TransactionApi* | [**retrieveTransaction**](docs/Api/TransactionApi.md#retrievetransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
*TransactionApi* | [**voidTransaction**](docs/Api/TransactionApi.md#voidtransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction
*TransactionsApi* | [**v1CreateRefund**](docs/Api/TransactionsApi.md#v1createrefund) | **POST** /v1/{location_id}/refunds | Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.
*TransactionsApi* | [**v1ListBankAccounts**](docs/Api/TransactionsApi.md#v1listbankaccounts) | **GET** /v1/{location_id}/bank-accounts | Provides non-confidential details for all of a location&#39;s associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
*TransactionsApi* | [**v1ListOrders**](docs/Api/TransactionsApi.md#v1listorders) | **GET** /v1/{location_id}/orders | Provides summary information for a merchant&#39;s online store orders.
*TransactionsApi* | [**v1ListPayments**](docs/Api/TransactionsApi.md#v1listpayments) | **GET** /v1/{location_id}/payments | Provides summary information for all payments taken by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates.
*TransactionsApi* | [**v1ListRefunds**](docs/Api/TransactionsApi.md#v1listrefunds) | **GET** /v1/{location_id}/refunds | Provides the details for all refunds initiated by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length.
*TransactionsApi* | [**v1ListSettlements**](docs/Api/TransactionsApi.md#v1listsettlements) | **GET** /v1/{location_id}/settlements | Provides summary information for all deposits and withdrawals initiated by Square to a merchant&#39;s bank account during a date range. Date ranges cannot exceed one year in length.
*TransactionsApi* | [**v1RetrieveBankAccount**](docs/Api/TransactionsApi.md#v1retrievebankaccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | Provides non-confidential details for a merchant&#39;s associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
*TransactionsApi* | [**v1RetrieveOrder**](docs/Api/TransactionsApi.md#v1retrieveorder) | **GET** /v1/{location_id}/orders/{order_id} | Provides comprehensive information for a single online store order, including the order&#39;s history.
*TransactionsApi* | [**v1RetrievePayment**](docs/Api/TransactionsApi.md#v1retrievepayment) | **GET** /v1/{location_id}/payments/{payment_id} | Provides comprehensive information for a single payment.
*TransactionsApi* | [**v1RetrieveSettlement**](docs/Api/TransactionsApi.md#v1retrievesettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | Provides comprehensive information for a single settlement, including the entries that contribute to the settlement&#39;s total.
*TransactionsApi* | [**v1UpdateOrder**](docs/Api/TransactionsApi.md#v1updateorder) | **PUT** /v1/{location_id}/orders/{order_id} | Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [CaptureTransactionRequest](docs/Model/CaptureTransactionRequest.md)
 - [CaptureTransactionResponse](docs/Model/CaptureTransactionResponse.md)
 - [Card](docs/Model/Card.md)
 - [CardBrand](docs/Model/CardBrand.md)
 - [ChargeRequest](docs/Model/ChargeRequest.md)
 - [ChargeResponse](docs/Model/ChargeResponse.md)
 - [Checkout](docs/Model/Checkout.md)
 - [Country](docs/Model/Country.md)
 - [CreateCheckoutRequest](docs/Model/CreateCheckoutRequest.md)
 - [CreateCheckoutResponse](docs/Model/CreateCheckoutResponse.md)
 - [CreateCustomerCardRequest](docs/Model/CreateCustomerCardRequest.md)
 - [CreateCustomerCardResponse](docs/Model/CreateCustomerCardResponse.md)
 - [CreateCustomerRequest](docs/Model/CreateCustomerRequest.md)
 - [CreateCustomerResponse](docs/Model/CreateCustomerResponse.md)
 - [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
 - [CreateOrderRequestLineItem](docs/Model/CreateOrderRequestLineItem.md)
 - [CreateOrderRequestOrder](docs/Model/CreateOrderRequestOrder.md)
 - [CreateRefundRequest](docs/Model/CreateRefundRequest.md)
 - [CreateRefundResponse](docs/Model/CreateRefundResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerGroupInfo](docs/Model/CustomerGroupInfo.md)
 - [CustomerPreferences](docs/Model/CustomerPreferences.md)
 - [DeleteCustomerCardRequest](docs/Model/DeleteCustomerCardRequest.md)
 - [DeleteCustomerCardResponse](docs/Model/DeleteCustomerCardResponse.md)
 - [DeleteCustomerRequest](docs/Model/DeleteCustomerRequest.md)
 - [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
 - [Device](docs/Model/Device.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCategory](docs/Model/ErrorCategory.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [ListCustomersRequest](docs/Model/ListCustomersRequest.md)
 - [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
 - [ListLocationsRequest](docs/Model/ListLocationsRequest.md)
 - [ListLocationsResponse](docs/Model/ListLocationsResponse.md)
 - [ListRefundsRequest](docs/Model/ListRefundsRequest.md)
 - [ListRefundsResponse](docs/Model/ListRefundsResponse.md)
 - [ListTransactionsRequest](docs/Model/ListTransactionsRequest.md)
 - [ListTransactionsResponse](docs/Model/ListTransactionsResponse.md)
 - [Location](docs/Model/Location.md)
 - [LocationCapability](docs/Model/LocationCapability.md)
 - [Money](docs/Model/Money.md)
 - [Order](docs/Model/Order.md)
 - [OrderLineItem](docs/Model/OrderLineItem.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundStatus](docs/Model/RefundStatus.md)
 - [RetrieveCustomerRequest](docs/Model/RetrieveCustomerRequest.md)
 - [RetrieveCustomerResponse](docs/Model/RetrieveCustomerResponse.md)
 - [RetrieveTransactionRequest](docs/Model/RetrieveTransactionRequest.md)
 - [RetrieveTransactionResponse](docs/Model/RetrieveTransactionResponse.md)
 - [SortOrder](docs/Model/SortOrder.md)
 - [Tender](docs/Model/Tender.md)
 - [TenderCardDetails](docs/Model/TenderCardDetails.md)
 - [TenderCardDetailsEntryMethod](docs/Model/TenderCardDetailsEntryMethod.md)
 - [TenderCardDetailsStatus](docs/Model/TenderCardDetailsStatus.md)
 - [TenderCashDetails](docs/Model/TenderCashDetails.md)
 - [TenderType](docs/Model/TenderType.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionProduct](docs/Model/TransactionProduct.md)
 - [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
 - [UpdateCustomerResponse](docs/Model/UpdateCustomerResponse.md)
 - [V1AdjustInventoryRequest](docs/Model/V1AdjustInventoryRequest.md)
 - [V1BankAccount](docs/Model/V1BankAccount.md)
 - [V1CashDrawerEvent](docs/Model/V1CashDrawerEvent.md)
 - [V1CashDrawerShift](docs/Model/V1CashDrawerShift.md)
 - [V1Category](docs/Model/V1Category.md)
 - [V1CreateRefundRequest](docs/Model/V1CreateRefundRequest.md)
 - [V1Discount](docs/Model/V1Discount.md)
 - [V1Employee](docs/Model/V1Employee.md)
 - [V1EmployeeRole](docs/Model/V1EmployeeRole.md)
 - [V1Fee](docs/Model/V1Fee.md)
 - [V1InventoryEntry](docs/Model/V1InventoryEntry.md)
 - [V1Item](docs/Model/V1Item.md)
 - [V1ItemImage](docs/Model/V1ItemImage.md)
 - [V1Merchant](docs/Model/V1Merchant.md)
 - [V1MerchantLocationDetails](docs/Model/V1MerchantLocationDetails.md)
 - [V1ModifierList](docs/Model/V1ModifierList.md)
 - [V1ModifierOption](docs/Model/V1ModifierOption.md)
 - [V1Money](docs/Model/V1Money.md)
 - [V1Order](docs/Model/V1Order.md)
 - [V1OrderHistoryEntry](docs/Model/V1OrderHistoryEntry.md)
 - [V1Page](docs/Model/V1Page.md)
 - [V1PageCell](docs/Model/V1PageCell.md)
 - [V1Payment](docs/Model/V1Payment.md)
 - [V1PaymentDiscount](docs/Model/V1PaymentDiscount.md)
 - [V1PaymentItemDetail](docs/Model/V1PaymentItemDetail.md)
 - [V1PaymentItemization](docs/Model/V1PaymentItemization.md)
 - [V1PaymentModifier](docs/Model/V1PaymentModifier.md)
 - [V1PaymentTax](docs/Model/V1PaymentTax.md)
 - [V1PhoneNumber](docs/Model/V1PhoneNumber.md)
 - [V1Refund](docs/Model/V1Refund.md)
 - [V1Settlement](docs/Model/V1Settlement.md)
 - [V1SettlementEntry](docs/Model/V1SettlementEntry.md)
 - [V1Tender](docs/Model/V1Tender.md)
 - [V1Timecard](docs/Model/V1Timecard.md)
 - [V1TimecardEvent](docs/Model/V1TimecardEvent.md)
 - [V1UpdateModifierListRequest](docs/Model/V1UpdateModifierListRequest.md)
 - [V1UpdateOrderRequest](docs/Model/V1UpdateOrderRequest.md)
 - [V1Variation](docs/Model/V1Variation.md)
 - [VoidTransactionRequest](docs/Model/VoidTransactionRequest.md)
 - [VoidTransactionResponse](docs/Model/VoidTransactionResponse.md)


## Documentation For Authorization

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: `https://connect.squareup.com/oauth2/authorize?<PARAMETERS>`
- **Scopes**: 
 - **MERCHANT_PROFILE_READ**: GET endpoints related to a merchant's business and location entities. Almost all Connect API applications need this permission in order to obtain a merchant's location IDs
 - **PAYMENTS_READ**: GET endpoints related to transactions and refunds
 - **PAYMENTS_WRITE**: POST, PUT, and DELETE endpoints related to transactions and refunds. E-commerce applications must request this permission
 - **CUSTOMERS_READ**: GET endpoints related to customer management
 - **CUSTOMERS_WRITE**: POST, PUT, and DELETE endpoints related to customer management
 - **SETTLEMENTS_READ**: GET endpoints related to settlements (deposits)
 - **BANK_ACCOUNTS_READ**: GET endpoints related to a merchant's bank accounts
 - **ITEMS_READ**: GET endpoints related to a merchant's item library
 - **ITEMS_WRITE**: POST, PUT, and DELETE endpoints related to a merchant's item library
 - **ORDERS_READ**: GET endpoints related to a merchant's Square online store.
 - **ORDERS_WRITE**: POST, PUT, and DELETE endpoints related to a merchant's Square online store
 - **EMPLOYEES_READ**: GET endpoints related to employee management
 - **EMPLOYEES_WRITE**: POST, PUT, and DELETE endpoints related to employee management
 - **TIMECARDS_READ**: GET endpoints related to employee timecards
 - **TIMECARDS_WRITE**: POST, PUT, and DELETE endpoints related to employee timecards


Contributing
------------

Send bug reports, feature requests, and code contributions to the [API
specifications repository](https://github.com/square/connect-api-specification),
as this repository contains only the generated SDK code. If you notice something wrong about this SDK in particular, feel free to raise an issue [here](https://github.com/square/connect-php-sdk/issues). 

License
-------

```
Copyright 2017 Square, Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```