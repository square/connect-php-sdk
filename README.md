Square Connect PHP SDK [![Build Status](https://travis-ci.org/square/connect-php-sdk.svg?branch=master)](https://travis-ci.org/square/connect-php-sdk)
==================

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

$api_instance = new SquareConnect\Api\CatalogApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$body = new \SquareConnect\Model\BatchDeleteCatalogObjectsRequest(); // \SquareConnect\Model\BatchDeleteCatalogObjectsRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->batchDeleteCatalogObjects($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->batchDeleteCatalogObjects: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://connect.squareup.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
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
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer
*LocationsApi* | [**listLocations**](docs/Api/LocationsApi.md#listlocations) | **GET** /v2/locations | ListLocations
*TransactionsApi* | [**captureTransaction**](docs/Api/TransactionsApi.md#capturetransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
*TransactionsApi* | [**charge**](docs/Api/TransactionsApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
*TransactionsApi* | [**createRefund**](docs/Api/TransactionsApi.md#createrefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
*TransactionsApi* | [**listRefunds**](docs/Api/TransactionsApi.md#listrefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
*TransactionsApi* | [**retrieveTransaction**](docs/Api/TransactionsApi.md#retrievetransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
*TransactionsApi* | [**voidTransaction**](docs/Api/TransactionsApi.md#voidtransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [BatchDeleteCatalogObjectsRequest](docs/Model/BatchDeleteCatalogObjectsRequest.md)
 - [BatchDeleteCatalogObjectsResponse](docs/Model/BatchDeleteCatalogObjectsResponse.md)
 - [BatchRetrieveCatalogObjectsRequest](docs/Model/BatchRetrieveCatalogObjectsRequest.md)
 - [BatchRetrieveCatalogObjectsResponse](docs/Model/BatchRetrieveCatalogObjectsResponse.md)
 - [BatchUpsertCatalogObjectsRequest](docs/Model/BatchUpsertCatalogObjectsRequest.md)
 - [BatchUpsertCatalogObjectsResponse](docs/Model/BatchUpsertCatalogObjectsResponse.md)
 - [CaptureTransactionRequest](docs/Model/CaptureTransactionRequest.md)
 - [CaptureTransactionResponse](docs/Model/CaptureTransactionResponse.md)
 - [Card](docs/Model/Card.md)
 - [CardBrand](docs/Model/CardBrand.md)
 - [CatalogCategory](docs/Model/CatalogCategory.md)
 - [CatalogDiscount](docs/Model/CatalogDiscount.md)
 - [CatalogDiscountType](docs/Model/CatalogDiscountType.md)
 - [CatalogIdMapping](docs/Model/CatalogIdMapping.md)
 - [CatalogInfoRequest](docs/Model/CatalogInfoRequest.md)
 - [CatalogInfoResponse](docs/Model/CatalogInfoResponse.md)
 - [CatalogInfoResponseLimits](docs/Model/CatalogInfoResponseLimits.md)
 - [CatalogItem](docs/Model/CatalogItem.md)
 - [CatalogItemModifierListInfo](docs/Model/CatalogItemModifierListInfo.md)
 - [CatalogItemProductType](docs/Model/CatalogItemProductType.md)
 - [CatalogItemVariation](docs/Model/CatalogItemVariation.md)
 - [CatalogModifier](docs/Model/CatalogModifier.md)
 - [CatalogModifierList](docs/Model/CatalogModifierList.md)
 - [CatalogModifierListSelectionType](docs/Model/CatalogModifierListSelectionType.md)
 - [CatalogModifierOverride](docs/Model/CatalogModifierOverride.md)
 - [CatalogObject](docs/Model/CatalogObject.md)
 - [CatalogObjectBatch](docs/Model/CatalogObjectBatch.md)
 - [CatalogObjectType](docs/Model/CatalogObjectType.md)
 - [CatalogPricingType](docs/Model/CatalogPricingType.md)
 - [CatalogQuery](docs/Model/CatalogQuery.md)
 - [CatalogQueryExact](docs/Model/CatalogQueryExact.md)
 - [CatalogQueryItemsForModifierList](docs/Model/CatalogQueryItemsForModifierList.md)
 - [CatalogQueryItemsForTax](docs/Model/CatalogQueryItemsForTax.md)
 - [CatalogQueryPrefix](docs/Model/CatalogQueryPrefix.md)
 - [CatalogQueryRange](docs/Model/CatalogQueryRange.md)
 - [CatalogQuerySortedAttribute](docs/Model/CatalogQuerySortedAttribute.md)
 - [CatalogQueryText](docs/Model/CatalogQueryText.md)
 - [CatalogTax](docs/Model/CatalogTax.md)
 - [CatalogV1Id](docs/Model/CatalogV1Id.md)
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
 - [DeleteCatalogObjectRequest](docs/Model/DeleteCatalogObjectRequest.md)
 - [DeleteCatalogObjectResponse](docs/Model/DeleteCatalogObjectResponse.md)
 - [DeleteCustomerCardRequest](docs/Model/DeleteCustomerCardRequest.md)
 - [DeleteCustomerCardResponse](docs/Model/DeleteCustomerCardResponse.md)
 - [DeleteCustomerRequest](docs/Model/DeleteCustomerRequest.md)
 - [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCategory](docs/Model/ErrorCategory.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [InventoryAlertType](docs/Model/InventoryAlertType.md)
 - [ItemVariationLocationOverrides](docs/Model/ItemVariationLocationOverrides.md)
 - [ListCatalogRequest](docs/Model/ListCatalogRequest.md)
 - [ListCatalogResponse](docs/Model/ListCatalogResponse.md)
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
 - [RetrieveCatalogObjectRequest](docs/Model/RetrieveCatalogObjectRequest.md)
 - [RetrieveCatalogObjectResponse](docs/Model/RetrieveCatalogObjectResponse.md)
 - [RetrieveCustomerRequest](docs/Model/RetrieveCustomerRequest.md)
 - [RetrieveCustomerResponse](docs/Model/RetrieveCustomerResponse.md)
 - [RetrieveTransactionRequest](docs/Model/RetrieveTransactionRequest.md)
 - [RetrieveTransactionResponse](docs/Model/RetrieveTransactionResponse.md)
 - [SearchCatalogObjectsRequest](docs/Model/SearchCatalogObjectsRequest.md)
 - [SearchCatalogObjectsResponse](docs/Model/SearchCatalogObjectsResponse.md)
 - [SortOrder](docs/Model/SortOrder.md)
 - [TaxCalculationPhase](docs/Model/TaxCalculationPhase.md)
 - [TaxInclusionType](docs/Model/TaxInclusionType.md)
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
 - [UpdateItemModifierListsRequest](docs/Model/UpdateItemModifierListsRequest.md)
 - [UpdateItemModifierListsResponse](docs/Model/UpdateItemModifierListsResponse.md)
 - [UpdateItemTaxesRequest](docs/Model/UpdateItemTaxesRequest.md)
 - [UpdateItemTaxesResponse](docs/Model/UpdateItemTaxesResponse.md)
 - [UpsertCatalogObjectRequest](docs/Model/UpsertCatalogObjectRequest.md)
 - [UpsertCatalogObjectResponse](docs/Model/UpsertCatalogObjectResponse.md)
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