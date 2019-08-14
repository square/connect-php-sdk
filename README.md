![Square logo]

# Square Connect PHP SDK

---

[![Build Status](https://travis-ci.org/square/connect-php-sdk.svg?branch=master)](https://travis-ci.org/square/connect-php-sdk)
[![Apache-2 license](https://img.shields.io/badge/license-Apache2-brightgreen.svg)](https://www.apache.org/licenses/LICENSE-2.0)
==================

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
# create an instance of the Transaction API class
$transactions_api = new \SquareConnect\Api\TransactionsApi($api_client);
$location_id = 'YOUR_LOCATION_ID'
$nonce = 'YOUR_NONCE'

$request_body = array (
    "card_nonce" => $nonce,
    # Monetary amounts are specified in the smallest unit of the applicable currency.
    # This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
    "amount_money" => array (
        "amount" => 100,
        "currency" => "USD"
    ),
    # Every payment you process with the SDK must have a unique idempotency key.
    # If you're unsure whether a particular payment succeeded, you can reattempt
    # it with the same idempotency key without worrying about double charging
    # the buyer.
    "idempotency_key" => uniqid()
);

try {
    $result = $transactions_api->charge($location_id,  $request_body);
    print_r($result);
} catch (\SquareConnect\ApiException $e) {
    echo "Exception when calling TransactionApi->charge:";
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
*ApplePayApi* | [**registerDomain**](docs/Api/ApplePayApi.md#registerdomain) | **POST** /v2/apple-pay/domains | RegisterDomain
*CatalogApi* | [**batchDeleteCatalogObjects**](docs/Api/CatalogApi.md#batchdeletecatalogobjects) | **POST** /v2/catalog/batch-delete | BatchDeleteCatalogObjects
*CatalogApi* | [**batchRetrieveCatalogObjects**](docs/Api/CatalogApi.md#batchretrievecatalogobjects) | **POST** /v2/catalog/batch-retrieve | BatchRetrieveCatalogObjects
*CatalogApi* | [**batchUpsertCatalogObjects**](docs/Api/CatalogApi.md#batchupsertcatalogobjects) | **POST** /v2/catalog/batch-upsert | BatchUpsertCatalogObjects
*CatalogApi* | [**catalogInfo**](docs/Api/CatalogApi.md#cataloginfo) | **GET** /v2/catalog/info | CatalogInfo
*CatalogApi* | [**deleteCatalogObject**](docs/Api/CatalogApi.md#deletecatalogobject) | **DELETE** /v2/catalog/object/{object_id} | DeleteCatalogObject
*CatalogApi* | [**listCatalog**](docs/Api/CatalogApi.md#listcatalog) | **GET** /v2/catalog/list | ListCatalog
*CatalogApi* | [**retrieveCatalogObject**](docs/Api/CatalogApi.md#retrievecatalogobject) | **GET** /v2/catalog/object/{object_id} | RetrieveCatalogObject
*CatalogApi* | [**searchCatalogObjects**](docs/Api/CatalogApi.md#searchcatalogobjects) | **POST** /v2/catalog/search | SearchCatalogObjects
*CatalogApi* | [**updateItemModifierLists**](docs/Api/CatalogApi.md#updateitemmodifierlists) | **POST** /v2/catalog/update-item-modifier-lists | UpdateItemModifierLists
*CatalogApi* | [**updateItemTaxes**](docs/Api/CatalogApi.md#updateitemtaxes) | **POST** /v2/catalog/update-item-taxes | UpdateItemTaxes
*CatalogApi* | [**upsertCatalogObject**](docs/Api/CatalogApi.md#upsertcatalogobject) | **POST** /v2/catalog/object | UpsertCatalogObject
*CheckoutApi* | [**createCheckout**](docs/Api/CheckoutApi.md#createcheckout) | **POST** /v2/locations/{location_id}/checkouts | CreateCheckout
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /v2/customers | CreateCustomer
*CustomersApi* | [**createCustomerCard**](docs/Api/CustomersApi.md#createcustomercard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /v2/customers/{customer_id} | DeleteCustomer
*CustomersApi* | [**deleteCustomerCard**](docs/Api/CustomersApi.md#deletecustomercard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v2/customers | ListCustomers
*CustomersApi* | [**retrieveCustomer**](docs/Api/CustomersApi.md#retrievecustomer) | **GET** /v2/customers/{customer_id} | RetrieveCustomer
*CustomersApi* | [**searchCustomers**](docs/Api/CustomersApi.md#searchcustomers) | **POST** /v2/customers/search | SearchCustomers
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer
*EmployeesApi* | [**listEmployees**](docs/Api/EmployeesApi.md#listemployees) | **GET** /v2/employees | ListEmployees
*EmployeesApi* | [**retrieveEmployee**](docs/Api/EmployeesApi.md#retrieveemployee) | **GET** /v2/employees/{id} | RetrieveEmployee
*InventoryApi* | [**batchChangeInventory**](docs/Api/InventoryApi.md#batchchangeinventory) | **POST** /v2/inventory/batch-change | BatchChangeInventory
*InventoryApi* | [**batchRetrieveInventoryChanges**](docs/Api/InventoryApi.md#batchretrieveinventorychanges) | **POST** /v2/inventory/batch-retrieve-changes | BatchRetrieveInventoryChanges
*InventoryApi* | [**batchRetrieveInventoryCounts**](docs/Api/InventoryApi.md#batchretrieveinventorycounts) | **POST** /v2/inventory/batch-retrieve-counts | BatchRetrieveInventoryCounts
*InventoryApi* | [**retrieveInventoryAdjustment**](docs/Api/InventoryApi.md#retrieveinventoryadjustment) | **GET** /v2/inventory/adjustment/{adjustment_id} | RetrieveInventoryAdjustment
*InventoryApi* | [**retrieveInventoryChanges**](docs/Api/InventoryApi.md#retrieveinventorychanges) | **GET** /v2/inventory/{catalog_object_id}/changes | RetrieveInventoryChanges
*InventoryApi* | [**retrieveInventoryCount**](docs/Api/InventoryApi.md#retrieveinventorycount) | **GET** /v2/inventory/{catalog_object_id} | RetrieveInventoryCount
*InventoryApi* | [**retrieveInventoryPhysicalCount**](docs/Api/InventoryApi.md#retrieveinventoryphysicalcount) | **GET** /v2/inventory/physical-count/{physical_count_id} | RetrieveInventoryPhysicalCount
*LaborApi* | [**createBreakType**](docs/Api/LaborApi.md#createbreaktype) | **POST** /v2/labor/break-types | CreateBreakType
*LaborApi* | [**createShift**](docs/Api/LaborApi.md#createshift) | **POST** /v2/labor/shifts | CreateShift
*LaborApi* | [**deleteBreakType**](docs/Api/LaborApi.md#deletebreaktype) | **DELETE** /v2/labor/break-types/{id} | DeleteBreakType
*LaborApi* | [**deleteShift**](docs/Api/LaborApi.md#deleteshift) | **DELETE** /v2/labor/shifts/{id} | DeleteShift
*LaborApi* | [**getBreakType**](docs/Api/LaborApi.md#getbreaktype) | **GET** /v2/labor/break-types/{id} | GetBreakType
*LaborApi* | [**getEmployeeWage**](docs/Api/LaborApi.md#getemployeewage) | **GET** /v2/labor/employee-wages/{id} | GetEmployeeWage
*LaborApi* | [**getShift**](docs/Api/LaborApi.md#getshift) | **GET** /v2/labor/shifts/{id} | GetShift
*LaborApi* | [**listBreakTypes**](docs/Api/LaborApi.md#listbreaktypes) | **GET** /v2/labor/break-types | ListBreakTypes
*LaborApi* | [**listEmployeeWages**](docs/Api/LaborApi.md#listemployeewages) | **GET** /v2/labor/employee-wages | ListEmployeeWages
*LaborApi* | [**listWorkweekConfigs**](docs/Api/LaborApi.md#listworkweekconfigs) | **GET** /v2/labor/workweek-configs | ListWorkweekConfigs
*LaborApi* | [**searchShifts**](docs/Api/LaborApi.md#searchshifts) | **POST** /v2/labor/shifts/search | SearchShifts
*LaborApi* | [**updateBreakType**](docs/Api/LaborApi.md#updatebreaktype) | **PUT** /v2/labor/break-types/{id} | UpdateBreakType
*LaborApi* | [**updateShift**](docs/Api/LaborApi.md#updateshift) | **PUT** /v2/labor/shifts/{id} | UpdateShift
*LaborApi* | [**updateWorkweekConfig**](docs/Api/LaborApi.md#updateworkweekconfig) | **PUT** /v2/labor/workweek-configs/{id} | UpdateWorkweekConfig
*LocationsApi* | [**listLocations**](docs/Api/LocationsApi.md#listlocations) | **GET** /v2/locations | ListLocations
*MobileAuthorizationApi* | [**createMobileAuthorizationCode**](docs/Api/MobileAuthorizationApi.md#createmobileauthorizationcode) | **POST** /mobile/authorization-code | CreateMobileAuthorizationCode
*OAuthApi* | [**obtainToken**](docs/Api/OAuthApi.md#obtaintoken) | **POST** /oauth2/token | ObtainToken
*OAuthApi* | [**renewToken**](docs/Api/OAuthApi.md#renewtoken) | **POST** /oauth2/clients/{client_id}/access-token/renew | RenewToken
*OAuthApi* | [**revokeToken**](docs/Api/OAuthApi.md#revoketoken) | **POST** /oauth2/revoke | RevokeToken
*OrdersApi* | [**batchRetrieveOrders**](docs/Api/OrdersApi.md#batchretrieveorders) | **POST** /v2/locations/{location_id}/orders/batch-retrieve | BatchRetrieveOrders
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /v2/locations/{location_id}/orders | CreateOrder
*OrdersApi* | [**payOrder**](docs/Api/OrdersApi.md#payorder) | **POST** /v2/orders/{order_id}/pay | PayOrder
*OrdersApi* | [**searchOrders**](docs/Api/OrdersApi.md#searchorders) | **POST** /v2/orders/search | SearchOrders
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PUT** /v2/locations/{location_id}/orders/{order_id} | UpdateOrder
*PaymentsApi* | [**cancelPayment**](docs/Api/PaymentsApi.md#cancelpayment) | **POST** /v2/payments/{payment_id}/cancel | CancelPayment
*PaymentsApi* | [**cancelPaymentByIdempotencyKey**](docs/Api/PaymentsApi.md#cancelpaymentbyidempotencykey) | **POST** /v2/payments/cancel | CancelPaymentByIdempotencyKey
*PaymentsApi* | [**completePayment**](docs/Api/PaymentsApi.md#completepayment) | **POST** /v2/payments/{payment_id}/complete | CompletePayment
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /v2/payments | CreatePayment
*PaymentsApi* | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /v2/payments/{payment_id} | GetPayment
*PaymentsApi* | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /v2/payments | ListPayments
*RefundsApi* | [**getPaymentRefund**](docs/Api/RefundsApi.md#getpaymentrefund) | **GET** /v2/refunds/{refund_id} | GetPaymentRefund
*RefundsApi* | [**listPaymentRefunds**](docs/Api/RefundsApi.md#listpaymentrefunds) | **GET** /v2/refunds | ListPaymentRefunds
*RefundsApi* | [**refundPayment**](docs/Api/RefundsApi.md#refundpayment) | **POST** /v2/refunds | RefundPayment
*ReportingApi* | [**listAdditionalRecipientReceivableRefunds**](docs/Api/ReportingApi.md#listadditionalrecipientreceivablerefunds) | **GET** /v2/locations/{location_id}/additional-recipient-receivable-refunds | ListAdditionalRecipientReceivableRefunds
*ReportingApi* | [**listAdditionalRecipientReceivables**](docs/Api/ReportingApi.md#listadditionalrecipientreceivables) | **GET** /v2/locations/{location_id}/additional-recipient-receivables | ListAdditionalRecipientReceivables
*TransactionsApi* | [**captureTransaction**](docs/Api/TransactionsApi.md#capturetransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
*TransactionsApi* | [**charge**](docs/Api/TransactionsApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
*TransactionsApi* | [**createRefund**](docs/Api/TransactionsApi.md#createrefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
*TransactionsApi* | [**listRefunds**](docs/Api/TransactionsApi.md#listrefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
*TransactionsApi* | [**retrieveTransaction**](docs/Api/TransactionsApi.md#retrievetransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
*TransactionsApi* | [**voidTransaction**](docs/Api/TransactionsApi.md#voidtransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction
*V1EmployeesApi* | [**createEmployee**](docs/Api/V1EmployeesApi.md#createemployee) | **POST** /v1/me/employees | CreateEmployee
*V1EmployeesApi* | [**createEmployeeRole**](docs/Api/V1EmployeesApi.md#createemployeerole) | **POST** /v1/me/roles | CreateEmployeeRole
*V1EmployeesApi* | [**createTimecard**](docs/Api/V1EmployeesApi.md#createtimecard) | **POST** /v1/me/timecards | CreateTimecard
*V1EmployeesApi* | [**deleteTimecard**](docs/Api/V1EmployeesApi.md#deletetimecard) | **DELETE** /v1/me/timecards/{timecard_id} | DeleteTimecard
*V1EmployeesApi* | [**listCashDrawerShifts**](docs/Api/V1EmployeesApi.md#listcashdrawershifts) | **GET** /v1/{location_id}/cash-drawer-shifts | ListCashDrawerShifts
*V1EmployeesApi* | [**listEmployeeRoles**](docs/Api/V1EmployeesApi.md#listemployeeroles) | **GET** /v1/me/roles | ListEmployeeRoles
*V1EmployeesApi* | [**listEmployees**](docs/Api/V1EmployeesApi.md#listemployees) | **GET** /v1/me/employees | ListEmployees
*V1EmployeesApi* | [**listTimecardEvents**](docs/Api/V1EmployeesApi.md#listtimecardevents) | **GET** /v1/me/timecards/{timecard_id}/events | ListTimecardEvents
*V1EmployeesApi* | [**listTimecards**](docs/Api/V1EmployeesApi.md#listtimecards) | **GET** /v1/me/timecards | ListTimecards
*V1EmployeesApi* | [**retrieveCashDrawerShift**](docs/Api/V1EmployeesApi.md#retrievecashdrawershift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | RetrieveCashDrawerShift
*V1EmployeesApi* | [**retrieveEmployee**](docs/Api/V1EmployeesApi.md#retrieveemployee) | **GET** /v1/me/employees/{employee_id} | RetrieveEmployee
*V1EmployeesApi* | [**retrieveEmployeeRole**](docs/Api/V1EmployeesApi.md#retrieveemployeerole) | **GET** /v1/me/roles/{role_id} | RetrieveEmployeeRole
*V1EmployeesApi* | [**retrieveTimecard**](docs/Api/V1EmployeesApi.md#retrievetimecard) | **GET** /v1/me/timecards/{timecard_id} | RetrieveTimecard
*V1EmployeesApi* | [**updateEmployee**](docs/Api/V1EmployeesApi.md#updateemployee) | **PUT** /v1/me/employees/{employee_id} | UpdateEmployee
*V1EmployeesApi* | [**updateEmployeeRole**](docs/Api/V1EmployeesApi.md#updateemployeerole) | **PUT** /v1/me/roles/{role_id} | UpdateEmployeeRole
*V1EmployeesApi* | [**updateTimecard**](docs/Api/V1EmployeesApi.md#updatetimecard) | **PUT** /v1/me/timecards/{timecard_id} | UpdateTimecard
*V1ItemsApi* | [**adjustInventory**](docs/Api/V1ItemsApi.md#adjustinventory) | **POST** /v1/{location_id}/inventory/{variation_id} | AdjustInventory
*V1ItemsApi* | [**applyFee**](docs/Api/V1ItemsApi.md#applyfee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | ApplyFee
*V1ItemsApi* | [**applyModifierList**](docs/Api/V1ItemsApi.md#applymodifierlist) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | ApplyModifierList
*V1ItemsApi* | [**createCategory**](docs/Api/V1ItemsApi.md#createcategory) | **POST** /v1/{location_id}/categories | CreateCategory
*V1ItemsApi* | [**createDiscount**](docs/Api/V1ItemsApi.md#creatediscount) | **POST** /v1/{location_id}/discounts | CreateDiscount
*V1ItemsApi* | [**createFee**](docs/Api/V1ItemsApi.md#createfee) | **POST** /v1/{location_id}/fees | CreateFee
*V1ItemsApi* | [**createItem**](docs/Api/V1ItemsApi.md#createitem) | **POST** /v1/{location_id}/items | CreateItem
*V1ItemsApi* | [**createModifierList**](docs/Api/V1ItemsApi.md#createmodifierlist) | **POST** /v1/{location_id}/modifier-lists | CreateModifierList
*V1ItemsApi* | [**createModifierOption**](docs/Api/V1ItemsApi.md#createmodifieroption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | CreateModifierOption
*V1ItemsApi* | [**createPage**](docs/Api/V1ItemsApi.md#createpage) | **POST** /v1/{location_id}/pages | CreatePage
*V1ItemsApi* | [**createVariation**](docs/Api/V1ItemsApi.md#createvariation) | **POST** /v1/{location_id}/items/{item_id}/variations | CreateVariation
*V1ItemsApi* | [**deleteCategory**](docs/Api/V1ItemsApi.md#deletecategory) | **DELETE** /v1/{location_id}/categories/{category_id} | DeleteCategory
*V1ItemsApi* | [**deleteDiscount**](docs/Api/V1ItemsApi.md#deletediscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | DeleteDiscount
*V1ItemsApi* | [**deleteFee**](docs/Api/V1ItemsApi.md#deletefee) | **DELETE** /v1/{location_id}/fees/{fee_id} | DeleteFee
*V1ItemsApi* | [**deleteItem**](docs/Api/V1ItemsApi.md#deleteitem) | **DELETE** /v1/{location_id}/items/{item_id} | DeleteItem
*V1ItemsApi* | [**deleteModifierList**](docs/Api/V1ItemsApi.md#deletemodifierlist) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | DeleteModifierList
*V1ItemsApi* | [**deleteModifierOption**](docs/Api/V1ItemsApi.md#deletemodifieroption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | DeleteModifierOption
*V1ItemsApi* | [**deletePage**](docs/Api/V1ItemsApi.md#deletepage) | **DELETE** /v1/{location_id}/pages/{page_id} | DeletePage
*V1ItemsApi* | [**deletePageCell**](docs/Api/V1ItemsApi.md#deletepagecell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | DeletePageCell
*V1ItemsApi* | [**deleteVariation**](docs/Api/V1ItemsApi.md#deletevariation) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | DeleteVariation
*V1ItemsApi* | [**listCategories**](docs/Api/V1ItemsApi.md#listcategories) | **GET** /v1/{location_id}/categories | ListCategories
*V1ItemsApi* | [**listDiscounts**](docs/Api/V1ItemsApi.md#listdiscounts) | **GET** /v1/{location_id}/discounts | ListDiscounts
*V1ItemsApi* | [**listFees**](docs/Api/V1ItemsApi.md#listfees) | **GET** /v1/{location_id}/fees | ListFees
*V1ItemsApi* | [**listInventory**](docs/Api/V1ItemsApi.md#listinventory) | **GET** /v1/{location_id}/inventory | ListInventory
*V1ItemsApi* | [**listItems**](docs/Api/V1ItemsApi.md#listitems) | **GET** /v1/{location_id}/items | ListItems
*V1ItemsApi* | [**listModifierLists**](docs/Api/V1ItemsApi.md#listmodifierlists) | **GET** /v1/{location_id}/modifier-lists | ListModifierLists
*V1ItemsApi* | [**listPages**](docs/Api/V1ItemsApi.md#listpages) | **GET** /v1/{location_id}/pages | ListPages
*V1ItemsApi* | [**removeFee**](docs/Api/V1ItemsApi.md#removefee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | RemoveFee
*V1ItemsApi* | [**removeModifierList**](docs/Api/V1ItemsApi.md#removemodifierlist) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | RemoveModifierList
*V1ItemsApi* | [**retrieveItem**](docs/Api/V1ItemsApi.md#retrieveitem) | **GET** /v1/{location_id}/items/{item_id} | RetrieveItem
*V1ItemsApi* | [**retrieveModifierList**](docs/Api/V1ItemsApi.md#retrievemodifierlist) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | RetrieveModifierList
*V1ItemsApi* | [**updateCategory**](docs/Api/V1ItemsApi.md#updatecategory) | **PUT** /v1/{location_id}/categories/{category_id} | UpdateCategory
*V1ItemsApi* | [**updateDiscount**](docs/Api/V1ItemsApi.md#updatediscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | UpdateDiscount
*V1ItemsApi* | [**updateFee**](docs/Api/V1ItemsApi.md#updatefee) | **PUT** /v1/{location_id}/fees/{fee_id} | UpdateFee
*V1ItemsApi* | [**updateItem**](docs/Api/V1ItemsApi.md#updateitem) | **PUT** /v1/{location_id}/items/{item_id} | UpdateItem
*V1ItemsApi* | [**updateModifierList**](docs/Api/V1ItemsApi.md#updatemodifierlist) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | UpdateModifierList
*V1ItemsApi* | [**updateModifierOption**](docs/Api/V1ItemsApi.md#updatemodifieroption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | UpdateModifierOption
*V1ItemsApi* | [**updatePage**](docs/Api/V1ItemsApi.md#updatepage) | **PUT** /v1/{location_id}/pages/{page_id} | UpdatePage
*V1ItemsApi* | [**updatePageCell**](docs/Api/V1ItemsApi.md#updatepagecell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | UpdatePageCell
*V1ItemsApi* | [**updateVariation**](docs/Api/V1ItemsApi.md#updatevariation) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | UpdateVariation
*V1LocationsApi* | [**listLocations**](docs/Api/V1LocationsApi.md#listlocations) | **GET** /v1/me/locations | ListLocations
*V1LocationsApi* | [**retrieveBusiness**](docs/Api/V1LocationsApi.md#retrievebusiness) | **GET** /v1/me | RetrieveBusiness
*V1TransactionsApi* | [**createRefund**](docs/Api/V1TransactionsApi.md#createrefund) | **POST** /v1/{location_id}/refunds | CreateRefund
*V1TransactionsApi* | [**listBankAccounts**](docs/Api/V1TransactionsApi.md#listbankaccounts) | **GET** /v1/{location_id}/bank-accounts | ListBankAccounts
*V1TransactionsApi* | [**listOrders**](docs/Api/V1TransactionsApi.md#listorders) | **GET** /v1/{location_id}/orders | ListOrders
*V1TransactionsApi* | [**listPayments**](docs/Api/V1TransactionsApi.md#listpayments) | **GET** /v1/{location_id}/payments | ListPayments
*V1TransactionsApi* | [**listRefunds**](docs/Api/V1TransactionsApi.md#listrefunds) | **GET** /v1/{location_id}/refunds | ListRefunds
*V1TransactionsApi* | [**listSettlements**](docs/Api/V1TransactionsApi.md#listsettlements) | **GET** /v1/{location_id}/settlements | ListSettlements
*V1TransactionsApi* | [**retrieveBankAccount**](docs/Api/V1TransactionsApi.md#retrievebankaccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | RetrieveBankAccount
*V1TransactionsApi* | [**retrieveOrder**](docs/Api/V1TransactionsApi.md#retrieveorder) | **GET** /v1/{location_id}/orders/{order_id} | RetrieveOrder
*V1TransactionsApi* | [**retrievePayment**](docs/Api/V1TransactionsApi.md#retrievepayment) | **GET** /v1/{location_id}/payments/{payment_id} | RetrievePayment
*V1TransactionsApi* | [**retrieveSettlement**](docs/Api/V1TransactionsApi.md#retrievesettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | RetrieveSettlement
*V1TransactionsApi* | [**updateOrder**](docs/Api/V1TransactionsApi.md#updateorder) | **PUT** /v1/{location_id}/orders/{order_id} | UpdateOrder


## Documentation For Models

 - [AdditionalRecipient](docs/Model/AdditionalRecipient.md)
 - [AdditionalRecipientReceivable](docs/Model/AdditionalRecipientReceivable.md)
 - [AdditionalRecipientReceivableRefund](docs/Model/AdditionalRecipientReceivableRefund.md)
 - [Address](docs/Model/Address.md)
 - [BalancePaymentDetails](docs/Model/BalancePaymentDetails.md)
 - [BatchChangeInventoryRequest](docs/Model/BatchChangeInventoryRequest.md)
 - [BatchChangeInventoryResponse](docs/Model/BatchChangeInventoryResponse.md)
 - [BatchDeleteCatalogObjectsRequest](docs/Model/BatchDeleteCatalogObjectsRequest.md)
 - [BatchDeleteCatalogObjectsResponse](docs/Model/BatchDeleteCatalogObjectsResponse.md)
 - [BatchRetrieveCatalogObjectsRequest](docs/Model/BatchRetrieveCatalogObjectsRequest.md)
 - [BatchRetrieveCatalogObjectsResponse](docs/Model/BatchRetrieveCatalogObjectsResponse.md)
 - [BatchRetrieveInventoryChangesRequest](docs/Model/BatchRetrieveInventoryChangesRequest.md)
 - [BatchRetrieveInventoryChangesResponse](docs/Model/BatchRetrieveInventoryChangesResponse.md)
 - [BatchRetrieveInventoryCountsRequest](docs/Model/BatchRetrieveInventoryCountsRequest.md)
 - [BatchRetrieveInventoryCountsResponse](docs/Model/BatchRetrieveInventoryCountsResponse.md)
 - [BatchRetrieveOrdersRequest](docs/Model/BatchRetrieveOrdersRequest.md)
 - [BatchRetrieveOrdersResponse](docs/Model/BatchRetrieveOrdersResponse.md)
 - [BatchUpsertCatalogObjectsRequest](docs/Model/BatchUpsertCatalogObjectsRequest.md)
 - [BatchUpsertCatalogObjectsResponse](docs/Model/BatchUpsertCatalogObjectsResponse.md)
 - [BreakType](docs/Model/BreakType.md)
 - [BusinessHours](docs/Model/BusinessHours.md)
 - [BusinessHoursPeriod](docs/Model/BusinessHoursPeriod.md)
 - [CancelPaymentByIdempotencyKeyRequest](docs/Model/CancelPaymentByIdempotencyKeyRequest.md)
 - [CancelPaymentByIdempotencyKeyResponse](docs/Model/CancelPaymentByIdempotencyKeyResponse.md)
 - [CancelPaymentRequest](docs/Model/CancelPaymentRequest.md)
 - [CancelPaymentResponse](docs/Model/CancelPaymentResponse.md)
 - [CaptureTransactionRequest](docs/Model/CaptureTransactionRequest.md)
 - [CaptureTransactionResponse](docs/Model/CaptureTransactionResponse.md)
 - [Card](docs/Model/Card.md)
 - [CardBrand](docs/Model/CardBrand.md)
 - [CardPaymentDetails](docs/Model/CardPaymentDetails.md)
 - [CatalogCategory](docs/Model/CatalogCategory.md)
 - [CatalogDiscount](docs/Model/CatalogDiscount.md)
 - [CatalogDiscountType](docs/Model/CatalogDiscountType.md)
 - [CatalogIdMapping](docs/Model/CatalogIdMapping.md)
 - [CatalogImage](docs/Model/CatalogImage.md)
 - [CatalogInfoRequest](docs/Model/CatalogInfoRequest.md)
 - [CatalogInfoResponse](docs/Model/CatalogInfoResponse.md)
 - [CatalogInfoResponseLimits](docs/Model/CatalogInfoResponseLimits.md)
 - [CatalogItem](docs/Model/CatalogItem.md)
 - [CatalogItemModifierListInfo](docs/Model/CatalogItemModifierListInfo.md)
 - [CatalogItemOption](docs/Model/CatalogItemOption.md)
 - [CatalogItemOptionForItem](docs/Model/CatalogItemOptionForItem.md)
 - [CatalogItemOptionValue](docs/Model/CatalogItemOptionValue.md)
 - [CatalogItemOptionValueForItemVariation](docs/Model/CatalogItemOptionValueForItemVariation.md)
 - [CatalogItemProductType](docs/Model/CatalogItemProductType.md)
 - [CatalogItemVariation](docs/Model/CatalogItemVariation.md)
 - [CatalogMeasurementUnit](docs/Model/CatalogMeasurementUnit.md)
 - [CatalogModifier](docs/Model/CatalogModifier.md)
 - [CatalogModifierList](docs/Model/CatalogModifierList.md)
 - [CatalogModifierListSelectionType](docs/Model/CatalogModifierListSelectionType.md)
 - [CatalogModifierOverride](docs/Model/CatalogModifierOverride.md)
 - [CatalogObject](docs/Model/CatalogObject.md)
 - [CatalogObjectBatch](docs/Model/CatalogObjectBatch.md)
 - [CatalogObjectType](docs/Model/CatalogObjectType.md)
 - [CatalogPricingRule](docs/Model/CatalogPricingRule.md)
 - [CatalogPricingType](docs/Model/CatalogPricingType.md)
 - [CatalogProductSet](docs/Model/CatalogProductSet.md)
 - [CatalogQuery](docs/Model/CatalogQuery.md)
 - [CatalogQueryExact](docs/Model/CatalogQueryExact.md)
 - [CatalogQueryItemVariationsForItemOptionValues](docs/Model/CatalogQueryItemVariationsForItemOptionValues.md)
 - [CatalogQueryItemsForItemOptions](docs/Model/CatalogQueryItemsForItemOptions.md)
 - [CatalogQueryItemsForModifierList](docs/Model/CatalogQueryItemsForModifierList.md)
 - [CatalogQueryItemsForTax](docs/Model/CatalogQueryItemsForTax.md)
 - [CatalogQueryPrefix](docs/Model/CatalogQueryPrefix.md)
 - [CatalogQueryRange](docs/Model/CatalogQueryRange.md)
 - [CatalogQuerySortedAttribute](docs/Model/CatalogQuerySortedAttribute.md)
 - [CatalogQueryText](docs/Model/CatalogQueryText.md)
 - [CatalogTax](docs/Model/CatalogTax.md)
 - [CatalogTimePeriod](docs/Model/CatalogTimePeriod.md)
 - [CatalogV1Id](docs/Model/CatalogV1Id.md)
 - [ChargeRequest](docs/Model/ChargeRequest.md)
 - [ChargeRequestAdditionalRecipient](docs/Model/ChargeRequestAdditionalRecipient.md)
 - [ChargeResponse](docs/Model/ChargeResponse.md)
 - [Checkout](docs/Model/Checkout.md)
 - [CompletePaymentRequest](docs/Model/CompletePaymentRequest.md)
 - [CompletePaymentResponse](docs/Model/CompletePaymentResponse.md)
 - [Coordinates](docs/Model/Coordinates.md)
 - [Country](docs/Model/Country.md)
 - [CreateBreakTypeRequest](docs/Model/CreateBreakTypeRequest.md)
 - [CreateBreakTypeResponse](docs/Model/CreateBreakTypeResponse.md)
 - [CreateCheckoutRequest](docs/Model/CreateCheckoutRequest.md)
 - [CreateCheckoutResponse](docs/Model/CreateCheckoutResponse.md)
 - [CreateCustomerCardRequest](docs/Model/CreateCustomerCardRequest.md)
 - [CreateCustomerCardResponse](docs/Model/CreateCustomerCardResponse.md)
 - [CreateCustomerRequest](docs/Model/CreateCustomerRequest.md)
 - [CreateCustomerResponse](docs/Model/CreateCustomerResponse.md)
 - [CreateMobileAuthorizationCodeRequest](docs/Model/CreateMobileAuthorizationCodeRequest.md)
 - [CreateMobileAuthorizationCodeResponse](docs/Model/CreateMobileAuthorizationCodeResponse.md)
 - [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
 - [CreateOrderRequestDiscount](docs/Model/CreateOrderRequestDiscount.md)
 - [CreateOrderRequestLineItem](docs/Model/CreateOrderRequestLineItem.md)
 - [CreateOrderRequestModifier](docs/Model/CreateOrderRequestModifier.md)
 - [CreateOrderRequestTax](docs/Model/CreateOrderRequestTax.md)
 - [CreateOrderResponse](docs/Model/CreateOrderResponse.md)
 - [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
 - [CreatePaymentResponse](docs/Model/CreatePaymentResponse.md)
 - [CreateRefundRequest](docs/Model/CreateRefundRequest.md)
 - [CreateRefundResponse](docs/Model/CreateRefundResponse.md)
 - [CreateShiftRequest](docs/Model/CreateShiftRequest.md)
 - [CreateShiftResponse](docs/Model/CreateShiftResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerCreationSource](docs/Model/CustomerCreationSource.md)
 - [CustomerCreationSourceFilter](docs/Model/CustomerCreationSourceFilter.md)
 - [CustomerFilter](docs/Model/CustomerFilter.md)
 - [CustomerGroupInfo](docs/Model/CustomerGroupInfo.md)
 - [CustomerInclusionExclusion](docs/Model/CustomerInclusionExclusion.md)
 - [CustomerPreferences](docs/Model/CustomerPreferences.md)
 - [CustomerQuery](docs/Model/CustomerQuery.md)
 - [CustomerSort](docs/Model/CustomerSort.md)
 - [CustomerSortField](docs/Model/CustomerSortField.md)
 - [DateRange](docs/Model/DateRange.md)
 - [DayOfWeek](docs/Model/DayOfWeek.md)
 - [DeleteBreakTypeRequest](docs/Model/DeleteBreakTypeRequest.md)
 - [DeleteBreakTypeResponse](docs/Model/DeleteBreakTypeResponse.md)
 - [DeleteCatalogObjectRequest](docs/Model/DeleteCatalogObjectRequest.md)
 - [DeleteCatalogObjectResponse](docs/Model/DeleteCatalogObjectResponse.md)
 - [DeleteCustomerCardRequest](docs/Model/DeleteCustomerCardRequest.md)
 - [DeleteCustomerCardResponse](docs/Model/DeleteCustomerCardResponse.md)
 - [DeleteCustomerRequest](docs/Model/DeleteCustomerRequest.md)
 - [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
 - [DeleteShiftRequest](docs/Model/DeleteShiftRequest.md)
 - [DeleteShiftResponse](docs/Model/DeleteShiftResponse.md)
 - [Device](docs/Model/Device.md)
 - [Employee](docs/Model/Employee.md)
 - [EmployeeStatus](docs/Model/EmployeeStatus.md)
 - [EmployeeWage](docs/Model/EmployeeWage.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCategory](docs/Model/ErrorCategory.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [GetBreakTypeRequest](docs/Model/GetBreakTypeRequest.md)
 - [GetBreakTypeResponse](docs/Model/GetBreakTypeResponse.md)
 - [GetEmployeeWageRequest](docs/Model/GetEmployeeWageRequest.md)
 - [GetEmployeeWageResponse](docs/Model/GetEmployeeWageResponse.md)
 - [GetPaymentRefundRequest](docs/Model/GetPaymentRefundRequest.md)
 - [GetPaymentRefundResponse](docs/Model/GetPaymentRefundResponse.md)
 - [GetPaymentRequest](docs/Model/GetPaymentRequest.md)
 - [GetPaymentResponse](docs/Model/GetPaymentResponse.md)
 - [GetShiftRequest](docs/Model/GetShiftRequest.md)
 - [GetShiftResponse](docs/Model/GetShiftResponse.md)
 - [InventoryAdjustment](docs/Model/InventoryAdjustment.md)
 - [InventoryAlertType](docs/Model/InventoryAlertType.md)
 - [InventoryChange](docs/Model/InventoryChange.md)
 - [InventoryChangeType](docs/Model/InventoryChangeType.md)
 - [InventoryCount](docs/Model/InventoryCount.md)
 - [InventoryPhysicalCount](docs/Model/InventoryPhysicalCount.md)
 - [InventoryState](docs/Model/InventoryState.md)
 - [InventoryTransfer](docs/Model/InventoryTransfer.md)
 - [ItemVariationLocationOverrides](docs/Model/ItemVariationLocationOverrides.md)
 - [ListAdditionalRecipientReceivableRefundsRequest](docs/Model/ListAdditionalRecipientReceivableRefundsRequest.md)
 - [ListAdditionalRecipientReceivableRefundsResponse](docs/Model/ListAdditionalRecipientReceivableRefundsResponse.md)
 - [ListAdditionalRecipientReceivablesRequest](docs/Model/ListAdditionalRecipientReceivablesRequest.md)
 - [ListAdditionalRecipientReceivablesResponse](docs/Model/ListAdditionalRecipientReceivablesResponse.md)
 - [ListBreakTypesRequest](docs/Model/ListBreakTypesRequest.md)
 - [ListBreakTypesResponse](docs/Model/ListBreakTypesResponse.md)
 - [ListCatalogRequest](docs/Model/ListCatalogRequest.md)
 - [ListCatalogResponse](docs/Model/ListCatalogResponse.md)
 - [ListCustomersRequest](docs/Model/ListCustomersRequest.md)
 - [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
 - [ListEmployeeWagesRequest](docs/Model/ListEmployeeWagesRequest.md)
 - [ListEmployeeWagesResponse](docs/Model/ListEmployeeWagesResponse.md)
 - [ListEmployeesRequest](docs/Model/ListEmployeesRequest.md)
 - [ListEmployeesResponse](docs/Model/ListEmployeesResponse.md)
 - [ListLocationsRequest](docs/Model/ListLocationsRequest.md)
 - [ListLocationsResponse](docs/Model/ListLocationsResponse.md)
 - [ListPaymentRefundsRequest](docs/Model/ListPaymentRefundsRequest.md)
 - [ListPaymentRefundsResponse](docs/Model/ListPaymentRefundsResponse.md)
 - [ListPaymentsRequest](docs/Model/ListPaymentsRequest.md)
 - [ListPaymentsResponse](docs/Model/ListPaymentsResponse.md)
 - [ListRefundsRequest](docs/Model/ListRefundsRequest.md)
 - [ListRefundsResponse](docs/Model/ListRefundsResponse.md)
 - [ListTransactionsRequest](docs/Model/ListTransactionsRequest.md)
 - [ListTransactionsResponse](docs/Model/ListTransactionsResponse.md)
 - [ListWorkweekConfigsRequest](docs/Model/ListWorkweekConfigsRequest.md)
 - [ListWorkweekConfigsResponse](docs/Model/ListWorkweekConfigsResponse.md)
 - [Location](docs/Model/Location.md)
 - [LocationCapability](docs/Model/LocationCapability.md)
 - [LocationStatus](docs/Model/LocationStatus.md)
 - [LocationType](docs/Model/LocationType.md)
 - [MeasurementUnit](docs/Model/MeasurementUnit.md)
 - [MeasurementUnitArea](docs/Model/MeasurementUnitArea.md)
 - [MeasurementUnitCustom](docs/Model/MeasurementUnitCustom.md)
 - [MeasurementUnitGeneric](docs/Model/MeasurementUnitGeneric.md)
 - [MeasurementUnitLength](docs/Model/MeasurementUnitLength.md)
 - [MeasurementUnitTime](docs/Model/MeasurementUnitTime.md)
 - [MeasurementUnitUnitType](docs/Model/MeasurementUnitUnitType.md)
 - [MeasurementUnitVolume](docs/Model/MeasurementUnitVolume.md)
 - [MeasurementUnitWeight](docs/Model/MeasurementUnitWeight.md)
 - [ModelBreak](docs/Model/ModelBreak.md)
 - [Money](docs/Model/Money.md)
 - [ObtainTokenRequest](docs/Model/ObtainTokenRequest.md)
 - [ObtainTokenResponse](docs/Model/ObtainTokenResponse.md)
 - [Order](docs/Model/Order.md)
 - [OrderEntry](docs/Model/OrderEntry.md)
 - [OrderFulfillment](docs/Model/OrderFulfillment.md)
 - [OrderFulfillmentPickupDetails](docs/Model/OrderFulfillmentPickupDetails.md)
 - [OrderFulfillmentPickupDetailsScheduleType](docs/Model/OrderFulfillmentPickupDetailsScheduleType.md)
 - [OrderFulfillmentRecipient](docs/Model/OrderFulfillmentRecipient.md)
 - [OrderFulfillmentShipmentDetails](docs/Model/OrderFulfillmentShipmentDetails.md)
 - [OrderFulfillmentState](docs/Model/OrderFulfillmentState.md)
 - [OrderFulfillmentType](docs/Model/OrderFulfillmentType.md)
 - [OrderLineItem](docs/Model/OrderLineItem.md)
 - [OrderLineItemAppliedDiscount](docs/Model/OrderLineItemAppliedDiscount.md)
 - [OrderLineItemAppliedTax](docs/Model/OrderLineItemAppliedTax.md)
 - [OrderLineItemDiscount](docs/Model/OrderLineItemDiscount.md)
 - [OrderLineItemDiscountScope](docs/Model/OrderLineItemDiscountScope.md)
 - [OrderLineItemDiscountType](docs/Model/OrderLineItemDiscountType.md)
 - [OrderLineItemModifier](docs/Model/OrderLineItemModifier.md)
 - [OrderLineItemTax](docs/Model/OrderLineItemTax.md)
 - [OrderLineItemTaxScope](docs/Model/OrderLineItemTaxScope.md)
 - [OrderLineItemTaxType](docs/Model/OrderLineItemTaxType.md)
 - [OrderMoneyAmounts](docs/Model/OrderMoneyAmounts.md)
 - [OrderQuantityUnit](docs/Model/OrderQuantityUnit.md)
 - [OrderReturn](docs/Model/OrderReturn.md)
 - [OrderReturnDiscount](docs/Model/OrderReturnDiscount.md)
 - [OrderReturnLineItem](docs/Model/OrderReturnLineItem.md)
 - [OrderReturnLineItemModifier](docs/Model/OrderReturnLineItemModifier.md)
 - [OrderReturnServiceCharge](docs/Model/OrderReturnServiceCharge.md)
 - [OrderReturnTax](docs/Model/OrderReturnTax.md)
 - [OrderRoundingAdjustment](docs/Model/OrderRoundingAdjustment.md)
 - [OrderServiceCharge](docs/Model/OrderServiceCharge.md)
 - [OrderServiceChargeCalculationPhase](docs/Model/OrderServiceChargeCalculationPhase.md)
 - [OrderSource](docs/Model/OrderSource.md)
 - [OrderState](docs/Model/OrderState.md)
 - [PayOrderRequest](docs/Model/PayOrderRequest.md)
 - [PayOrderResponse](docs/Model/PayOrderResponse.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentRefund](docs/Model/PaymentRefund.md)
 - [ProcessingFee](docs/Model/ProcessingFee.md)
 - [Product](docs/Model/Product.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundPaymentRequest](docs/Model/RefundPaymentRequest.md)
 - [RefundPaymentResponse](docs/Model/RefundPaymentResponse.md)
 - [RefundStatus](docs/Model/RefundStatus.md)
 - [RegisterDomainRequest](docs/Model/RegisterDomainRequest.md)
 - [RegisterDomainResponse](docs/Model/RegisterDomainResponse.md)
 - [RegisterDomainResponseStatus](docs/Model/RegisterDomainResponseStatus.md)
 - [RenewTokenRequest](docs/Model/RenewTokenRequest.md)
 - [RenewTokenResponse](docs/Model/RenewTokenResponse.md)
 - [RetrieveCatalogObjectRequest](docs/Model/RetrieveCatalogObjectRequest.md)
 - [RetrieveCatalogObjectResponse](docs/Model/RetrieveCatalogObjectResponse.md)
 - [RetrieveCustomerRequest](docs/Model/RetrieveCustomerRequest.md)
 - [RetrieveCustomerResponse](docs/Model/RetrieveCustomerResponse.md)
 - [RetrieveEmployeeRequest](docs/Model/RetrieveEmployeeRequest.md)
 - [RetrieveEmployeeResponse](docs/Model/RetrieveEmployeeResponse.md)
 - [RetrieveInventoryAdjustmentRequest](docs/Model/RetrieveInventoryAdjustmentRequest.md)
 - [RetrieveInventoryAdjustmentResponse](docs/Model/RetrieveInventoryAdjustmentResponse.md)
 - [RetrieveInventoryChangesRequest](docs/Model/RetrieveInventoryChangesRequest.md)
 - [RetrieveInventoryChangesResponse](docs/Model/RetrieveInventoryChangesResponse.md)
 - [RetrieveInventoryCountRequest](docs/Model/RetrieveInventoryCountRequest.md)
 - [RetrieveInventoryCountResponse](docs/Model/RetrieveInventoryCountResponse.md)
 - [RetrieveInventoryPhysicalCountRequest](docs/Model/RetrieveInventoryPhysicalCountRequest.md)
 - [RetrieveInventoryPhysicalCountResponse](docs/Model/RetrieveInventoryPhysicalCountResponse.md)
 - [RetrieveLocationRequest](docs/Model/RetrieveLocationRequest.md)
 - [RetrieveLocationResponse](docs/Model/RetrieveLocationResponse.md)
 - [RetrieveTransactionRequest](docs/Model/RetrieveTransactionRequest.md)
 - [RetrieveTransactionResponse](docs/Model/RetrieveTransactionResponse.md)
 - [RevokeTokenRequest](docs/Model/RevokeTokenRequest.md)
 - [RevokeTokenResponse](docs/Model/RevokeTokenResponse.md)
 - [SearchCatalogObjectsRequest](docs/Model/SearchCatalogObjectsRequest.md)
 - [SearchCatalogObjectsResponse](docs/Model/SearchCatalogObjectsResponse.md)
 - [SearchCustomersRequest](docs/Model/SearchCustomersRequest.md)
 - [SearchCustomersResponse](docs/Model/SearchCustomersResponse.md)
 - [SearchOrdersCustomerFilter](docs/Model/SearchOrdersCustomerFilter.md)
 - [SearchOrdersDateTimeFilter](docs/Model/SearchOrdersDateTimeFilter.md)
 - [SearchOrdersFilter](docs/Model/SearchOrdersFilter.md)
 - [SearchOrdersFulfillmentFilter](docs/Model/SearchOrdersFulfillmentFilter.md)
 - [SearchOrdersQuery](docs/Model/SearchOrdersQuery.md)
 - [SearchOrdersRequest](docs/Model/SearchOrdersRequest.md)
 - [SearchOrdersResponse](docs/Model/SearchOrdersResponse.md)
 - [SearchOrdersSort](docs/Model/SearchOrdersSort.md)
 - [SearchOrdersSortField](docs/Model/SearchOrdersSortField.md)
 - [SearchOrdersSourceFilter](docs/Model/SearchOrdersSourceFilter.md)
 - [SearchOrdersStateFilter](docs/Model/SearchOrdersStateFilter.md)
 - [SearchShiftsRequest](docs/Model/SearchShiftsRequest.md)
 - [SearchShiftsResponse](docs/Model/SearchShiftsResponse.md)
 - [Shift](docs/Model/Shift.md)
 - [ShiftFilter](docs/Model/ShiftFilter.md)
 - [ShiftFilterStatus](docs/Model/ShiftFilterStatus.md)
 - [ShiftQuery](docs/Model/ShiftQuery.md)
 - [ShiftSort](docs/Model/ShiftSort.md)
 - [ShiftSortField](docs/Model/ShiftSortField.md)
 - [ShiftStatus](docs/Model/ShiftStatus.md)
 - [ShiftWage](docs/Model/ShiftWage.md)
 - [ShiftWorkday](docs/Model/ShiftWorkday.md)
 - [ShiftWorkdayMatcher](docs/Model/ShiftWorkdayMatcher.md)
 - [SortOrder](docs/Model/SortOrder.md)
 - [SourceApplication](docs/Model/SourceApplication.md)
 - [StandardUnitDescription](docs/Model/StandardUnitDescription.md)
 - [StandardUnitDescriptionGroup](docs/Model/StandardUnitDescriptionGroup.md)
 - [TaxCalculationPhase](docs/Model/TaxCalculationPhase.md)
 - [TaxInclusionType](docs/Model/TaxInclusionType.md)
 - [Tender](docs/Model/Tender.md)
 - [TenderCardDetails](docs/Model/TenderCardDetails.md)
 - [TenderCardDetailsEntryMethod](docs/Model/TenderCardDetailsEntryMethod.md)
 - [TenderCardDetailsStatus](docs/Model/TenderCardDetailsStatus.md)
 - [TenderCashDetails](docs/Model/TenderCashDetails.md)
 - [TenderType](docs/Model/TenderType.md)
 - [TimeRange](docs/Model/TimeRange.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionProduct](docs/Model/TransactionProduct.md)
 - [UpdateBreakTypeRequest](docs/Model/UpdateBreakTypeRequest.md)
 - [UpdateBreakTypeResponse](docs/Model/UpdateBreakTypeResponse.md)
 - [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
 - [UpdateCustomerResponse](docs/Model/UpdateCustomerResponse.md)
 - [UpdateItemModifierListsRequest](docs/Model/UpdateItemModifierListsRequest.md)
 - [UpdateItemModifierListsResponse](docs/Model/UpdateItemModifierListsResponse.md)
 - [UpdateItemTaxesRequest](docs/Model/UpdateItemTaxesRequest.md)
 - [UpdateItemTaxesResponse](docs/Model/UpdateItemTaxesResponse.md)
 - [UpdateOrderRequest](docs/Model/UpdateOrderRequest.md)
 - [UpdateOrderResponse](docs/Model/UpdateOrderResponse.md)
 - [UpdateShiftRequest](docs/Model/UpdateShiftRequest.md)
 - [UpdateShiftResponse](docs/Model/UpdateShiftResponse.md)
 - [UpdateWorkweekConfigRequest](docs/Model/UpdateWorkweekConfigRequest.md)
 - [UpdateWorkweekConfigResponse](docs/Model/UpdateWorkweekConfigResponse.md)
 - [UpsertCatalogObjectRequest](docs/Model/UpsertCatalogObjectRequest.md)
 - [UpsertCatalogObjectResponse](docs/Model/UpsertCatalogObjectResponse.md)
 - [V1AdjustInventoryRequest](docs/Model/V1AdjustInventoryRequest.md)
 - [V1AdjustInventoryRequestAdjustmentType](docs/Model/V1AdjustInventoryRequestAdjustmentType.md)
 - [V1ApplyFeeRequest](docs/Model/V1ApplyFeeRequest.md)
 - [V1ApplyModifierListRequest](docs/Model/V1ApplyModifierListRequest.md)
 - [V1BankAccount](docs/Model/V1BankAccount.md)
 - [V1BankAccountType](docs/Model/V1BankAccountType.md)
 - [V1CashDrawerEvent](docs/Model/V1CashDrawerEvent.md)
 - [V1CashDrawerEventEventType](docs/Model/V1CashDrawerEventEventType.md)
 - [V1CashDrawerShift](docs/Model/V1CashDrawerShift.md)
 - [V1CashDrawerShiftEventType](docs/Model/V1CashDrawerShiftEventType.md)
 - [V1Category](docs/Model/V1Category.md)
 - [V1CreateCategoryRequest](docs/Model/V1CreateCategoryRequest.md)
 - [V1CreateDiscountRequest](docs/Model/V1CreateDiscountRequest.md)
 - [V1CreateEmployeeRoleRequest](docs/Model/V1CreateEmployeeRoleRequest.md)
 - [V1CreateFeeRequest](docs/Model/V1CreateFeeRequest.md)
 - [V1CreateItemRequest](docs/Model/V1CreateItemRequest.md)
 - [V1CreateModifierListRequest](docs/Model/V1CreateModifierListRequest.md)
 - [V1CreateModifierOptionRequest](docs/Model/V1CreateModifierOptionRequest.md)
 - [V1CreatePageRequest](docs/Model/V1CreatePageRequest.md)
 - [V1CreateRefundRequest](docs/Model/V1CreateRefundRequest.md)
 - [V1CreateRefundRequestType](docs/Model/V1CreateRefundRequestType.md)
 - [V1CreateVariationRequest](docs/Model/V1CreateVariationRequest.md)
 - [V1DeleteCategoryRequest](docs/Model/V1DeleteCategoryRequest.md)
 - [V1DeleteDiscountRequest](docs/Model/V1DeleteDiscountRequest.md)
 - [V1DeleteFeeRequest](docs/Model/V1DeleteFeeRequest.md)
 - [V1DeleteItemRequest](docs/Model/V1DeleteItemRequest.md)
 - [V1DeleteModifierListRequest](docs/Model/V1DeleteModifierListRequest.md)
 - [V1DeleteModifierOptionRequest](docs/Model/V1DeleteModifierOptionRequest.md)
 - [V1DeletePageCellRequest](docs/Model/V1DeletePageCellRequest.md)
 - [V1DeletePageRequest](docs/Model/V1DeletePageRequest.md)
 - [V1DeleteTimecardRequest](docs/Model/V1DeleteTimecardRequest.md)
 - [V1DeleteTimecardResponse](docs/Model/V1DeleteTimecardResponse.md)
 - [V1DeleteVariationRequest](docs/Model/V1DeleteVariationRequest.md)
 - [V1Discount](docs/Model/V1Discount.md)
 - [V1DiscountColor](docs/Model/V1DiscountColor.md)
 - [V1DiscountDiscountType](docs/Model/V1DiscountDiscountType.md)
 - [V1Employee](docs/Model/V1Employee.md)
 - [V1EmployeeRole](docs/Model/V1EmployeeRole.md)
 - [V1EmployeeRolePermissions](docs/Model/V1EmployeeRolePermissions.md)
 - [V1EmployeeStatus](docs/Model/V1EmployeeStatus.md)
 - [V1Fee](docs/Model/V1Fee.md)
 - [V1FeeAdjustmentType](docs/Model/V1FeeAdjustmentType.md)
 - [V1FeeCalculationPhase](docs/Model/V1FeeCalculationPhase.md)
 - [V1FeeInclusionType](docs/Model/V1FeeInclusionType.md)
 - [V1FeeType](docs/Model/V1FeeType.md)
 - [V1InventoryEntry](docs/Model/V1InventoryEntry.md)
 - [V1Item](docs/Model/V1Item.md)
 - [V1ItemColor](docs/Model/V1ItemColor.md)
 - [V1ItemImage](docs/Model/V1ItemImage.md)
 - [V1ItemType](docs/Model/V1ItemType.md)
 - [V1ItemVisibility](docs/Model/V1ItemVisibility.md)
 - [V1ListBankAccountsRequest](docs/Model/V1ListBankAccountsRequest.md)
 - [V1ListBankAccountsResponse](docs/Model/V1ListBankAccountsResponse.md)
 - [V1ListCashDrawerShiftsRequest](docs/Model/V1ListCashDrawerShiftsRequest.md)
 - [V1ListCashDrawerShiftsResponse](docs/Model/V1ListCashDrawerShiftsResponse.md)
 - [V1ListCategoriesRequest](docs/Model/V1ListCategoriesRequest.md)
 - [V1ListCategoriesResponse](docs/Model/V1ListCategoriesResponse.md)
 - [V1ListDiscountsRequest](docs/Model/V1ListDiscountsRequest.md)
 - [V1ListDiscountsResponse](docs/Model/V1ListDiscountsResponse.md)
 - [V1ListEmployeeRolesRequest](docs/Model/V1ListEmployeeRolesRequest.md)
 - [V1ListEmployeeRolesResponse](docs/Model/V1ListEmployeeRolesResponse.md)
 - [V1ListEmployeesRequest](docs/Model/V1ListEmployeesRequest.md)
 - [V1ListEmployeesRequestStatus](docs/Model/V1ListEmployeesRequestStatus.md)
 - [V1ListEmployeesResponse](docs/Model/V1ListEmployeesResponse.md)
 - [V1ListFeesRequest](docs/Model/V1ListFeesRequest.md)
 - [V1ListFeesResponse](docs/Model/V1ListFeesResponse.md)
 - [V1ListInventoryRequest](docs/Model/V1ListInventoryRequest.md)
 - [V1ListInventoryResponse](docs/Model/V1ListInventoryResponse.md)
 - [V1ListItemsRequest](docs/Model/V1ListItemsRequest.md)
 - [V1ListItemsResponse](docs/Model/V1ListItemsResponse.md)
 - [V1ListLocationsRequest](docs/Model/V1ListLocationsRequest.md)
 - [V1ListLocationsResponse](docs/Model/V1ListLocationsResponse.md)
 - [V1ListModifierListsRequest](docs/Model/V1ListModifierListsRequest.md)
 - [V1ListModifierListsResponse](docs/Model/V1ListModifierListsResponse.md)
 - [V1ListOrdersRequest](docs/Model/V1ListOrdersRequest.md)
 - [V1ListOrdersResponse](docs/Model/V1ListOrdersResponse.md)
 - [V1ListPagesRequest](docs/Model/V1ListPagesRequest.md)
 - [V1ListPagesResponse](docs/Model/V1ListPagesResponse.md)
 - [V1ListPaymentsRequest](docs/Model/V1ListPaymentsRequest.md)
 - [V1ListPaymentsResponse](docs/Model/V1ListPaymentsResponse.md)
 - [V1ListRefundsRequest](docs/Model/V1ListRefundsRequest.md)
 - [V1ListRefundsResponse](docs/Model/V1ListRefundsResponse.md)
 - [V1ListSettlementsRequest](docs/Model/V1ListSettlementsRequest.md)
 - [V1ListSettlementsRequestStatus](docs/Model/V1ListSettlementsRequestStatus.md)
 - [V1ListSettlementsResponse](docs/Model/V1ListSettlementsResponse.md)
 - [V1ListTimecardEventsRequest](docs/Model/V1ListTimecardEventsRequest.md)
 - [V1ListTimecardEventsResponse](docs/Model/V1ListTimecardEventsResponse.md)
 - [V1ListTimecardsRequest](docs/Model/V1ListTimecardsRequest.md)
 - [V1ListTimecardsResponse](docs/Model/V1ListTimecardsResponse.md)
 - [V1Merchant](docs/Model/V1Merchant.md)
 - [V1MerchantAccountType](docs/Model/V1MerchantAccountType.md)
 - [V1MerchantBusinessType](docs/Model/V1MerchantBusinessType.md)
 - [V1MerchantLocationDetails](docs/Model/V1MerchantLocationDetails.md)
 - [V1ModifierList](docs/Model/V1ModifierList.md)
 - [V1ModifierListSelectionType](docs/Model/V1ModifierListSelectionType.md)
 - [V1ModifierOption](docs/Model/V1ModifierOption.md)
 - [V1Money](docs/Model/V1Money.md)
 - [V1Order](docs/Model/V1Order.md)
 - [V1OrderHistoryEntry](docs/Model/V1OrderHistoryEntry.md)
 - [V1OrderHistoryEntryAction](docs/Model/V1OrderHistoryEntryAction.md)
 - [V1OrderState](docs/Model/V1OrderState.md)
 - [V1Page](docs/Model/V1Page.md)
 - [V1PageCell](docs/Model/V1PageCell.md)
 - [V1PageCellObjectType](docs/Model/V1PageCellObjectType.md)
 - [V1PageCellPlaceholderType](docs/Model/V1PageCellPlaceholderType.md)
 - [V1Payment](docs/Model/V1Payment.md)
 - [V1PaymentDiscount](docs/Model/V1PaymentDiscount.md)
 - [V1PaymentItemDetail](docs/Model/V1PaymentItemDetail.md)
 - [V1PaymentItemization](docs/Model/V1PaymentItemization.md)
 - [V1PaymentItemizationItemizationType](docs/Model/V1PaymentItemizationItemizationType.md)
 - [V1PaymentModifier](docs/Model/V1PaymentModifier.md)
 - [V1PaymentSurcharge](docs/Model/V1PaymentSurcharge.md)
 - [V1PaymentSurchargeType](docs/Model/V1PaymentSurchargeType.md)
 - [V1PaymentTax](docs/Model/V1PaymentTax.md)
 - [V1PaymentTaxInclusionType](docs/Model/V1PaymentTaxInclusionType.md)
 - [V1PhoneNumber](docs/Model/V1PhoneNumber.md)
 - [V1Refund](docs/Model/V1Refund.md)
 - [V1RefundType](docs/Model/V1RefundType.md)
 - [V1RemoveFeeRequest](docs/Model/V1RemoveFeeRequest.md)
 - [V1RemoveModifierListRequest](docs/Model/V1RemoveModifierListRequest.md)
 - [V1RetrieveBankAccountRequest](docs/Model/V1RetrieveBankAccountRequest.md)
 - [V1RetrieveBusinessRequest](docs/Model/V1RetrieveBusinessRequest.md)
 - [V1RetrieveCashDrawerShiftRequest](docs/Model/V1RetrieveCashDrawerShiftRequest.md)
 - [V1RetrieveEmployeeRequest](docs/Model/V1RetrieveEmployeeRequest.md)
 - [V1RetrieveEmployeeRoleRequest](docs/Model/V1RetrieveEmployeeRoleRequest.md)
 - [V1RetrieveItemRequest](docs/Model/V1RetrieveItemRequest.md)
 - [V1RetrieveModifierListRequest](docs/Model/V1RetrieveModifierListRequest.md)
 - [V1RetrieveOrderRequest](docs/Model/V1RetrieveOrderRequest.md)
 - [V1RetrievePaymentRequest](docs/Model/V1RetrievePaymentRequest.md)
 - [V1RetrieveSettlementRequest](docs/Model/V1RetrieveSettlementRequest.md)
 - [V1RetrieveTimecardRequest](docs/Model/V1RetrieveTimecardRequest.md)
 - [V1Settlement](docs/Model/V1Settlement.md)
 - [V1SettlementEntry](docs/Model/V1SettlementEntry.md)
 - [V1SettlementEntryType](docs/Model/V1SettlementEntryType.md)
 - [V1SettlementStatus](docs/Model/V1SettlementStatus.md)
 - [V1Tender](docs/Model/V1Tender.md)
 - [V1TenderCardBrand](docs/Model/V1TenderCardBrand.md)
 - [V1TenderEntryMethod](docs/Model/V1TenderEntryMethod.md)
 - [V1TenderType](docs/Model/V1TenderType.md)
 - [V1Timecard](docs/Model/V1Timecard.md)
 - [V1TimecardEvent](docs/Model/V1TimecardEvent.md)
 - [V1TimecardEventEventType](docs/Model/V1TimecardEventEventType.md)
 - [V1UpdateCategoryRequest](docs/Model/V1UpdateCategoryRequest.md)
 - [V1UpdateDiscountRequest](docs/Model/V1UpdateDiscountRequest.md)
 - [V1UpdateEmployeeRequest](docs/Model/V1UpdateEmployeeRequest.md)
 - [V1UpdateEmployeeRoleRequest](docs/Model/V1UpdateEmployeeRoleRequest.md)
 - [V1UpdateFeeRequest](docs/Model/V1UpdateFeeRequest.md)
 - [V1UpdateItemRequest](docs/Model/V1UpdateItemRequest.md)
 - [V1UpdateModifierListRequest](docs/Model/V1UpdateModifierListRequest.md)
 - [V1UpdateModifierListRequestSelectionType](docs/Model/V1UpdateModifierListRequestSelectionType.md)
 - [V1UpdateModifierOptionRequest](docs/Model/V1UpdateModifierOptionRequest.md)
 - [V1UpdateOrderRequest](docs/Model/V1UpdateOrderRequest.md)
 - [V1UpdateOrderRequestAction](docs/Model/V1UpdateOrderRequestAction.md)
 - [V1UpdatePageCellRequest](docs/Model/V1UpdatePageCellRequest.md)
 - [V1UpdatePageRequest](docs/Model/V1UpdatePageRequest.md)
 - [V1UpdateTimecardRequest](docs/Model/V1UpdateTimecardRequest.md)
 - [V1UpdateVariationRequest](docs/Model/V1UpdateVariationRequest.md)
 - [V1Variation](docs/Model/V1Variation.md)
 - [V1VariationInventoryAlertType](docs/Model/V1VariationInventoryAlertType.md)
 - [V1VariationPricingType](docs/Model/V1VariationPricingType.md)
 - [VoidTransactionRequest](docs/Model/VoidTransactionRequest.md)
 - [VoidTransactionResponse](docs/Model/VoidTransactionResponse.md)
 - [WebhookEvents](docs/Model/WebhookEvents.md)
 - [Weekday](docs/Model/Weekday.md)
 - [WorkweekConfig](docs/Model/WorkweekConfig.md)


## Documentation For Authorization

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: `https://connect.squareup.com/oauth2/authorize`
- **Scopes**:
 - **BANK_ACCOUNTS_READ**: __HTTP Method__: `GET`  Grants read access to bank account information associated with the targeted Square account. For example, to call the Connect v1 ListBankAccounts endpoint.
 - **CUSTOMERS_READ**: __HTTP Method__: `GET`  Grants read access to customer information. For example, to call the ListCustomers endpoint.
 - **CUSTOMERS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to customer information. For example, to create and update customer profiles.
 - **EMPLOYEES_READ**: __HTTP Method__: `GET`  Grants read access to employee profile information. For example, to call the Connect v1 Employees API.
 - **EMPLOYEES_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to employee profile information. For example, to create and modify employee profiles.
 - **INVENTORY_READ**: __HTTP Method__: `GET`  Grants read access to inventory information. For example, to call the RetrieveInventoryCount endpoint.
 - **INVENTORY_WRITE**: __HTTP Method__:  `POST`, `PUT`, `DELETE`  Grants write access to inventory information. For example, to call the BatchChangeInventory endpoint.
 - **ITEMS_READ**: __HTTP Method__: `GET`  Grants read access to product catalog information. For example, to get an  item or a list of items.
 - **ITEMS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to product catalog information. For example, to modify or add to a product catalog.
 - **MERCHANT_PROFILE_READ**: __HTTP Method__: `GET`  Grants read access to business and location information. For example, to obtain a location ID for subsequent activity.
 - **ORDERS_READ**: __HTTP Method__: `GET`  Grants read access to order information. For example, to call the BatchRetrieveOrders endpoint.
 - **ORDERS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to order information. For example, to call the CreateCheckout endpoint.
 - **PAYMENTS_READ**: __HTTP Method__: `GET`  Grants read access to transaction and refund information. For example, to call the RetrieveTransaction endpoint.
 - **PAYMENTS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to transaction and refunds information. For example, to process payments with the Transactions or Checkout API.
 - **PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Allow third party applications to deduct a portion of each transaction amount. __Required__ to use multiparty transaction functionality with the Transactions API.
 - **PAYMENTS_WRITE_IN_PERSON**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to transaction and refunds information. For example, to process in-person payments.
 - **SETTLEMENTS_READ**: __HTTP Method__: `GET`  Grants read access to settlement (deposit) information. For example, to call the Connect v1 ListSettlements endpoint.
 - **TIMECARDS_READ**: __HTTP Method__: `GET`  Grants read access to employee timecard information. For example, to call the Connect v1 ListTimecards endpoint.
 - **TIMECARDS_WRITE**: __HTTP Method__: `POST`, `PUT`, `DELETE`  Grants write access to employee timecard information. For example, to create and modify timecards.
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
