![Square logo]

# Square Connect PHP SDK

---

[![Build Status](https://travis-ci.org/square/connect-php-sdk.svg?branch=master)](https://travis-ci.org/square/connect-php-sdk)
[![PHP version](https://badge.fury.io/ph/square%2Fconnect.svg)](https://badge.fury.io/ph/square%2Fconnect)
[![Apache-2 license](https://img.shields.io/badge/license-Apache2-brightgreen.svg)](https://www.apache.org/licenses/LICENSE-2.0)
==================
## NOTICE: Square Connect PHP SDK will be replaced in Q2, 2020
This Square Connect SDK will enter a security maintenance phase in Q2 2020 and will be RETIRED (EOL) in Q4 2020. In the security maintenance phase, this SDK will continue to receive support and security patches but will no longer receive bug fixes or product updates. Once it is retired, support and security patches will no longer be available.  A new SDK, more bespoke to the language, will be available once this SDK enters its security maintenance phase.
The SDK itself will continue to work indefinitely until such time that the underlying APIs are retired at which point portions of the SDK may stop functioning.  For a full list of API retirement dates, please see our [Square API Lifecycle documentation](https://developer.squareup.com/docs/build-basics/api-lifecycle#deprecated-apis).

| Security Maintenance | New SDK Release | Retired (EOL)  |
| ------------- |-------------| -----|
| Q2, 2020      | Q2, 2020 | Q4, 2020 |

**If you have feedback about the new SDKs, or just want to talk to other Square Developers, request an invite to the new [slack community for Square Developers](https://squ.re/2JkDBcO)**

This repository contains a generated PHP client SDK for the Square Connect APIs. Check out our [API
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

##### Option 1: With Composer

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
##### Option 2: From GitHub
Clone this repository, or download the zip into your project's folder and then add the following line in your code:
```
require('connect-php-sdk/autoload.php');
```
*Note: you might have to change the path depending on your project's folder structure.*
##### Option 3: Without Command Line Access
If you cannot access the command line for your server, you can also install the SDK from github. Download the SDK from github with [this link](https://github.com/square/connect-php-sdk/archive/master.zip), unzip it and add the following line to your php files that will need to access the SDK:
```
require('connect-php-sdk-master/autoload.php');
```
*Note: you might have to change the path depending on where you place the SDK in relation to your other `php` files.*

## Getting Started

Please follow the [installation procedure](#installation--usage):


### Retrieve your location IDs
```php
require 'vendor/autoload.php';

$access_token = 'YOUR_ACCESS_TOKEN';
# setup authorization
$api_config = new \SquareConnect\Configuration();
$api_config->setHost("https://connect.squareup.com");
$api_config->setAccessToken($access_token);
$api_client = new \SquareConnect\ApiClient($api_config);
# create an instance of the Location API
$locations_api = new \SquareConnect\Api\LocationsApi($api_client);

try {
  $locations = $locations_api->listLocations();
  print_r($locations->getLocations());
} catch (\SquareConnect\ApiException $e) {
  echo "Caught exception!<br/>";
  print_r("<strong>Response body:</strong><br/>");
  echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
  echo "<br/><strong>Response headers:</strong><br/>";
  echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
  exit(1);
}
```

### Charge the card nonce
```php
require 'vendor/autoload.php';

$access_token = 'YOUR_ACCESS_TOKEN';

# setup authorization
$api_config = new \SquareConnect\Configuration();
$api_config->setHost("https://connect.squareup.com");
$api_config->setAccessToken($access_token);
$api_client = new \SquareConnect\ApiClient($api_config);

# create an instance of the Payments API class
$payments_api = new \SquareConnect\Api\PaymentsApi($api_client);
$location_id = 'YOUR_LOCATION_ID'
$nonce = 'YOUR_NONCE'

$body = new \SquareConnect\Model\CreatePaymentRequest();

$amountMoney = new \SquareConnect\Model\Money();

# Monetary amounts are specified in the smallest unit of the applicable currency.
# This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
$amountMoney->setAmount(100);
$amountMoney->setCurrency("USD");

$body->setSourceId($nonce);
$body->setAmountMoney($amountMoney);
$body->setLocationId($location_id);

# Every payment you process with the SDK must have a unique idempotency key.
# If you're unsure whether a particular payment succeeded, you can reattempt
# it with the same idempotency key without worrying about double charging
# the buyer.
$body->setIdempotencyKey(uniqid());

try {
    $result = $payments_api->createPayment($body);
    print_r($result);
} catch (\SquareConnect\ApiException $e) {
    echo "Exception when calling PaymentsApi->createPayment:";
    var_dump($e->getResponseBody());
}
```

### How to configure sandbox environment
```php
require 'vendor/autoload.php';

$access_token = 'YOUR_SANDBOX_ACCESS_TOKEN';
# setup authorization
$api_config = new \SquareConnect\Configuration();
$api_config->setHost("https://connect.squareupsandbox.com");
$api_config->setAccessToken($access_token);
$api_client = new \SquareConnect\ApiClient($api_config);
# create an instance of the Location API
$locations_api = new \SquareConnect\Api\LocationsApi($api_client);
```

## Documentation for API Endpoints

All URIs are relative to *https://connect.squareup.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplePayApi* | [**registerDomain**](Api/ApplePayApi.md#registerdomain) | **POST** /v2/apple-pay/domains | RegisterDomain
*BankAccountsApi* | [**getBankAccount**](Api/BankAccountsApi.md#getbankaccount) | **GET** /v2/bank-accounts/{bank_account_id} | GetBankAccount
*BankAccountsApi* | [**getBankAccountByV1Id**](Api/BankAccountsApi.md#getbankaccountbyv1id) | **GET** /v2/bank-accounts/by-v1-id/{v1_bank_account_id} | GetBankAccountByV1Id
*BankAccountsApi* | [**listBankAccounts**](Api/BankAccountsApi.md#listbankaccounts) | **GET** /v2/bank-accounts | ListBankAccounts
*CashDrawersApi* | [**listCashDrawerShiftEvents**](Api/CashDrawersApi.md#listcashdrawershiftevents) | **GET** /v2/cash-drawers/shifts/{shift_id}/events | ListCashDrawerShiftEvents
*CashDrawersApi* | [**listCashDrawerShifts**](Api/CashDrawersApi.md#listcashdrawershifts) | **GET** /v2/cash-drawers/shifts | ListCashDrawerShifts
*CashDrawersApi* | [**retrieveCashDrawerShift**](Api/CashDrawersApi.md#retrievecashdrawershift) | **GET** /v2/cash-drawers/shifts/{shift_id} | RetrieveCashDrawerShift
*CatalogApi* | [**batchDeleteCatalogObjects**](Api/CatalogApi.md#batchdeletecatalogobjects) | **POST** /v2/catalog/batch-delete | BatchDeleteCatalogObjects
*CatalogApi* | [**batchRetrieveCatalogObjects**](Api/CatalogApi.md#batchretrievecatalogobjects) | **POST** /v2/catalog/batch-retrieve | BatchRetrieveCatalogObjects
*CatalogApi* | [**batchUpsertCatalogObjects**](Api/CatalogApi.md#batchupsertcatalogobjects) | **POST** /v2/catalog/batch-upsert | BatchUpsertCatalogObjects
*CatalogApi* | [**catalogInfo**](Api/CatalogApi.md#cataloginfo) | **GET** /v2/catalog/info | CatalogInfo
*CatalogApi* | [**deleteCatalogObject**](Api/CatalogApi.md#deletecatalogobject) | **DELETE** /v2/catalog/object/{object_id} | DeleteCatalogObject
*CatalogApi* | [**listCatalog**](Api/CatalogApi.md#listcatalog) | **GET** /v2/catalog/list | ListCatalog
*CatalogApi* | [**retrieveCatalogObject**](Api/CatalogApi.md#retrievecatalogobject) | **GET** /v2/catalog/object/{object_id} | RetrieveCatalogObject
*CatalogApi* | [**searchCatalogObjects**](Api/CatalogApi.md#searchcatalogobjects) | **POST** /v2/catalog/search | SearchCatalogObjects
*CatalogApi* | [**updateItemModifierLists**](Api/CatalogApi.md#updateitemmodifierlists) | **POST** /v2/catalog/update-item-modifier-lists | UpdateItemModifierLists
*CatalogApi* | [**updateItemTaxes**](Api/CatalogApi.md#updateitemtaxes) | **POST** /v2/catalog/update-item-taxes | UpdateItemTaxes
*CatalogApi* | [**upsertCatalogObject**](Api/CatalogApi.md#upsertcatalogobject) | **POST** /v2/catalog/object | UpsertCatalogObject
*CheckoutApi* | [**createCheckout**](Api/CheckoutApi.md#createcheckout) | **POST** /v2/locations/{location_id}/checkouts | CreateCheckout
*CustomerGroupsApi* | [**createCustomerGroup**](Api/CustomerGroupsApi.md#createcustomergroup) | **POST** /v2/customers/groups | CreateCustomerGroup
*CustomerGroupsApi* | [**deleteCustomerGroup**](Api/CustomerGroupsApi.md#deletecustomergroup) | **DELETE** /v2/customers/groups/{group_id} | DeleteCustomerGroup
*CustomerGroupsApi* | [**listCustomerGroups**](Api/CustomerGroupsApi.md#listcustomergroups) | **GET** /v2/customers/groups | ListCustomerGroups
*CustomerGroupsApi* | [**retrieveCustomerGroup**](Api/CustomerGroupsApi.md#retrievecustomergroup) | **GET** /v2/customers/groups/{group_id} | RetrieveCustomerGroup
*CustomerGroupsApi* | [**updateCustomerGroup**](Api/CustomerGroupsApi.md#updatecustomergroup) | **PUT** /v2/customers/groups/{group_id} | UpdateCustomerGroup
*CustomerSegmentsApi* | [**listCustomerSegments**](Api/CustomerSegmentsApi.md#listcustomersegments) | **GET** /v2/customers/segments | ListCustomerSegments
*CustomerSegmentsApi* | [**retrieveCustomerSegment**](Api/CustomerSegmentsApi.md#retrievecustomersegment) | **GET** /v2/customers/segments/{segment_id} | RetrieveCustomerSegment
*CustomersApi* | [**addGroupToCustomer**](Api/CustomersApi.md#addgrouptocustomer) | **PUT** /v2/customers/{customer_id}/groups/{group_id} | AddGroupToCustomer
*CustomersApi* | [**createCustomer**](Api/CustomersApi.md#createcustomer) | **POST** /v2/customers | CreateCustomer
*CustomersApi* | [**createCustomerCard**](Api/CustomersApi.md#createcustomercard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
*CustomersApi* | [**deleteCustomer**](Api/CustomersApi.md#deletecustomer) | **DELETE** /v2/customers/{customer_id} | DeleteCustomer
*CustomersApi* | [**deleteCustomerCard**](Api/CustomersApi.md#deletecustomercard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard
*CustomersApi* | [**listCustomers**](Api/CustomersApi.md#listcustomers) | **GET** /v2/customers | ListCustomers
*CustomersApi* | [**removeGroupFromCustomer**](Api/CustomersApi.md#removegroupfromcustomer) | **DELETE** /v2/customers/{customer_id}/groups/{group_id} | RemoveGroupFromCustomer
*CustomersApi* | [**retrieveCustomer**](Api/CustomersApi.md#retrievecustomer) | **GET** /v2/customers/{customer_id} | RetrieveCustomer
*CustomersApi* | [**searchCustomers**](Api/CustomersApi.md#searchcustomers) | **POST** /v2/customers/search | SearchCustomers
*CustomersApi* | [**updateCustomer**](Api/CustomersApi.md#updatecustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer
*DevicesApi* | [**createDeviceCode**](Api/DevicesApi.md#createdevicecode) | **POST** /v2/devices/codes | CreateDeviceCode
*DevicesApi* | [**getDeviceCode**](Api/DevicesApi.md#getdevicecode) | **GET** /v2/devices/codes/{id} | GetDeviceCode
*DevicesApi* | [**listDeviceCodes**](Api/DevicesApi.md#listdevicecodes) | **GET** /v2/devices/codes | ListDeviceCodes
*DisputesApi* | [**acceptDispute**](Api/DisputesApi.md#acceptdispute) | **POST** /v2/disputes/{dispute_id}/accept | AcceptDispute
*DisputesApi* | [**createDisputeEvidenceText**](Api/DisputesApi.md#createdisputeevidencetext) | **POST** /v2/disputes/{dispute_id}/evidence_text | CreateDisputeEvidenceText
*DisputesApi* | [**listDisputeEvidence**](Api/DisputesApi.md#listdisputeevidence) | **GET** /v2/disputes/{dispute_id}/evidence | ListDisputeEvidence
*DisputesApi* | [**listDisputes**](Api/DisputesApi.md#listdisputes) | **GET** /v2/disputes | ListDisputes
*DisputesApi* | [**removeDisputeEvidence**](Api/DisputesApi.md#removedisputeevidence) | **DELETE** /v2/disputes/{dispute_id}/evidence/{evidence_id} | RemoveDisputeEvidence
*DisputesApi* | [**retrieveDispute**](Api/DisputesApi.md#retrievedispute) | **GET** /v2/disputes/{dispute_id} | RetrieveDispute
*DisputesApi* | [**retrieveDisputeEvidence**](Api/DisputesApi.md#retrievedisputeevidence) | **GET** /v2/disputes/{dispute_id}/evidence/{evidence_id} | RetrieveDisputeEvidence
*DisputesApi* | [**submitEvidence**](Api/DisputesApi.md#submitevidence) | **POST** /v2/disputes/{dispute_id}/submit-evidence | SubmitEvidence
*EmployeesApi* | [**listEmployees**](Api/EmployeesApi.md#listemployees) | **GET** /v2/employees | ListEmployees
*EmployeesApi* | [**retrieveEmployee**](Api/EmployeesApi.md#retrieveemployee) | **GET** /v2/employees/{id} | RetrieveEmployee
*InventoryApi* | [**batchChangeInventory**](Api/InventoryApi.md#batchchangeinventory) | **POST** /v2/inventory/batch-change | BatchChangeInventory
*InventoryApi* | [**batchRetrieveInventoryChanges**](Api/InventoryApi.md#batchretrieveinventorychanges) | **POST** /v2/inventory/batch-retrieve-changes | BatchRetrieveInventoryChanges
*InventoryApi* | [**batchRetrieveInventoryCounts**](Api/InventoryApi.md#batchretrieveinventorycounts) | **POST** /v2/inventory/batch-retrieve-counts | BatchRetrieveInventoryCounts
*InventoryApi* | [**retrieveInventoryAdjustment**](Api/InventoryApi.md#retrieveinventoryadjustment) | **GET** /v2/inventory/adjustment/{adjustment_id} | RetrieveInventoryAdjustment
*InventoryApi* | [**retrieveInventoryChanges**](Api/InventoryApi.md#retrieveinventorychanges) | **GET** /v2/inventory/{catalog_object_id}/changes | RetrieveInventoryChanges
*InventoryApi* | [**retrieveInventoryCount**](Api/InventoryApi.md#retrieveinventorycount) | **GET** /v2/inventory/{catalog_object_id} | RetrieveInventoryCount
*InventoryApi* | [**retrieveInventoryPhysicalCount**](Api/InventoryApi.md#retrieveinventoryphysicalcount) | **GET** /v2/inventory/physical-count/{physical_count_id} | RetrieveInventoryPhysicalCount
*LaborApi* | [**createBreakType**](Api/LaborApi.md#createbreaktype) | **POST** /v2/labor/break-types | CreateBreakType
*LaborApi* | [**createShift**](Api/LaborApi.md#createshift) | **POST** /v2/labor/shifts | CreateShift
*LaborApi* | [**deleteBreakType**](Api/LaborApi.md#deletebreaktype) | **DELETE** /v2/labor/break-types/{id} | DeleteBreakType
*LaborApi* | [**deleteShift**](Api/LaborApi.md#deleteshift) | **DELETE** /v2/labor/shifts/{id} | DeleteShift
*LaborApi* | [**getBreakType**](Api/LaborApi.md#getbreaktype) | **GET** /v2/labor/break-types/{id} | GetBreakType
*LaborApi* | [**getEmployeeWage**](Api/LaborApi.md#getemployeewage) | **GET** /v2/labor/employee-wages/{id} | GetEmployeeWage
*LaborApi* | [**getShift**](Api/LaborApi.md#getshift) | **GET** /v2/labor/shifts/{id} | GetShift
*LaborApi* | [**listBreakTypes**](Api/LaborApi.md#listbreaktypes) | **GET** /v2/labor/break-types | ListBreakTypes
*LaborApi* | [**listEmployeeWages**](Api/LaborApi.md#listemployeewages) | **GET** /v2/labor/employee-wages | ListEmployeeWages
*LaborApi* | [**listWorkweekConfigs**](Api/LaborApi.md#listworkweekconfigs) | **GET** /v2/labor/workweek-configs | ListWorkweekConfigs
*LaborApi* | [**searchShifts**](Api/LaborApi.md#searchshifts) | **POST** /v2/labor/shifts/search | SearchShifts
*LaborApi* | [**updateBreakType**](Api/LaborApi.md#updatebreaktype) | **PUT** /v2/labor/break-types/{id} | UpdateBreakType
*LaborApi* | [**updateShift**](Api/LaborApi.md#updateshift) | **PUT** /v2/labor/shifts/{id} | UpdateShift
*LaborApi* | [**updateWorkweekConfig**](Api/LaborApi.md#updateworkweekconfig) | **PUT** /v2/labor/workweek-configs/{id} | UpdateWorkweekConfig
*LocationsApi* | [**createLocation**](Api/LocationsApi.md#createlocation) | **POST** /v2/locations | CreateLocation
*LocationsApi* | [**listLocations**](Api/LocationsApi.md#listlocations) | **GET** /v2/locations | ListLocations
*LocationsApi* | [**retrieveLocation**](Api/LocationsApi.md#retrievelocation) | **GET** /v2/locations/{location_id} | RetrieveLocation
*LocationsApi* | [**updateLocation**](Api/LocationsApi.md#updatelocation) | **PUT** /v2/locations/{location_id} | UpdateLocation
*MerchantsApi* | [**listMerchants**](Api/MerchantsApi.md#listmerchants) | **GET** /v2/merchants | ListMerchants
*MerchantsApi* | [**retrieveMerchant**](Api/MerchantsApi.md#retrievemerchant) | **GET** /v2/merchants/{merchant_id} | RetrieveMerchant
*MobileAuthorizationApi* | [**createMobileAuthorizationCode**](Api/MobileAuthorizationApi.md#createmobileauthorizationcode) | **POST** /mobile/authorization-code | CreateMobileAuthorizationCode
*OAuthApi* | [**obtainToken**](Api/OAuthApi.md#obtaintoken) | **POST** /oauth2/token | ObtainToken
*OAuthApi* | [**renewToken**](Api/OAuthApi.md#renewtoken) | **POST** /oauth2/clients/{client_id}/access-token/renew | RenewToken
*OAuthApi* | [**revokeToken**](Api/OAuthApi.md#revoketoken) | **POST** /oauth2/revoke | RevokeToken
*OrdersApi* | [**batchRetrieveOrders**](Api/OrdersApi.md#batchretrieveorders) | **POST** /v2/locations/{location_id}/orders/batch-retrieve | BatchRetrieveOrders
*OrdersApi* | [**createOrder**](Api/OrdersApi.md#createorder) | **POST** /v2/locations/{location_id}/orders | CreateOrder
*OrdersApi* | [**payOrder**](Api/OrdersApi.md#payorder) | **POST** /v2/orders/{order_id}/pay | PayOrder
*OrdersApi* | [**searchOrders**](Api/OrdersApi.md#searchorders) | **POST** /v2/orders/search | SearchOrders
*OrdersApi* | [**updateOrder**](Api/OrdersApi.md#updateorder) | **PUT** /v2/locations/{location_id}/orders/{order_id} | UpdateOrder
*PaymentsApi* | [**cancelPayment**](Api/PaymentsApi.md#cancelpayment) | **POST** /v2/payments/{payment_id}/cancel | CancelPayment
*PaymentsApi* | [**cancelPaymentByIdempotencyKey**](Api/PaymentsApi.md#cancelpaymentbyidempotencykey) | **POST** /v2/payments/cancel | CancelPaymentByIdempotencyKey
*PaymentsApi* | [**completePayment**](Api/PaymentsApi.md#completepayment) | **POST** /v2/payments/{payment_id}/complete | CompletePayment
*PaymentsApi* | [**createPayment**](Api/PaymentsApi.md#createpayment) | **POST** /v2/payments | CreatePayment
*PaymentsApi* | [**getPayment**](Api/PaymentsApi.md#getpayment) | **GET** /v2/payments/{payment_id} | GetPayment
*PaymentsApi* | [**listPayments**](Api/PaymentsApi.md#listpayments) | **GET** /v2/payments | ListPayments
*RefundsApi* | [**getPaymentRefund**](Api/RefundsApi.md#getpaymentrefund) | **GET** /v2/refunds/{refund_id} | GetPaymentRefund
*RefundsApi* | [**listPaymentRefunds**](Api/RefundsApi.md#listpaymentrefunds) | **GET** /v2/refunds | ListPaymentRefunds
*RefundsApi* | [**refundPayment**](Api/RefundsApi.md#refundpayment) | **POST** /v2/refunds | RefundPayment
*ReportingApi* | [**listAdditionalRecipientReceivableRefunds**](Api/ReportingApi.md#listadditionalrecipientreceivablerefunds) | **GET** /v2/locations/{location_id}/additional-recipient-receivable-refunds | ListAdditionalRecipientReceivableRefunds
*ReportingApi* | [**listAdditionalRecipientReceivables**](Api/ReportingApi.md#listadditionalrecipientreceivables) | **GET** /v2/locations/{location_id}/additional-recipient-receivables | ListAdditionalRecipientReceivables
*TerminalApi* | [**cancelTerminalCheckout**](Api/TerminalApi.md#cancelterminalcheckout) | **POST** /v2/terminals/checkouts/{checkout_id}/cancel | CancelTerminalCheckout
*TerminalApi* | [**createTerminalCheckout**](Api/TerminalApi.md#createterminalcheckout) | **POST** /v2/terminals/checkouts | CreateTerminalCheckout
*TerminalApi* | [**getTerminalCheckout**](Api/TerminalApi.md#getterminalcheckout) | **GET** /v2/terminals/checkouts/{checkout_id} | GetTerminalCheckout
*TerminalApi* | [**searchTerminalCheckouts**](Api/TerminalApi.md#searchterminalcheckouts) | **POST** /v2/terminals/checkouts/search | SearchTerminalCheckouts
*TransactionsApi* | [**captureTransaction**](Api/TransactionsApi.md#capturetransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
*TransactionsApi* | [**charge**](Api/TransactionsApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
*TransactionsApi* | [**createRefund**](Api/TransactionsApi.md#createrefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
*TransactionsApi* | [**listRefunds**](Api/TransactionsApi.md#listrefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
*TransactionsApi* | [**listTransactions**](Api/TransactionsApi.md#listtransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
*TransactionsApi* | [**retrieveTransaction**](Api/TransactionsApi.md#retrievetransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
*TransactionsApi* | [**voidTransaction**](Api/TransactionsApi.md#voidtransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction
*V1EmployeesApi* | [**createEmployee**](Api/V1EmployeesApi.md#createemployee) | **POST** /v1/me/employees | CreateEmployee
*V1EmployeesApi* | [**createEmployeeRole**](Api/V1EmployeesApi.md#createemployeerole) | **POST** /v1/me/roles | CreateEmployeeRole
*V1EmployeesApi* | [**createTimecard**](Api/V1EmployeesApi.md#createtimecard) | **POST** /v1/me/timecards | CreateTimecard
*V1EmployeesApi* | [**deleteTimecard**](Api/V1EmployeesApi.md#deletetimecard) | **DELETE** /v1/me/timecards/{timecard_id} | DeleteTimecard
*V1EmployeesApi* | [**listCashDrawerShifts**](Api/V1EmployeesApi.md#listcashdrawershifts) | **GET** /v1/{location_id}/cash-drawer-shifts | ListCashDrawerShifts
*V1EmployeesApi* | [**listEmployeeRoles**](Api/V1EmployeesApi.md#listemployeeroles) | **GET** /v1/me/roles | ListEmployeeRoles
*V1EmployeesApi* | [**listEmployees**](Api/V1EmployeesApi.md#listemployees) | **GET** /v1/me/employees | ListEmployees
*V1EmployeesApi* | [**listTimecardEvents**](Api/V1EmployeesApi.md#listtimecardevents) | **GET** /v1/me/timecards/{timecard_id}/events | ListTimecardEvents
*V1EmployeesApi* | [**listTimecards**](Api/V1EmployeesApi.md#listtimecards) | **GET** /v1/me/timecards | ListTimecards
*V1EmployeesApi* | [**retrieveCashDrawerShift**](Api/V1EmployeesApi.md#retrievecashdrawershift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | RetrieveCashDrawerShift
*V1EmployeesApi* | [**retrieveEmployee**](Api/V1EmployeesApi.md#retrieveemployee) | **GET** /v1/me/employees/{employee_id} | RetrieveEmployee
*V1EmployeesApi* | [**retrieveEmployeeRole**](Api/V1EmployeesApi.md#retrieveemployeerole) | **GET** /v1/me/roles/{role_id} | RetrieveEmployeeRole
*V1EmployeesApi* | [**retrieveTimecard**](Api/V1EmployeesApi.md#retrievetimecard) | **GET** /v1/me/timecards/{timecard_id} | RetrieveTimecard
*V1EmployeesApi* | [**updateEmployee**](Api/V1EmployeesApi.md#updateemployee) | **PUT** /v1/me/employees/{employee_id} | UpdateEmployee
*V1EmployeesApi* | [**updateEmployeeRole**](Api/V1EmployeesApi.md#updateemployeerole) | **PUT** /v1/me/roles/{role_id} | UpdateEmployeeRole
*V1EmployeesApi* | [**updateTimecard**](Api/V1EmployeesApi.md#updatetimecard) | **PUT** /v1/me/timecards/{timecard_id} | UpdateTimecard
*V1ItemsApi* | [**adjustInventory**](Api/V1ItemsApi.md#adjustinventory) | **POST** /v1/{location_id}/inventory/{variation_id} | AdjustInventory
*V1ItemsApi* | [**applyFee**](Api/V1ItemsApi.md#applyfee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | ApplyFee
*V1ItemsApi* | [**applyModifierList**](Api/V1ItemsApi.md#applymodifierlist) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | ApplyModifierList
*V1ItemsApi* | [**createCategory**](Api/V1ItemsApi.md#createcategory) | **POST** /v1/{location_id}/categories | CreateCategory
*V1ItemsApi* | [**createDiscount**](Api/V1ItemsApi.md#creatediscount) | **POST** /v1/{location_id}/discounts | CreateDiscount
*V1ItemsApi* | [**createFee**](Api/V1ItemsApi.md#createfee) | **POST** /v1/{location_id}/fees | CreateFee
*V1ItemsApi* | [**createItem**](Api/V1ItemsApi.md#createitem) | **POST** /v1/{location_id}/items | CreateItem
*V1ItemsApi* | [**createModifierList**](Api/V1ItemsApi.md#createmodifierlist) | **POST** /v1/{location_id}/modifier-lists | CreateModifierList
*V1ItemsApi* | [**createModifierOption**](Api/V1ItemsApi.md#createmodifieroption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | CreateModifierOption
*V1ItemsApi* | [**createPage**](Api/V1ItemsApi.md#createpage) | **POST** /v1/{location_id}/pages | CreatePage
*V1ItemsApi* | [**createVariation**](Api/V1ItemsApi.md#createvariation) | **POST** /v1/{location_id}/items/{item_id}/variations | CreateVariation
*V1ItemsApi* | [**deleteCategory**](Api/V1ItemsApi.md#deletecategory) | **DELETE** /v1/{location_id}/categories/{category_id} | DeleteCategory
*V1ItemsApi* | [**deleteDiscount**](Api/V1ItemsApi.md#deletediscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | DeleteDiscount
*V1ItemsApi* | [**deleteFee**](Api/V1ItemsApi.md#deletefee) | **DELETE** /v1/{location_id}/fees/{fee_id} | DeleteFee
*V1ItemsApi* | [**deleteItem**](Api/V1ItemsApi.md#deleteitem) | **DELETE** /v1/{location_id}/items/{item_id} | DeleteItem
*V1ItemsApi* | [**deleteModifierList**](Api/V1ItemsApi.md#deletemodifierlist) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | DeleteModifierList
*V1ItemsApi* | [**deleteModifierOption**](Api/V1ItemsApi.md#deletemodifieroption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | DeleteModifierOption
*V1ItemsApi* | [**deletePage**](Api/V1ItemsApi.md#deletepage) | **DELETE** /v1/{location_id}/pages/{page_id} | DeletePage
*V1ItemsApi* | [**deletePageCell**](Api/V1ItemsApi.md#deletepagecell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | DeletePageCell
*V1ItemsApi* | [**deleteVariation**](Api/V1ItemsApi.md#deletevariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | DeleteVariation
*V1ItemsApi* | [**listCategories**](Api/V1ItemsApi.md#listcategories) | **GET** /v1/{location_id}/categories | ListCategories
*V1ItemsApi* | [**listDiscounts**](Api/V1ItemsApi.md#listdiscounts) | **GET** /v1/{location_id}/discounts | ListDiscounts
*V1ItemsApi* | [**listFees**](Api/V1ItemsApi.md#listfees) | **GET** /v1/{location_id}/fees | ListFees
*V1ItemsApi* | [**listInventory**](Api/V1ItemsApi.md#listinventory) | **GET** /v1/{location_id}/inventory | ListInventory
*V1ItemsApi* | [**listItems**](Api/V1ItemsApi.md#listitems) | **GET** /v1/{location_id}/items | ListItems
*V1ItemsApi* | [**listModifierLists**](Api/V1ItemsApi.md#listmodifierlists) | **GET** /v1/{location_id}/modifier-lists | ListModifierLists
*V1ItemsApi* | [**listPages**](Api/V1ItemsApi.md#listpages) | **GET** /v1/{location_id}/pages | ListPages
*V1ItemsApi* | [**removeFee**](Api/V1ItemsApi.md#removefee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | RemoveFee
*V1ItemsApi* | [**removeModifierList**](Api/V1ItemsApi.md#removemodifierlist) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | RemoveModifierList
*V1ItemsApi* | [**retrieveItem**](Api/V1ItemsApi.md#retrieveitem) | **GET** /v1/{location_id}/items/{item_id} | RetrieveItem
*V1ItemsApi* | [**retrieveModifierList**](Api/V1ItemsApi.md#retrievemodifierlist) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | RetrieveModifierList
*V1ItemsApi* | [**updateCategory**](Api/V1ItemsApi.md#updatecategory) | **PUT** /v1/{location_id}/categories/{category_id} | UpdateCategory
*V1ItemsApi* | [**updateDiscount**](Api/V1ItemsApi.md#updatediscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | UpdateDiscount
*V1ItemsApi* | [**updateFee**](Api/V1ItemsApi.md#updatefee) | **PUT** /v1/{location_id}/fees/{fee_id} | UpdateFee
*V1ItemsApi* | [**updateItem**](Api/V1ItemsApi.md#updateitem) | **PUT** /v1/{location_id}/items/{item_id} | UpdateItem
*V1ItemsApi* | [**updateModifierList**](Api/V1ItemsApi.md#updatemodifierlist) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | UpdateModifierList
*V1ItemsApi* | [**updateModifierOption**](Api/V1ItemsApi.md#updatemodifieroption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | UpdateModifierOption
*V1ItemsApi* | [**updatePage**](Api/V1ItemsApi.md#updatepage) | **PUT** /v1/{location_id}/pages/{page_id} | UpdatePage
*V1ItemsApi* | [**updatePageCell**](Api/V1ItemsApi.md#updatepagecell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | UpdatePageCell
*V1ItemsApi* | [**updateVariation**](Api/V1ItemsApi.md#updatevariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | UpdateVariation
*V1LocationsApi* | [**listLocations**](Api/V1LocationsApi.md#listlocations) | **GET** /v1/me/locations | ListLocations
*V1LocationsApi* | [**retrieveBusiness**](Api/V1LocationsApi.md#retrievebusiness) | **GET** /v1/me | RetrieveBusiness
*V1TransactionsApi* | [**createRefund**](Api/V1TransactionsApi.md#createrefund) | **POST** /v1/{location_id}/refunds | CreateRefund
*V1TransactionsApi* | [**listBankAccounts**](Api/V1TransactionsApi.md#listbankaccounts) | **GET** /v1/{location_id}/bank-accounts | ListBankAccounts
*V1TransactionsApi* | [**listOrders**](Api/V1TransactionsApi.md#listorders) | **GET** /v1/{location_id}/orders | ListOrders
*V1TransactionsApi* | [**listPayments**](Api/V1TransactionsApi.md#listpayments) | **GET** /v1/{location_id}/payments | ListPayments
*V1TransactionsApi* | [**listRefunds**](Api/V1TransactionsApi.md#listrefunds) | **GET** /v1/{location_id}/refunds | ListRefunds
*V1TransactionsApi* | [**listSettlements**](Api/V1TransactionsApi.md#listsettlements) | **GET** /v1/{location_id}/settlements | ListSettlements
*V1TransactionsApi* | [**retrieveBankAccount**](Api/V1TransactionsApi.md#retrievebankaccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | RetrieveBankAccount
*V1TransactionsApi* | [**retrieveOrder**](Api/V1TransactionsApi.md#retrieveorder) | **GET** /v1/{location_id}/orders/{order_id} | RetrieveOrder
*V1TransactionsApi* | [**retrievePayment**](Api/V1TransactionsApi.md#retrievepayment) | **GET** /v1/{location_id}/payments/{payment_id} | RetrievePayment
*V1TransactionsApi* | [**retrieveSettlement**](Api/V1TransactionsApi.md#retrievesettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | RetrieveSettlement
*V1TransactionsApi* | [**updateOrder**](Api/V1TransactionsApi.md#updateorder) | **PUT** /v1/{location_id}/orders/{order_id} | UpdateOrder


## Documentation For Models

 - [AcceptDisputeRequest](Model/AcceptDisputeRequest.md)
 - [AcceptDisputeResponse](Model/AcceptDisputeResponse.md)
 - [AddGroupToCustomerRequest](Model/AddGroupToCustomerRequest.md)
 - [AddGroupToCustomerResponse](Model/AddGroupToCustomerResponse.md)
 - [AdditionalRecipient](Model/AdditionalRecipient.md)
 - [AdditionalRecipientReceivable](Model/AdditionalRecipientReceivable.md)
 - [AdditionalRecipientReceivableRefund](Model/AdditionalRecipientReceivableRefund.md)
 - [Address](Model/Address.md)
 - [BalancePaymentDetails](Model/BalancePaymentDetails.md)
 - [BankAccount](Model/BankAccount.md)
 - [BankAccountStatus](Model/BankAccountStatus.md)
 - [BankAccountType](Model/BankAccountType.md)
 - [BatchChangeInventoryRequest](Model/BatchChangeInventoryRequest.md)
 - [BatchChangeInventoryResponse](Model/BatchChangeInventoryResponse.md)
 - [BatchDeleteCatalogObjectsRequest](Model/BatchDeleteCatalogObjectsRequest.md)
 - [BatchDeleteCatalogObjectsResponse](Model/BatchDeleteCatalogObjectsResponse.md)
 - [BatchRetrieveCatalogObjectsRequest](Model/BatchRetrieveCatalogObjectsRequest.md)
 - [BatchRetrieveCatalogObjectsResponse](Model/BatchRetrieveCatalogObjectsResponse.md)
 - [BatchRetrieveInventoryChangesRequest](Model/BatchRetrieveInventoryChangesRequest.md)
 - [BatchRetrieveInventoryChangesResponse](Model/BatchRetrieveInventoryChangesResponse.md)
 - [BatchRetrieveInventoryCountsRequest](Model/BatchRetrieveInventoryCountsRequest.md)
 - [BatchRetrieveInventoryCountsResponse](Model/BatchRetrieveInventoryCountsResponse.md)
 - [BatchRetrieveOrdersRequest](Model/BatchRetrieveOrdersRequest.md)
 - [BatchRetrieveOrdersResponse](Model/BatchRetrieveOrdersResponse.md)
 - [BatchUpsertCatalogObjectsRequest](Model/BatchUpsertCatalogObjectsRequest.md)
 - [BatchUpsertCatalogObjectsResponse](Model/BatchUpsertCatalogObjectsResponse.md)
 - [BreakType](Model/BreakType.md)
 - [BusinessHours](Model/BusinessHours.md)
 - [BusinessHoursPeriod](Model/BusinessHoursPeriod.md)
 - [CancelPaymentByIdempotencyKeyRequest](Model/CancelPaymentByIdempotencyKeyRequest.md)
 - [CancelPaymentByIdempotencyKeyResponse](Model/CancelPaymentByIdempotencyKeyResponse.md)
 - [CancelPaymentRequest](Model/CancelPaymentRequest.md)
 - [CancelPaymentResponse](Model/CancelPaymentResponse.md)
 - [CancelTerminalCheckoutRequest](Model/CancelTerminalCheckoutRequest.md)
 - [CancelTerminalCheckoutResponse](Model/CancelTerminalCheckoutResponse.md)
 - [CaptureTransactionRequest](Model/CaptureTransactionRequest.md)
 - [CaptureTransactionResponse](Model/CaptureTransactionResponse.md)
 - [Card](Model/Card.md)
 - [CardBrand](Model/CardBrand.md)
 - [CardPaymentDetails](Model/CardPaymentDetails.md)
 - [CardPrepaidType](Model/CardPrepaidType.md)
 - [CardType](Model/CardType.md)
 - [CashDrawerDevice](Model/CashDrawerDevice.md)
 - [CashDrawerEventType](Model/CashDrawerEventType.md)
 - [CashDrawerShift](Model/CashDrawerShift.md)
 - [CashDrawerShiftEvent](Model/CashDrawerShiftEvent.md)
 - [CashDrawerShiftState](Model/CashDrawerShiftState.md)
 - [CashDrawerShiftSummary](Model/CashDrawerShiftSummary.md)
 - [CatalogCategory](Model/CatalogCategory.md)
 - [CatalogCustomAttributeDefinition](Model/CatalogCustomAttributeDefinition.md)
 - [CatalogCustomAttributeDefinitionAppVisibility](Model/CatalogCustomAttributeDefinitionAppVisibility.md)
 - [CatalogCustomAttributeDefinitionSelectionConfig](Model/CatalogCustomAttributeDefinitionSelectionConfig.md)
 - [CatalogCustomAttributeDefinitionSelectionConfigCustomAttributeSelection](Model/CatalogCustomAttributeDefinitionSelectionConfigCustomAttributeSelection.md)
 - [CatalogCustomAttributeDefinitionSellerVisibility](Model/CatalogCustomAttributeDefinitionSellerVisibility.md)
 - [CatalogCustomAttributeDefinitionStringConfig](Model/CatalogCustomAttributeDefinitionStringConfig.md)
 - [CatalogCustomAttributeDefinitionType](Model/CatalogCustomAttributeDefinitionType.md)
 - [CatalogCustomAttributeValue](Model/CatalogCustomAttributeValue.md)
 - [CatalogDiscount](Model/CatalogDiscount.md)
 - [CatalogDiscountModifyTaxBasis](Model/CatalogDiscountModifyTaxBasis.md)
 - [CatalogDiscountType](Model/CatalogDiscountType.md)
 - [CatalogIdMapping](Model/CatalogIdMapping.md)
 - [CatalogImage](Model/CatalogImage.md)
 - [CatalogInfoRequest](Model/CatalogInfoRequest.md)
 - [CatalogInfoResponse](Model/CatalogInfoResponse.md)
 - [CatalogInfoResponseLimits](Model/CatalogInfoResponseLimits.md)
 - [CatalogItem](Model/CatalogItem.md)
 - [CatalogItemModifierListInfo](Model/CatalogItemModifierListInfo.md)
 - [CatalogItemOption](Model/CatalogItemOption.md)
 - [CatalogItemOptionForItem](Model/CatalogItemOptionForItem.md)
 - [CatalogItemOptionValue](Model/CatalogItemOptionValue.md)
 - [CatalogItemOptionValueForItemVariation](Model/CatalogItemOptionValueForItemVariation.md)
 - [CatalogItemProductType](Model/CatalogItemProductType.md)
 - [CatalogItemVariation](Model/CatalogItemVariation.md)
 - [CatalogMeasurementUnit](Model/CatalogMeasurementUnit.md)
 - [CatalogModifier](Model/CatalogModifier.md)
 - [CatalogModifierList](Model/CatalogModifierList.md)
 - [CatalogModifierListSelectionType](Model/CatalogModifierListSelectionType.md)
 - [CatalogModifierOverride](Model/CatalogModifierOverride.md)
 - [CatalogObject](Model/CatalogObject.md)
 - [CatalogObjectBatch](Model/CatalogObjectBatch.md)
 - [CatalogObjectType](Model/CatalogObjectType.md)
 - [CatalogPricingRule](Model/CatalogPricingRule.md)
 - [CatalogPricingType](Model/CatalogPricingType.md)
 - [CatalogProductSet](Model/CatalogProductSet.md)
 - [CatalogQuery](Model/CatalogQuery.md)
 - [CatalogQueryCustomAttributeUsage](Model/CatalogQueryCustomAttributeUsage.md)
 - [CatalogQueryExact](Model/CatalogQueryExact.md)
 - [CatalogQueryFilteredItems](Model/CatalogQueryFilteredItems.md)
 - [CatalogQueryFilteredItemsCustomAttributeFilter](Model/CatalogQueryFilteredItemsCustomAttributeFilter.md)
 - [CatalogQueryFilteredItemsCustomAttributeFilterFilterType](Model/CatalogQueryFilteredItemsCustomAttributeFilterFilterType.md)
 - [CatalogQueryFilteredItemsNullableAttribute](Model/CatalogQueryFilteredItemsNullableAttribute.md)
 - [CatalogQueryFilteredItemsStockLevel](Model/CatalogQueryFilteredItemsStockLevel.md)
 - [CatalogQueryItemVariationsForItemOptionValues](Model/CatalogQueryItemVariationsForItemOptionValues.md)
 - [CatalogQueryItemsForItemOptions](Model/CatalogQueryItemsForItemOptions.md)
 - [CatalogQueryItemsForModifierList](Model/CatalogQueryItemsForModifierList.md)
 - [CatalogQueryItemsForTax](Model/CatalogQueryItemsForTax.md)
 - [CatalogQueryPrefix](Model/CatalogQueryPrefix.md)
 - [CatalogQueryRange](Model/CatalogQueryRange.md)
 - [CatalogQuerySortedAttribute](Model/CatalogQuerySortedAttribute.md)
 - [CatalogQueryText](Model/CatalogQueryText.md)
 - [CatalogQuickAmount](Model/CatalogQuickAmount.md)
 - [CatalogQuickAmountType](Model/CatalogQuickAmountType.md)
 - [CatalogQuickAmountsSettings](Model/CatalogQuickAmountsSettings.md)
 - [CatalogQuickAmountsSettingsOption](Model/CatalogQuickAmountsSettingsOption.md)
 - [CatalogTax](Model/CatalogTax.md)
 - [CatalogTimePeriod](Model/CatalogTimePeriod.md)
 - [CatalogV1Id](Model/CatalogV1Id.md)
 - [ChargeRequest](Model/ChargeRequest.md)
 - [ChargeRequestAdditionalRecipient](Model/ChargeRequestAdditionalRecipient.md)
 - [ChargeResponse](Model/ChargeResponse.md)
 - [Checkout](Model/Checkout.md)
 - [CompletePaymentRequest](Model/CompletePaymentRequest.md)
 - [CompletePaymentResponse](Model/CompletePaymentResponse.md)
 - [Coordinates](Model/Coordinates.md)
 - [Country](Model/Country.md)
 - [CreateBreakTypeRequest](Model/CreateBreakTypeRequest.md)
 - [CreateBreakTypeResponse](Model/CreateBreakTypeResponse.md)
 - [CreateCatalogImageRequest](Model/CreateCatalogImageRequest.md)
 - [CreateCatalogImageResponse](Model/CreateCatalogImageResponse.md)
 - [CreateCheckoutRequest](Model/CreateCheckoutRequest.md)
 - [CreateCheckoutResponse](Model/CreateCheckoutResponse.md)
 - [CreateCustomerCardRequest](Model/CreateCustomerCardRequest.md)
 - [CreateCustomerCardResponse](Model/CreateCustomerCardResponse.md)
 - [CreateCustomerGroupRequest](Model/CreateCustomerGroupRequest.md)
 - [CreateCustomerGroupResponse](Model/CreateCustomerGroupResponse.md)
 - [CreateCustomerRequest](Model/CreateCustomerRequest.md)
 - [CreateCustomerResponse](Model/CreateCustomerResponse.md)
 - [CreateDeviceCodeRequest](Model/CreateDeviceCodeRequest.md)
 - [CreateDeviceCodeResponse](Model/CreateDeviceCodeResponse.md)
 - [CreateDisputeEvidenceFileRequest](Model/CreateDisputeEvidenceFileRequest.md)
 - [CreateDisputeEvidenceFileResponse](Model/CreateDisputeEvidenceFileResponse.md)
 - [CreateDisputeEvidenceTextRequest](Model/CreateDisputeEvidenceTextRequest.md)
 - [CreateDisputeEvidenceTextResponse](Model/CreateDisputeEvidenceTextResponse.md)
 - [CreateLocationRequest](Model/CreateLocationRequest.md)
 - [CreateLocationResponse](Model/CreateLocationResponse.md)
 - [CreateMobileAuthorizationCodeRequest](Model/CreateMobileAuthorizationCodeRequest.md)
 - [CreateMobileAuthorizationCodeResponse](Model/CreateMobileAuthorizationCodeResponse.md)
 - [CreateOrderRequest](Model/CreateOrderRequest.md)
 - [CreateOrderResponse](Model/CreateOrderResponse.md)
 - [CreatePaymentRequest](Model/CreatePaymentRequest.md)
 - [CreatePaymentResponse](Model/CreatePaymentResponse.md)
 - [CreateRefundRequest](Model/CreateRefundRequest.md)
 - [CreateRefundResponse](Model/CreateRefundResponse.md)
 - [CreateShiftRequest](Model/CreateShiftRequest.md)
 - [CreateShiftResponse](Model/CreateShiftResponse.md)
 - [CreateTerminalCheckoutRequest](Model/CreateTerminalCheckoutRequest.md)
 - [CreateTerminalCheckoutResponse](Model/CreateTerminalCheckoutResponse.md)
 - [Currency](Model/Currency.md)
 - [Customer](Model/Customer.md)
 - [CustomerCreationSource](Model/CustomerCreationSource.md)
 - [CustomerCreationSourceFilter](Model/CustomerCreationSourceFilter.md)
 - [CustomerFilter](Model/CustomerFilter.md)
 - [CustomerGroup](Model/CustomerGroup.md)
 - [CustomerGroupInfo](Model/CustomerGroupInfo.md)
 - [CustomerInclusionExclusion](Model/CustomerInclusionExclusion.md)
 - [CustomerPreferences](Model/CustomerPreferences.md)
 - [CustomerQuery](Model/CustomerQuery.md)
 - [CustomerSegment](Model/CustomerSegment.md)
 - [CustomerSort](Model/CustomerSort.md)
 - [CustomerSortField](Model/CustomerSortField.md)
 - [DateRange](Model/DateRange.md)
 - [DayOfWeek](Model/DayOfWeek.md)
 - [DeleteBreakTypeRequest](Model/DeleteBreakTypeRequest.md)
 - [DeleteBreakTypeResponse](Model/DeleteBreakTypeResponse.md)
 - [DeleteCatalogObjectRequest](Model/DeleteCatalogObjectRequest.md)
 - [DeleteCatalogObjectResponse](Model/DeleteCatalogObjectResponse.md)
 - [DeleteCustomerCardRequest](Model/DeleteCustomerCardRequest.md)
 - [DeleteCustomerCardResponse](Model/DeleteCustomerCardResponse.md)
 - [DeleteCustomerGroupRequest](Model/DeleteCustomerGroupRequest.md)
 - [DeleteCustomerGroupResponse](Model/DeleteCustomerGroupResponse.md)
 - [DeleteCustomerRequest](Model/DeleteCustomerRequest.md)
 - [DeleteCustomerResponse](Model/DeleteCustomerResponse.md)
 - [DeleteShiftRequest](Model/DeleteShiftRequest.md)
 - [DeleteShiftResponse](Model/DeleteShiftResponse.md)
 - [Device](Model/Device.md)
 - [DeviceCheckoutOptions](Model/DeviceCheckoutOptions.md)
 - [DeviceCode](Model/DeviceCode.md)
 - [DeviceCodeStatus](Model/DeviceCodeStatus.md)
 - [DeviceDetails](Model/DeviceDetails.md)
 - [Dispute](Model/Dispute.md)
 - [DisputeEvidence](Model/DisputeEvidence.md)
 - [DisputeEvidenceFile](Model/DisputeEvidenceFile.md)
 - [DisputeEvidenceType](Model/DisputeEvidenceType.md)
 - [DisputeReason](Model/DisputeReason.md)
 - [DisputeState](Model/DisputeState.md)
 - [DisputedPayment](Model/DisputedPayment.md)
 - [EcomVisibility](Model/EcomVisibility.md)
 - [Employee](Model/Employee.md)
 - [EmployeeStatus](Model/EmployeeStatus.md)
 - [EmployeeWage](Model/EmployeeWage.md)
 - [Error](Model/Error.md)
 - [ErrorCategory](Model/ErrorCategory.md)
 - [ErrorCode](Model/ErrorCode.md)
 - [ExcludeStrategy](Model/ExcludeStrategy.md)
 - [FilterValue](Model/FilterValue.md)
 - [GetBankAccountByV1IdRequest](Model/GetBankAccountByV1IdRequest.md)
 - [GetBankAccountByV1IdResponse](Model/GetBankAccountByV1IdResponse.md)
 - [GetBankAccountRequest](Model/GetBankAccountRequest.md)
 - [GetBankAccountResponse](Model/GetBankAccountResponse.md)
 - [GetBreakTypeRequest](Model/GetBreakTypeRequest.md)
 - [GetBreakTypeResponse](Model/GetBreakTypeResponse.md)
 - [GetDeviceCodeRequest](Model/GetDeviceCodeRequest.md)
 - [GetDeviceCodeResponse](Model/GetDeviceCodeResponse.md)
 - [GetEmployeeWageRequest](Model/GetEmployeeWageRequest.md)
 - [GetEmployeeWageResponse](Model/GetEmployeeWageResponse.md)
 - [GetPaymentRefundRequest](Model/GetPaymentRefundRequest.md)
 - [GetPaymentRefundResponse](Model/GetPaymentRefundResponse.md)
 - [GetPaymentRequest](Model/GetPaymentRequest.md)
 - [GetPaymentResponse](Model/GetPaymentResponse.md)
 - [GetShiftRequest](Model/GetShiftRequest.md)
 - [GetShiftResponse](Model/GetShiftResponse.md)
 - [GetTerminalCheckoutRequest](Model/GetTerminalCheckoutRequest.md)
 - [GetTerminalCheckoutResponse](Model/GetTerminalCheckoutResponse.md)
 - [InventoryAdjustment](Model/InventoryAdjustment.md)
 - [InventoryAlertType](Model/InventoryAlertType.md)
 - [InventoryChange](Model/InventoryChange.md)
 - [InventoryChangeType](Model/InventoryChangeType.md)
 - [InventoryCount](Model/InventoryCount.md)
 - [InventoryPhysicalCount](Model/InventoryPhysicalCount.md)
 - [InventoryState](Model/InventoryState.md)
 - [InventoryTransfer](Model/InventoryTransfer.md)
 - [ItemVariationLocationOverrides](Model/ItemVariationLocationOverrides.md)
 - [ListAdditionalRecipientReceivableRefundsRequest](Model/ListAdditionalRecipientReceivableRefundsRequest.md)
 - [ListAdditionalRecipientReceivableRefundsResponse](Model/ListAdditionalRecipientReceivableRefundsResponse.md)
 - [ListAdditionalRecipientReceivablesRequest](Model/ListAdditionalRecipientReceivablesRequest.md)
 - [ListAdditionalRecipientReceivablesResponse](Model/ListAdditionalRecipientReceivablesResponse.md)
 - [ListBankAccountsRequest](Model/ListBankAccountsRequest.md)
 - [ListBankAccountsResponse](Model/ListBankAccountsResponse.md)
 - [ListBreakTypesRequest](Model/ListBreakTypesRequest.md)
 - [ListBreakTypesResponse](Model/ListBreakTypesResponse.md)
 - [ListCashDrawerShiftEventsRequest](Model/ListCashDrawerShiftEventsRequest.md)
 - [ListCashDrawerShiftEventsResponse](Model/ListCashDrawerShiftEventsResponse.md)
 - [ListCashDrawerShiftsRequest](Model/ListCashDrawerShiftsRequest.md)
 - [ListCashDrawerShiftsResponse](Model/ListCashDrawerShiftsResponse.md)
 - [ListCatalogRequest](Model/ListCatalogRequest.md)
 - [ListCatalogResponse](Model/ListCatalogResponse.md)
 - [ListCustomerGroupsRequest](Model/ListCustomerGroupsRequest.md)
 - [ListCustomerGroupsResponse](Model/ListCustomerGroupsResponse.md)
 - [ListCustomerSegmentsRequest](Model/ListCustomerSegmentsRequest.md)
 - [ListCustomerSegmentsResponse](Model/ListCustomerSegmentsResponse.md)
 - [ListCustomersRequest](Model/ListCustomersRequest.md)
 - [ListCustomersResponse](Model/ListCustomersResponse.md)
 - [ListDeviceCodesRequest](Model/ListDeviceCodesRequest.md)
 - [ListDeviceCodesResponse](Model/ListDeviceCodesResponse.md)
 - [ListDisputeEvidenceRequest](Model/ListDisputeEvidenceRequest.md)
 - [ListDisputeEvidenceResponse](Model/ListDisputeEvidenceResponse.md)
 - [ListDisputesRequest](Model/ListDisputesRequest.md)
 - [ListDisputesResponse](Model/ListDisputesResponse.md)
 - [ListEmployeeWagesRequest](Model/ListEmployeeWagesRequest.md)
 - [ListEmployeeWagesResponse](Model/ListEmployeeWagesResponse.md)
 - [ListEmployeesRequest](Model/ListEmployeesRequest.md)
 - [ListEmployeesResponse](Model/ListEmployeesResponse.md)
 - [ListLocationsRequest](Model/ListLocationsRequest.md)
 - [ListLocationsResponse](Model/ListLocationsResponse.md)
 - [ListMerchantsRequest](Model/ListMerchantsRequest.md)
 - [ListMerchantsResponse](Model/ListMerchantsResponse.md)
 - [ListPaymentRefundsRequest](Model/ListPaymentRefundsRequest.md)
 - [ListPaymentRefundsResponse](Model/ListPaymentRefundsResponse.md)
 - [ListPaymentsRequest](Model/ListPaymentsRequest.md)
 - [ListPaymentsResponse](Model/ListPaymentsResponse.md)
 - [ListRefundsRequest](Model/ListRefundsRequest.md)
 - [ListRefundsResponse](Model/ListRefundsResponse.md)
 - [ListTransactionsRequest](Model/ListTransactionsRequest.md)
 - [ListTransactionsResponse](Model/ListTransactionsResponse.md)
 - [ListWorkweekConfigsRequest](Model/ListWorkweekConfigsRequest.md)
 - [ListWorkweekConfigsResponse](Model/ListWorkweekConfigsResponse.md)
 - [Location](Model/Location.md)
 - [LocationCapability](Model/LocationCapability.md)
 - [LocationStatus](Model/LocationStatus.md)
 - [LocationType](Model/LocationType.md)
 - [MeasurementUnit](Model/MeasurementUnit.md)
 - [MeasurementUnitArea](Model/MeasurementUnitArea.md)
 - [MeasurementUnitCustom](Model/MeasurementUnitCustom.md)
 - [MeasurementUnitGeneric](Model/MeasurementUnitGeneric.md)
 - [MeasurementUnitLength](Model/MeasurementUnitLength.md)
 - [MeasurementUnitTime](Model/MeasurementUnitTime.md)
 - [MeasurementUnitUnitType](Model/MeasurementUnitUnitType.md)
 - [MeasurementUnitVolume](Model/MeasurementUnitVolume.md)
 - [MeasurementUnitWeight](Model/MeasurementUnitWeight.md)
 - [Merchant](Model/Merchant.md)
 - [MerchantStatus](Model/MerchantStatus.md)
 - [MethodErrorCodes](Model/MethodErrorCodes.md)
 - [ModelBreak](Model/ModelBreak.md)
 - [Money](Model/Money.md)
 - [ObtainTokenRequest](Model/ObtainTokenRequest.md)
 - [ObtainTokenResponse](Model/ObtainTokenResponse.md)
 - [Order](Model/Order.md)
 - [OrderCreated](Model/OrderCreated.md)
 - [OrderCreatedObject](Model/OrderCreatedObject.md)
 - [OrderEntry](Model/OrderEntry.md)
 - [OrderFulfillment](Model/OrderFulfillment.md)
 - [OrderFulfillmentPickupDetails](Model/OrderFulfillmentPickupDetails.md)
 - [OrderFulfillmentPickupDetailsCurbsidePickupDetails](Model/OrderFulfillmentPickupDetailsCurbsidePickupDetails.md)
 - [OrderFulfillmentPickupDetailsScheduleType](Model/OrderFulfillmentPickupDetailsScheduleType.md)
 - [OrderFulfillmentRecipient](Model/OrderFulfillmentRecipient.md)
 - [OrderFulfillmentShipmentDetails](Model/OrderFulfillmentShipmentDetails.md)
 - [OrderFulfillmentState](Model/OrderFulfillmentState.md)
 - [OrderFulfillmentType](Model/OrderFulfillmentType.md)
 - [OrderFulfillmentUpdated](Model/OrderFulfillmentUpdated.md)
 - [OrderFulfillmentUpdatedObject](Model/OrderFulfillmentUpdatedObject.md)
 - [OrderFulfillmentUpdatedUpdate](Model/OrderFulfillmentUpdatedUpdate.md)
 - [OrderLineItem](Model/OrderLineItem.md)
 - [OrderLineItemAppliedDiscount](Model/OrderLineItemAppliedDiscount.md)
 - [OrderLineItemAppliedTax](Model/OrderLineItemAppliedTax.md)
 - [OrderLineItemDiscount](Model/OrderLineItemDiscount.md)
 - [OrderLineItemDiscountScope](Model/OrderLineItemDiscountScope.md)
 - [OrderLineItemDiscountType](Model/OrderLineItemDiscountType.md)
 - [OrderLineItemModifier](Model/OrderLineItemModifier.md)
 - [OrderLineItemTax](Model/OrderLineItemTax.md)
 - [OrderLineItemTaxScope](Model/OrderLineItemTaxScope.md)
 - [OrderLineItemTaxType](Model/OrderLineItemTaxType.md)
 - [OrderMoneyAmounts](Model/OrderMoneyAmounts.md)
 - [OrderQuantityUnit](Model/OrderQuantityUnit.md)
 - [OrderReturn](Model/OrderReturn.md)
 - [OrderReturnDiscount](Model/OrderReturnDiscount.md)
 - [OrderReturnLineItem](Model/OrderReturnLineItem.md)
 - [OrderReturnLineItemModifier](Model/OrderReturnLineItemModifier.md)
 - [OrderReturnServiceCharge](Model/OrderReturnServiceCharge.md)
 - [OrderReturnTax](Model/OrderReturnTax.md)
 - [OrderRoundingAdjustment](Model/OrderRoundingAdjustment.md)
 - [OrderServiceCharge](Model/OrderServiceCharge.md)
 - [OrderServiceChargeCalculationPhase](Model/OrderServiceChargeCalculationPhase.md)
 - [OrderSource](Model/OrderSource.md)
 - [OrderState](Model/OrderState.md)
 - [OrderUpdated](Model/OrderUpdated.md)
 - [OrderUpdatedObject](Model/OrderUpdatedObject.md)
 - [PayOrderRequest](Model/PayOrderRequest.md)
 - [PayOrderResponse](Model/PayOrderResponse.md)
 - [Payment](Model/Payment.md)
 - [PaymentOptions](Model/PaymentOptions.md)
 - [PaymentRefund](Model/PaymentRefund.md)
 - [ProcessingFee](Model/ProcessingFee.md)
 - [Product](Model/Product.md)
 - [ProductType](Model/ProductType.md)
 - [Refund](Model/Refund.md)
 - [RefundPaymentRequest](Model/RefundPaymentRequest.md)
 - [RefundPaymentResponse](Model/RefundPaymentResponse.md)
 - [RefundStatus](Model/RefundStatus.md)
 - [RegisterDomainRequest](Model/RegisterDomainRequest.md)
 - [RegisterDomainResponse](Model/RegisterDomainResponse.md)
 - [RegisterDomainResponseStatus](Model/RegisterDomainResponseStatus.md)
 - [RemoveDisputeEvidenceRequest](Model/RemoveDisputeEvidenceRequest.md)
 - [RemoveDisputeEvidenceResponse](Model/RemoveDisputeEvidenceResponse.md)
 - [RemoveGroupFromCustomerRequest](Model/RemoveGroupFromCustomerRequest.md)
 - [RemoveGroupFromCustomerResponse](Model/RemoveGroupFromCustomerResponse.md)
 - [RenewTokenRequest](Model/RenewTokenRequest.md)
 - [RenewTokenResponse](Model/RenewTokenResponse.md)
 - [RetrieveCashDrawerShiftRequest](Model/RetrieveCashDrawerShiftRequest.md)
 - [RetrieveCashDrawerShiftResponse](Model/RetrieveCashDrawerShiftResponse.md)
 - [RetrieveCatalogObjectRequest](Model/RetrieveCatalogObjectRequest.md)
 - [RetrieveCatalogObjectResponse](Model/RetrieveCatalogObjectResponse.md)
 - [RetrieveCustomerGroupRequest](Model/RetrieveCustomerGroupRequest.md)
 - [RetrieveCustomerGroupResponse](Model/RetrieveCustomerGroupResponse.md)
 - [RetrieveCustomerRequest](Model/RetrieveCustomerRequest.md)
 - [RetrieveCustomerResponse](Model/RetrieveCustomerResponse.md)
 - [RetrieveCustomerSegmentRequest](Model/RetrieveCustomerSegmentRequest.md)
 - [RetrieveCustomerSegmentResponse](Model/RetrieveCustomerSegmentResponse.md)
 - [RetrieveDisputeEvidenceRequest](Model/RetrieveDisputeEvidenceRequest.md)
 - [RetrieveDisputeEvidenceResponse](Model/RetrieveDisputeEvidenceResponse.md)
 - [RetrieveDisputeRequest](Model/RetrieveDisputeRequest.md)
 - [RetrieveDisputeResponse](Model/RetrieveDisputeResponse.md)
 - [RetrieveEmployeeRequest](Model/RetrieveEmployeeRequest.md)
 - [RetrieveEmployeeResponse](Model/RetrieveEmployeeResponse.md)
 - [RetrieveInventoryAdjustmentRequest](Model/RetrieveInventoryAdjustmentRequest.md)
 - [RetrieveInventoryAdjustmentResponse](Model/RetrieveInventoryAdjustmentResponse.md)
 - [RetrieveInventoryChangesRequest](Model/RetrieveInventoryChangesRequest.md)
 - [RetrieveInventoryChangesResponse](Model/RetrieveInventoryChangesResponse.md)
 - [RetrieveInventoryCountRequest](Model/RetrieveInventoryCountRequest.md)
 - [RetrieveInventoryCountResponse](Model/RetrieveInventoryCountResponse.md)
 - [RetrieveInventoryPhysicalCountRequest](Model/RetrieveInventoryPhysicalCountRequest.md)
 - [RetrieveInventoryPhysicalCountResponse](Model/RetrieveInventoryPhysicalCountResponse.md)
 - [RetrieveLocationRequest](Model/RetrieveLocationRequest.md)
 - [RetrieveLocationResponse](Model/RetrieveLocationResponse.md)
 - [RetrieveMerchantRequest](Model/RetrieveMerchantRequest.md)
 - [RetrieveMerchantResponse](Model/RetrieveMerchantResponse.md)
 - [RetrieveTransactionRequest](Model/RetrieveTransactionRequest.md)
 - [RetrieveTransactionResponse](Model/RetrieveTransactionResponse.md)
 - [RevokeTokenRequest](Model/RevokeTokenRequest.md)
 - [RevokeTokenResponse](Model/RevokeTokenResponse.md)
 - [SearchCatalogObjectsRequest](Model/SearchCatalogObjectsRequest.md)
 - [SearchCatalogObjectsResponse](Model/SearchCatalogObjectsResponse.md)
 - [SearchCustomersRequest](Model/SearchCustomersRequest.md)
 - [SearchCustomersResponse](Model/SearchCustomersResponse.md)
 - [SearchOrdersCustomerFilter](Model/SearchOrdersCustomerFilter.md)
 - [SearchOrdersDateTimeFilter](Model/SearchOrdersDateTimeFilter.md)
 - [SearchOrdersFilter](Model/SearchOrdersFilter.md)
 - [SearchOrdersFulfillmentFilter](Model/SearchOrdersFulfillmentFilter.md)
 - [SearchOrdersQuery](Model/SearchOrdersQuery.md)
 - [SearchOrdersRequest](Model/SearchOrdersRequest.md)
 - [SearchOrdersResponse](Model/SearchOrdersResponse.md)
 - [SearchOrdersSort](Model/SearchOrdersSort.md)
 - [SearchOrdersSortField](Model/SearchOrdersSortField.md)
 - [SearchOrdersSourceFilter](Model/SearchOrdersSourceFilter.md)
 - [SearchOrdersStateFilter](Model/SearchOrdersStateFilter.md)
 - [SearchShiftsRequest](Model/SearchShiftsRequest.md)
 - [SearchShiftsResponse](Model/SearchShiftsResponse.md)
 - [SearchTerminalCheckoutsRequest](Model/SearchTerminalCheckoutsRequest.md)
 - [SearchTerminalCheckoutsResponse](Model/SearchTerminalCheckoutsResponse.md)
 - [Shift](Model/Shift.md)
 - [ShiftFilter](Model/ShiftFilter.md)
 - [ShiftFilterStatus](Model/ShiftFilterStatus.md)
 - [ShiftQuery](Model/ShiftQuery.md)
 - [ShiftSort](Model/ShiftSort.md)
 - [ShiftSortField](Model/ShiftSortField.md)
 - [ShiftStatus](Model/ShiftStatus.md)
 - [ShiftWage](Model/ShiftWage.md)
 - [ShiftWorkday](Model/ShiftWorkday.md)
 - [ShiftWorkdayMatcher](Model/ShiftWorkdayMatcher.md)
 - [SortOrder](Model/SortOrder.md)
 - [SourceApplication](Model/SourceApplication.md)
 - [StandardUnitDescription](Model/StandardUnitDescription.md)
 - [StandardUnitDescriptionGroup](Model/StandardUnitDescriptionGroup.md)
 - [SubmitEvidenceRequest](Model/SubmitEvidenceRequest.md)
 - [SubmitEvidenceResponse](Model/SubmitEvidenceResponse.md)
 - [TaxCalculationPhase](Model/TaxCalculationPhase.md)
 - [TaxInclusionType](Model/TaxInclusionType.md)
 - [Tender](Model/Tender.md)
 - [TenderCardDetails](Model/TenderCardDetails.md)
 - [TenderCardDetailsEntryMethod](Model/TenderCardDetailsEntryMethod.md)
 - [TenderCardDetailsStatus](Model/TenderCardDetailsStatus.md)
 - [TenderCashDetails](Model/TenderCashDetails.md)
 - [TenderType](Model/TenderType.md)
 - [TerminalCheckout](Model/TerminalCheckout.md)
 - [TerminalCheckoutCancelReason](Model/TerminalCheckoutCancelReason.md)
 - [TerminalCheckoutQuery](Model/TerminalCheckoutQuery.md)
 - [TerminalCheckoutQueryFilter](Model/TerminalCheckoutQueryFilter.md)
 - [TerminalCheckoutQuerySort](Model/TerminalCheckoutQuerySort.md)
 - [TimeRange](Model/TimeRange.md)
 - [TipSettings](Model/TipSettings.md)
 - [Transaction](Model/Transaction.md)
 - [TransactionProduct](Model/TransactionProduct.md)
 - [TransactionType](Model/TransactionType.md)
 - [UpdateBreakTypeRequest](Model/UpdateBreakTypeRequest.md)
 - [UpdateBreakTypeResponse](Model/UpdateBreakTypeResponse.md)
 - [UpdateCustomerGroupRequest](Model/UpdateCustomerGroupRequest.md)
 - [UpdateCustomerGroupResponse](Model/UpdateCustomerGroupResponse.md)
 - [UpdateCustomerRequest](Model/UpdateCustomerRequest.md)
 - [UpdateCustomerResponse](Model/UpdateCustomerResponse.md)
 - [UpdateItemModifierListsRequest](Model/UpdateItemModifierListsRequest.md)
 - [UpdateItemModifierListsResponse](Model/UpdateItemModifierListsResponse.md)
 - [UpdateItemTaxesRequest](Model/UpdateItemTaxesRequest.md)
 - [UpdateItemTaxesResponse](Model/UpdateItemTaxesResponse.md)
 - [UpdateLocationRequest](Model/UpdateLocationRequest.md)
 - [UpdateLocationResponse](Model/UpdateLocationResponse.md)
 - [UpdateOrderRequest](Model/UpdateOrderRequest.md)
 - [UpdateOrderResponse](Model/UpdateOrderResponse.md)
 - [UpdateShiftRequest](Model/UpdateShiftRequest.md)
 - [UpdateShiftResponse](Model/UpdateShiftResponse.md)
 - [UpdateWorkweekConfigRequest](Model/UpdateWorkweekConfigRequest.md)
 - [UpdateWorkweekConfigResponse](Model/UpdateWorkweekConfigResponse.md)
 - [UpsertCatalogObjectRequest](Model/UpsertCatalogObjectRequest.md)
 - [UpsertCatalogObjectResponse](Model/UpsertCatalogObjectResponse.md)
 - [V1AdjustInventoryRequest](Model/V1AdjustInventoryRequest.md)
 - [V1AdjustInventoryRequestAdjustmentType](Model/V1AdjustInventoryRequestAdjustmentType.md)
 - [V1ApplyFeeRequest](Model/V1ApplyFeeRequest.md)
 - [V1ApplyModifierListRequest](Model/V1ApplyModifierListRequest.md)
 - [V1BankAccount](Model/V1BankAccount.md)
 - [V1BankAccountType](Model/V1BankAccountType.md)
 - [V1CashDrawerEvent](Model/V1CashDrawerEvent.md)
 - [V1CashDrawerEventEventType](Model/V1CashDrawerEventEventType.md)
 - [V1CashDrawerShift](Model/V1CashDrawerShift.md)
 - [V1CashDrawerShiftEventType](Model/V1CashDrawerShiftEventType.md)
 - [V1Category](Model/V1Category.md)
 - [V1CreateCategoryRequest](Model/V1CreateCategoryRequest.md)
 - [V1CreateDiscountRequest](Model/V1CreateDiscountRequest.md)
 - [V1CreateEmployeeRoleRequest](Model/V1CreateEmployeeRoleRequest.md)
 - [V1CreateFeeRequest](Model/V1CreateFeeRequest.md)
 - [V1CreateItemRequest](Model/V1CreateItemRequest.md)
 - [V1CreateModifierListRequest](Model/V1CreateModifierListRequest.md)
 - [V1CreateModifierOptionRequest](Model/V1CreateModifierOptionRequest.md)
 - [V1CreatePageRequest](Model/V1CreatePageRequest.md)
 - [V1CreateRefundRequest](Model/V1CreateRefundRequest.md)
 - [V1CreateRefundRequestType](Model/V1CreateRefundRequestType.md)
 - [V1CreateVariationRequest](Model/V1CreateVariationRequest.md)
 - [V1DeleteCategoryRequest](Model/V1DeleteCategoryRequest.md)
 - [V1DeleteDiscountRequest](Model/V1DeleteDiscountRequest.md)
 - [V1DeleteFeeRequest](Model/V1DeleteFeeRequest.md)
 - [V1DeleteItemRequest](Model/V1DeleteItemRequest.md)
 - [V1DeleteModifierListRequest](Model/V1DeleteModifierListRequest.md)
 - [V1DeleteModifierOptionRequest](Model/V1DeleteModifierOptionRequest.md)
 - [V1DeletePageCellRequest](Model/V1DeletePageCellRequest.md)
 - [V1DeletePageRequest](Model/V1DeletePageRequest.md)
 - [V1DeleteTimecardRequest](Model/V1DeleteTimecardRequest.md)
 - [V1DeleteTimecardResponse](Model/V1DeleteTimecardResponse.md)
 - [V1DeleteVariationRequest](Model/V1DeleteVariationRequest.md)
 - [V1Discount](Model/V1Discount.md)
 - [V1DiscountColor](Model/V1DiscountColor.md)
 - [V1DiscountDiscountType](Model/V1DiscountDiscountType.md)
 - [V1Employee](Model/V1Employee.md)
 - [V1EmployeeRole](Model/V1EmployeeRole.md)
 - [V1EmployeeRolePermissions](Model/V1EmployeeRolePermissions.md)
 - [V1EmployeeStatus](Model/V1EmployeeStatus.md)
 - [V1Fee](Model/V1Fee.md)
 - [V1FeeAdjustmentType](Model/V1FeeAdjustmentType.md)
 - [V1FeeCalculationPhase](Model/V1FeeCalculationPhase.md)
 - [V1FeeInclusionType](Model/V1FeeInclusionType.md)
 - [V1FeeType](Model/V1FeeType.md)
 - [V1InventoryEntry](Model/V1InventoryEntry.md)
 - [V1Item](Model/V1Item.md)
 - [V1ItemColor](Model/V1ItemColor.md)
 - [V1ItemImage](Model/V1ItemImage.md)
 - [V1ItemType](Model/V1ItemType.md)
 - [V1ItemVisibility](Model/V1ItemVisibility.md)
 - [V1ListBankAccountsRequest](Model/V1ListBankAccountsRequest.md)
 - [V1ListBankAccountsResponse](Model/V1ListBankAccountsResponse.md)
 - [V1ListCashDrawerShiftsRequest](Model/V1ListCashDrawerShiftsRequest.md)
 - [V1ListCashDrawerShiftsResponse](Model/V1ListCashDrawerShiftsResponse.md)
 - [V1ListCategoriesRequest](Model/V1ListCategoriesRequest.md)
 - [V1ListCategoriesResponse](Model/V1ListCategoriesResponse.md)
 - [V1ListDiscountsRequest](Model/V1ListDiscountsRequest.md)
 - [V1ListDiscountsResponse](Model/V1ListDiscountsResponse.md)
 - [V1ListEmployeeRolesRequest](Model/V1ListEmployeeRolesRequest.md)
 - [V1ListEmployeeRolesResponse](Model/V1ListEmployeeRolesResponse.md)
 - [V1ListEmployeesRequest](Model/V1ListEmployeesRequest.md)
 - [V1ListEmployeesRequestStatus](Model/V1ListEmployeesRequestStatus.md)
 - [V1ListEmployeesResponse](Model/V1ListEmployeesResponse.md)
 - [V1ListFeesRequest](Model/V1ListFeesRequest.md)
 - [V1ListFeesResponse](Model/V1ListFeesResponse.md)
 - [V1ListInventoryRequest](Model/V1ListInventoryRequest.md)
 - [V1ListInventoryResponse](Model/V1ListInventoryResponse.md)
 - [V1ListItemsRequest](Model/V1ListItemsRequest.md)
 - [V1ListItemsResponse](Model/V1ListItemsResponse.md)
 - [V1ListLocationsRequest](Model/V1ListLocationsRequest.md)
 - [V1ListLocationsResponse](Model/V1ListLocationsResponse.md)
 - [V1ListModifierListsRequest](Model/V1ListModifierListsRequest.md)
 - [V1ListModifierListsResponse](Model/V1ListModifierListsResponse.md)
 - [V1ListOrdersRequest](Model/V1ListOrdersRequest.md)
 - [V1ListOrdersResponse](Model/V1ListOrdersResponse.md)
 - [V1ListPagesRequest](Model/V1ListPagesRequest.md)
 - [V1ListPagesResponse](Model/V1ListPagesResponse.md)
 - [V1ListPaymentsRequest](Model/V1ListPaymentsRequest.md)
 - [V1ListPaymentsResponse](Model/V1ListPaymentsResponse.md)
 - [V1ListRefundsRequest](Model/V1ListRefundsRequest.md)
 - [V1ListRefundsResponse](Model/V1ListRefundsResponse.md)
 - [V1ListSettlementsRequest](Model/V1ListSettlementsRequest.md)
 - [V1ListSettlementsRequestStatus](Model/V1ListSettlementsRequestStatus.md)
 - [V1ListSettlementsResponse](Model/V1ListSettlementsResponse.md)
 - [V1ListTimecardEventsRequest](Model/V1ListTimecardEventsRequest.md)
 - [V1ListTimecardEventsResponse](Model/V1ListTimecardEventsResponse.md)
 - [V1ListTimecardsRequest](Model/V1ListTimecardsRequest.md)
 - [V1ListTimecardsResponse](Model/V1ListTimecardsResponse.md)
 - [V1Merchant](Model/V1Merchant.md)
 - [V1MerchantAccountType](Model/V1MerchantAccountType.md)
 - [V1MerchantBusinessType](Model/V1MerchantBusinessType.md)
 - [V1MerchantLocationDetails](Model/V1MerchantLocationDetails.md)
 - [V1ModifierList](Model/V1ModifierList.md)
 - [V1ModifierListSelectionType](Model/V1ModifierListSelectionType.md)
 - [V1ModifierOption](Model/V1ModifierOption.md)
 - [V1Money](Model/V1Money.md)
 - [V1Order](Model/V1Order.md)
 - [V1OrderHistoryEntry](Model/V1OrderHistoryEntry.md)
 - [V1OrderHistoryEntryAction](Model/V1OrderHistoryEntryAction.md)
 - [V1OrderState](Model/V1OrderState.md)
 - [V1Page](Model/V1Page.md)
 - [V1PageCell](Model/V1PageCell.md)
 - [V1PageCellObjectType](Model/V1PageCellObjectType.md)
 - [V1PageCellPlaceholderType](Model/V1PageCellPlaceholderType.md)
 - [V1Payment](Model/V1Payment.md)
 - [V1PaymentDiscount](Model/V1PaymentDiscount.md)
 - [V1PaymentItemDetail](Model/V1PaymentItemDetail.md)
 - [V1PaymentItemization](Model/V1PaymentItemization.md)
 - [V1PaymentItemizationItemizationType](Model/V1PaymentItemizationItemizationType.md)
 - [V1PaymentModifier](Model/V1PaymentModifier.md)
 - [V1PaymentSurcharge](Model/V1PaymentSurcharge.md)
 - [V1PaymentSurchargeType](Model/V1PaymentSurchargeType.md)
 - [V1PaymentTax](Model/V1PaymentTax.md)
 - [V1PaymentTaxInclusionType](Model/V1PaymentTaxInclusionType.md)
 - [V1PhoneNumber](Model/V1PhoneNumber.md)
 - [V1Refund](Model/V1Refund.md)
 - [V1RefundType](Model/V1RefundType.md)
 - [V1RemoveFeeRequest](Model/V1RemoveFeeRequest.md)
 - [V1RemoveModifierListRequest](Model/V1RemoveModifierListRequest.md)
 - [V1RetrieveBankAccountRequest](Model/V1RetrieveBankAccountRequest.md)
 - [V1RetrieveBusinessRequest](Model/V1RetrieveBusinessRequest.md)
 - [V1RetrieveCashDrawerShiftRequest](Model/V1RetrieveCashDrawerShiftRequest.md)
 - [V1RetrieveEmployeeRequest](Model/V1RetrieveEmployeeRequest.md)
 - [V1RetrieveEmployeeRoleRequest](Model/V1RetrieveEmployeeRoleRequest.md)
 - [V1RetrieveItemRequest](Model/V1RetrieveItemRequest.md)
 - [V1RetrieveModifierListRequest](Model/V1RetrieveModifierListRequest.md)
 - [V1RetrieveOrderRequest](Model/V1RetrieveOrderRequest.md)
 - [V1RetrievePaymentRequest](Model/V1RetrievePaymentRequest.md)
 - [V1RetrieveSettlementRequest](Model/V1RetrieveSettlementRequest.md)
 - [V1RetrieveTimecardRequest](Model/V1RetrieveTimecardRequest.md)
 - [V1Settlement](Model/V1Settlement.md)
 - [V1SettlementEntry](Model/V1SettlementEntry.md)
 - [V1SettlementEntryType](Model/V1SettlementEntryType.md)
 - [V1SettlementStatus](Model/V1SettlementStatus.md)
 - [V1Tender](Model/V1Tender.md)
 - [V1TenderCardBrand](Model/V1TenderCardBrand.md)
 - [V1TenderEntryMethod](Model/V1TenderEntryMethod.md)
 - [V1TenderType](Model/V1TenderType.md)
 - [V1Timecard](Model/V1Timecard.md)
 - [V1TimecardEvent](Model/V1TimecardEvent.md)
 - [V1TimecardEventEventType](Model/V1TimecardEventEventType.md)
 - [V1UpdateCategoryRequest](Model/V1UpdateCategoryRequest.md)
 - [V1UpdateDiscountRequest](Model/V1UpdateDiscountRequest.md)
 - [V1UpdateEmployeeRequest](Model/V1UpdateEmployeeRequest.md)
 - [V1UpdateEmployeeRoleRequest](Model/V1UpdateEmployeeRoleRequest.md)
 - [V1UpdateFeeRequest](Model/V1UpdateFeeRequest.md)
 - [V1UpdateItemRequest](Model/V1UpdateItemRequest.md)
 - [V1UpdateModifierListRequest](Model/V1UpdateModifierListRequest.md)
 - [V1UpdateModifierListRequestSelectionType](Model/V1UpdateModifierListRequestSelectionType.md)
 - [V1UpdateModifierOptionRequest](Model/V1UpdateModifierOptionRequest.md)
 - [V1UpdateOrderRequest](Model/V1UpdateOrderRequest.md)
 - [V1UpdateOrderRequestAction](Model/V1UpdateOrderRequestAction.md)
 - [V1UpdatePageCellRequest](Model/V1UpdatePageCellRequest.md)
 - [V1UpdatePageRequest](Model/V1UpdatePageRequest.md)
 - [V1UpdateTimecardRequest](Model/V1UpdateTimecardRequest.md)
 - [V1UpdateVariationRequest](Model/V1UpdateVariationRequest.md)
 - [V1Variation](Model/V1Variation.md)
 - [V1VariationInventoryAlertType](Model/V1VariationInventoryAlertType.md)
 - [V1VariationPricingType](Model/V1VariationPricingType.md)
 - [VoidTransactionRequest](Model/VoidTransactionRequest.md)
 - [VoidTransactionResponse](Model/VoidTransactionResponse.md)
 - [Weekday](Model/Weekday.md)
 - [WorkweekConfig](Model/WorkweekConfig.md)


## Documentation For Authorization

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: `https://connect.squareup.com/oauth2/authorize`
- **Scopes**:
 - **BANK_ACCOUNTS_READ**: __HTTP Method__: `GET`  Grants read access to bank account information associated with the targeted Square account. For example, to call the Connect v1 ListBankAccounts endpoint.
 - **CUSTOMERS_READ**: __HTTP Method__: `GET`  Grants read access to customer information. For example, to call the ListCustomers endpoint.
 - **CUSTOMERS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to customer information. For example, to create and update customer profiles.
 - **DEVICE_CREDENTIAL_MANAGEMENT**: __HTTP Method__: `POST`, `GET`  Grants read/write access to device credentials information. For example, to call the CreateDeviceCode endpoint.
 - **EMPLOYEES_READ**: __HTTP Method__: `GET`  Grants read access to employee profile information. For example, to call the Connect v1 Employees API.
 - **EMPLOYEES_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to employee profile information. For example, to create and modify employee profiles.
 - **INVENTORY_READ**: __HTTP Method__: `GET`  Grants read access to inventory information. For example, to call the RetrieveInventoryCount endpoint.
 - **INVENTORY_WRITE**: __HTTP Method__:  `POST`, `PUT`, `DELETE`  Grants write access to inventory information. For example, to call the BatchChangeInventory endpoint.
 - **ITEMS_READ**: __HTTP Method__: `GET`  Grants read access to business and location information. For example, to obtain a location ID for subsequent activity.
 - **ITEMS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to product catalog information. For example, to modify or add to a product catalog.
 - **MERCHANT_PROFILE_READ**: __HTTP Method__: `GET`  Grants read access to business and location information. For example, to obtain a location ID for subsequent activity.
 - **ORDERS_READ**: __HTTP Method__: `GET`  Grants read access to order information. For example, to call the BatchRetrieveOrders endpoint.
 - **ORDERS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to order information. For example, to call the CreateCheckout endpoint.
 - **PAYMENTS_READ**: __HTTP Method__: `GET`  Grants read access to transaction and refund information. For example, to call the RetrieveTransaction endpoint.
 - **PAYMENTS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to transaction and refunds information. For example, to process payments with the Payments or Checkout API.
 - **PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Allow third party applications to deduct a portion of each transaction amount. __Required__ to use multiparty transaction functionality with the Payments API.
 - **PAYMENTS_WRITE_IN_PERSON**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to payments and refunds information. For example, to process in-person payments.
 - **SETTLEMENTS_READ**: __HTTP Method__: `GET`  Grants read access to settlement (deposit) information. For example, to call the Connect v1 ListSettlements endpoint.
 - **TIMECARDS_READ**: __HTTP Method__: `GET`  Grants read access to employee timecard information. For example, to call the Connect v2 SearchShifts endpoint.
 - **TIMECARDS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to employee shift information. For example, to create and modify employee shifts.
 - **TIMECARDS_SETTINGS_READ**: __HTTP Method__: `GET`  Grants read access to employee timecard settings information. For example, to call the GetBreakType endpoint.
 - **TIMECARDS_SETTINGS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to employee timecard settings information. For example, to call the UpdateBreakType endpoint.

## oauth2ClientSecret

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Pagination of V1 Endpoints

V1 Endpoints return pagination information via HTTP headers. In order to obtain
response headers and extract the `batch_token` parameter you will need to follow
the following steps:

1. Use the full information endpoint methods of each API to get the response HTTP
Headers. They are named as their simple counterpart with a `WithHttpInfo` suffix.
Hence `listEmployeeRoles` would be called `listEmployeeRolesWithHttpInfo`. This
method returns an array with 3 parameters: `$response`, `$http_status`, and
`$http_headers`.
2. Use `$batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($http_headers)`
to extract the token and proceed to get the following page if a token is present.

### Example

```php
<?php
...
$api_instance = new SquareConnect\Api\V1EmployeesApi();
$order = null;
$limit = 20;
$batch_token = null;
$roles = array();

try {
    do {
        list($result, $status, $headers) = $api_instance->listEmployeeRolesWithHttpInfo($order, $limit, $batch_token);
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $roles = array_merge($roles, $result);
    } while (!is_null($batch_token));
    print_r($roles);
} catch (Exception $e) {
    echo 'Exception when calling V1EmployeesApi->listEmployeeRolesWithHttpInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```


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

[//]: # "Link anchor definitions"
[Square Logo]: https://docs.connect.squareup.com/images/github/github-square-logo.svg