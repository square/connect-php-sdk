# Change Log

## Version 2.3.1 (2017-09-15)

### New features: Charge Orders

* `Charge` endpoint can charge a specific Order.

## Version 2.3.0 (2017-09-13)

### New features: Orders API

* `CreateOrder` endpoint creates an itemized order which can be referenced in messages to the `Charge` endpoint.
* `BatchRetrieveOrders` retrieves order objects referenced in one or more transactions based on the provided `order_id`.

**Note:** at this point, `BatchRetrieveOrders only` returns information on paid orders made through Square's eCommerce APIs (Transactions, Checkout).

### Other Changes

* `order` is removed from Transaction
* `order_id` is added to Transaction
* `OrderLineItemDiscountType.UNKOWN` renamed to `OrderLineItemDiscountType.UNKOWN_DISCOUNT`
* `OrderLineItemTaxType.UNKOWN` renamed to `OrderLineItemDiscountType.UNKOWN_TAX`
* `ChargeRequest.idempotency_key` is restricted to max length 192
* `ChargeRequest.card_nonce` is restricted to max length 192
* `ChargeRequest.customer_card_id` is restricted to max length 192
* `ChargeRequest.reference_id` is restricted to max length 40
* `ChargeRequest.note` is restricted to max length 60
* `ChargeRequest.customer_id` is restricted to max length 50
* `CreateCheckoutRequest.redirect_url` is restricted to max length 800
* Added `phone_number` and `business_name` to Location

## Version 2.2.1 (2017-08-11)

* Documentation style and links fixes
* Document Getters and Setters for protected properties
* Support for pagination on V1 endpoints
* Include refund detail fields on V1 Refund model

### Version 2.0.2 (2017-01-20)

* Bug Fixes for List Locations endpiont.

### Version 2.0.1 (2017-01-19)

* Add functionality for Square Checkout.

### Version 2.0.0.1 (2016-05-19)

* Improve error messaging for API connection failures.

## Version 2.0.0 (2016-03-30)

* Initial release of the SDK
