Connect v2 PHP SDK
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

Usage
------------
There are five main objects that you'll be using, depending on what you want to do, each one is explained in more detail below. 
```
<?php
$transaction_api = new \SquareConnect\Api\TransactionApi();
$customerCard_api = new \SquareConnect\Api\CustomerCardApi();
$customer_api = new \SquareConnect\Api\CustomerApi();
$location_api = new \SquareConnect\Api\LocationApi();
$refund_api = new \SquareConnect\Api\RefundApi();
?>
```
##### Locations
You'll need to list locations for your square account before doing most API calls because the `location_id` is a in the url for most endpoints.
```
$location_api = new \SquareConnect\Api\LocationApi();
```
**List Locations**
```
$location_api->listLocations($authorization);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 

Response: [\SquareConnect\Model\ListLocationsResponse](lib/Model/ListLocationsResponse.php)
``` 
$location_api->listLocations($authorization)->getErrors();
$location_api->listLocations($authorization)->getLocations();
```
See all the functions you can use with the `->getLocations()` response in the [location model](lib/Model/Location.php)
##### Customers
Customers are end-users of a business and can be associated with transactions.
```
$customer_api = new \SquareConnect\Api\CustomerApi();
```
**List Customers**
```
$customer_api->listCustomers($authorization, $cursor = null);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$cursor` : This is an optional argument that specifies which page of customers to retrieve. Learn more about pagination [here](https://docs.connect.squareup.com/api/connect/v2/#paginatingresults).

Response: [\SquareConnect\Model\ListCustomersResponse](lib/Model/ListCustomersResponse.php)
``` 
$customer_api->listCustomers($authorization)->getErrors();
$customer_api->listCustomers($authorization)->getCustomers();
$customer_api->listCustomers($authorization)->getCursor();
```
See all the functions you can use with the `->getCustomers()` response in the [customer model](lib/Model/Customer.php).

**Create Customer**
```
$customer_api->createCustomer($authorization, $body);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$body` : The body is a [SquareConnect\Model\CreateCustomerRequest](lib/Model/CreateCustomerRequest.php) object that you'll have to build with the information of your customer.

Response: [\SquareConnect\Model\CreateCustomersResponse](lib/Model/CreateCustomerResponse.php)
``` 
$customer_api->createCustomer($authorization, $body)->getErrors();
$customer_api->createCustomer($authorization, $body)->getCustomer();
```
See all the functions you can use with the `->getCustomer()` response in the [customer model](lib/Model/Customer.php).

**Retrieve Customer**
```
$customer_api->retrieveCustomer($authorization, $customer_id);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$customer_id` : The `id` of the customer you want to retrieve. Use the `->getId()` fuction on a [customer object](lib/Model/Customer.php) to the `customer_id` of a retrieved customer. 

Response: [\SquareConnect\Model\RetrieveCustomerResponse](lib/Model/RetrieveCustomerResponse.php)
``` 
$customer_api->retrieveCustomer($authorization, $customer_id)->getErrors();
$customer_api->retrieveCustomer($authorization, $customer_id)->getCustomer();
```
See all the functions you can use with the `->getCustomer()` response in the [customer model](lib/Model/Customer.php).
**Update Customer**
```
$customer_api->updateCustomer($authorization, $customer_id, $body)
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$customer_id` : The `id` of the customer you want to update. Use the `->getId()` fuction on a [customer object](lib/Model/Customer.php) to the `customer_id` of a retrieved customer.
* `$body` : The body is a [SquareConnect\Model\UpdateCustomerRequest](lib/Model/UpdateCustomerRequest.php) object that you'll have to build with the information of your customer.

Response: [\SquareConnect\Model\UpdateCustomerResponse](lib/Model/UpdateCustomerRequest.php)
``` 
$customer_api->updateCustomer($authorization, $customer_id, $body)->getErrors();
$customer_api->updateCustomer($authorization, $customer_id, $body)->getCustomer();
```
See all the functions you can use with the `->getCustomer()` response in the [customer model](lib/Model/Customer.php)

**Delete Customer**
```
$customer_api->deleteCustomer($authorization, $customer_id)
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$customer_id` : The `id` of the customer you want to retrieve. Use the `->getId()` fuction on a [customer object](lib/Model/Customer.php) to the `customer_id` of a retrieved customer.

Response: [\SquareConnect\Model\DeleteCustomerResponse](lib/Model/DeleteCustomerResponse.php)
``` 
$customer_api->deleteCustomer($authorization, $customer_id)->getErrors();
```
##### Customers Cards
Customers Cards on file allow merchants to charge customers without them providing their credit card every time. Learn more here: [Saving Customer Information](https://docs.connect.squareup.com/articles/saving-customer-information/)
```
$customerCard_api = new \SquareConnect\Api\CustomerCardApi();
```
**Create Customer Card**
```
$customerCard_api->createCustomerCard($authorization, $customer_id, $body);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$customer_id` : The `id` of the customer you want to associate the card with.
* `$body` : The body is a [SquareConnect\Model\CreateCustomerCardRequest](lib/Model/CreateCustomerCardRequest.php) object that you'll have to build with the information of your customer's card.

Response: [\SquareConnect\Model\CreateCustomerCardResponse](lib/Model/CreateCustomerCardResponse.php)
``` 
$customerCard_api->createCustomerCard($authorization, $customer_id, $body)->getErrors();
$customerCard_api->createCustomerCard($authorization, $customer_id, $body)->getCard();
```
See all the functions you can use with the `->getCard()` response in the [card model](lib/Model/Card.php)

**Delete Customer Card**
```
$customerCard_api->deleteCustomerCard($authorization, $customer_id, $card_id)
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$customer_id` : The `id` of the customer whose card you want to delete.
* `$card_id` : The `id` of the card you want to delete.

Response: [\SquareConnect\Model\DeleteCustomerCardResponse](lib/Model/DeleteCustomerCardResponse.php)
``` 
$customerCard_api->deleteCustomerCard($authorization, $customer_id, $card_id)->getErrors();
```
##### Transactions
```
$transaction_api = new \SquareConnect\Api\TransactionApi();
```
**List Transactions**
```
$transaction_api->listTransactions($authorization, $location_id, $begin_time = null, $end_time = null, $sort_order = null, $cursor = null)
```
* `$authorization` : Your access token (sandbox, oauth or personal)
* `$location_id` : The id of the location you are requesting the transactions for.
* `$begin_time` : The beginning of the requested reporting period, in RFC 3339 format. (optional)
* `$end_time` The end of the requested reporting period, in RFC 3339 format. (optional)
* `$sort_order` The order in which results are listed in the response (`ASC` for chronological, `DESC` for reverse-chronological). (optional)
* `$cursor` : An optional pagination cursor to retrieve the next set of results for your original query to the endpoint. Learn more about pagination [here](https://docs.connect.squareup.com/api/connect/v2/#paginatingresults).

Response: [\SquareConnect\Model\ListTransactionsResponse](lib/Model/ListTransactionsResponse.php)
``` 
$transaction_api->listTransactions($authorization, $location_id)->getErrors();
$transaction_api->listTransactions($authorization, $location_id)->getTransactions();
$transaction_api->listTransactions($authorization, $location_id)->getCursor();
```
See all the functions you can use with the `->getTransactions()` response in the [transaction model](lib/Model/Transaction.php)

**Charge (Create Transaction)**
```
$transaction_api->charge($authorization, $location_id, $body);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth)
* `$location_id` : The id of the location you are creating the transactions for.
* `$body` : The body is a [SquareConnect\Model\ChargeRequest](lib/Model/ChargeRequest.php) object that you'll have to build with the information of your transaction.

Response: [\SquareConnect\Model\ChargeResponse](lib/Model/ChargeResponse.php)
``` 
$transaction_api->charge($authorization, $location_id, $body)->getErrors();
$transaction_api->charge($authorization, $location_id, $body)->getTransaction();
```
See all the functions you can use with the `->getTransactions()` response in the [transaction model](lib/Model/Transaction.php)

**Retrieve Transaction**
```
$transaction_api->retrieveTransaction($authorization, $location_id, $transaction_id);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$location_id` : The id of the location you are retrieving the transaction for.
* `$transaction_id` : The `id` of the transaction you want to retrieve. Use the `->getId()` fuction on a [transaction object](lib/Model/Transaction.php) to get the `transaction_id` 

Response: [\SquareConnect\Model\RetrieveTransactionResponse](lib/Model/RetrieveTransactionResponse.php)
``` 
$transaction_api->retrieveTransaction($authorization, $location_id, $transaction_id)->getErrors();
$transaction_api->retrieveTransaction($authorization, $location_id, $transaction_id)->getTransaction();
```
See all the functions you can use with the `->getTransactions()` response in the [transaction model](lib/Model/Transaction.php)

**Capture Transaction**
Charges a card that was previously authorized. See [delayed capture transactions](https://docs.connect.squareup.com/articles/delayed-capture-transactions/) for more information.
```
$transaction_api->captureTransaction($authorization, $location_id, $transaction_id);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$location_id` : The id of the location you are retrieving the transaction for.
* `$transaction_id` : The `id` of the previously authorized transaction you want to capture. 

Response: [\SquareConnect\Model\CaptureTransactionResponse](lib/Model/CaptureTransactionResponse.php)
``` 
$transaction_api->captureTransaction($authorization, $location_id, $transaction_id)->getErrors();
```
**Void Transaction**
Voids a previous card authorization. See [delayed capture transactions](https://docs.connect.squareup.com/articles/delayed-capture-transactions/) for more information.
```
$transaction_api->voidTransaction($authorization, $location_id, $transaction_id);
```
* `$authorization` : Your access token (sandbox, personal, or OAuth) 
* `$location_id` : The id of the location you are retrieving the transaction for.
* `$transaction_id` : The `id` of the previously authorized transaction you want to void. 

Response: [\SquareConnect\Model\VoidTransactionResponse](lib/Model/VoidTransactionResponse.php)
``` 
$transaction_api->voidTransaction($authorization, $location_id, $transaction_id)->getErrors();
```
##### Refunds
```
$refund_api = new \SquareConnect\Api\RefundApi();
```
**List Refunds**
```
$refund_api->listRefunds($authorization, $location_id, $begin_time = null, $end_time = null, $sort_order = null, $cursor = null)
```
* `$authorization` : Your access token (sandbox, oauth or personal)
* `$location_id` : The id of the location you are requesting the refunds for.
* `$begin_time` : The beginning of the requested reporting period, in RFC 3339 format. (optional)
* `$end_time` The end of the requested reporting period, in RFC 3339 format. (optional)
* `$sort_order` The order in which results are listed in the response (`ASC` for chronological, `DESC` for reverse-chronological). (optional)
* `$cursor` : An optional pagination cursor to retrieve the next set of results for your original query to the endpoint. Learn more about pagination [here](https://docs.connect.squareup.com/api/connect/v2/#paginatingresults).

Response: [\SquareConnect\Model\ListRefundsResponse](lib/Model/ListRefundsResponse.php)
``` 
$refund_api->listRefunds($authorization, $location_id)->getErrors();
$refund_api->listRefunds($authorization, $location_id)->getCursor();
```

**Create Refund**
```
$refund_api->createRefund($authorization, $location_id, $transaction_id, $body)
```
* `$authorization` : Your access token (sandbox, oauth or personal)
* `$location_id` : The id of the location you are requesting the refunds for.
* `$transaction_id` : The `id` of the previously charged transaction you want to refund. 
* `$body` : The body is a [SquareConnect\Model\CreateRefundRequest](lib/Model/CreateRefundRequest.php) object that you'll have to build with the information of your refund.

Response: [\SquareConnect\Model\CreateRefundResponse](lib/Model/CreateRefundResponse.php)
``` 
$refund_api->deleteCustomer($authorization, $customer_id)->getErrors();
$refund_api->deleteCustomer($authorization, $customer_id)->getRefund();
```
Contributing
------------

Send bug reports, feature requests, and code contributions to the [API
specifications repository](https://github.com/square/connect-api-specification),
as this repository contains only the generated SDK code. If you notice something wrong about this SDK in particular, feel free to raise an issue [here](https://github.com/square/connect-php-sdk/issues). 

License
-------

```
Copyright 2016 Square, Inc.

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
