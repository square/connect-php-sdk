<?php
namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;
use \SquareConnect\Model\CreateOrderRequest;
use \SquareConnect\Model\OrderLineItem;
use \SquareConnect\Model\Money;

/**
 * OrdersApiTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class OrdersApiTest extends \PHPUnit_Framework_TestCase
{

  private static $api;
  private static $test_accounts;
  private static $location_id;

  /**
   * Setup before running each test case
   */
  public static function setUpBeforeClass() {
    self::$api = new \SquareConnect\Api\OrdersApi();
    self::$test_accounts = new \SquareConnect\TestAccounts();
    // Configure OAuth2 access token for authorization: oauth2
    $account = self::$test_accounts->{'US-Prod'};
    $access_token = $account->{'access_token'};
    Configuration::getDefaultConfiguration()->setAccessToken($access_token);

    self::$location_id = (new \SquareConnect\Api\LocationsApi())->listLocations()->getLocations()[0]->getId();
  }

  protected function setUp() {
    $this->catalogFixtures = new CatalogFixtures(new \SquareConnect\Api\CatalogApi());
  }

  protected function tearDown() {
    $this->catalogFixtures->cleanupTestCatalog();
  }

  public function test_createOrderWithCustomItems() {
    $body = new \SquareConnect\Model\CreateOrderRequest([
      "idempotency_key" => uniqid(),
      "reference_id" => "order ref id",
      "line_items" => [
        [
          "name" => "Espresso",
          "quantity" => "2",
          "note" => "some note",
          "base_price_money" => [
            "amount" => 200.0,
            "currency" => "USD"
          ]
        ]
      ]
    ]);

    $response = self::$api->createOrder(self::$location_id, $body);
    $this->assertNotNull($response->getOrder());
    $order = $response->getOrder();

    $expected = new \SquareConnect\Model\Order([
      "id" => $order->getId(),
      "location_id" => self::$location_id,
      "reference_id" => "order ref id",
      "line_items" => [
        new \SquareConnect\Model\OrderLineItem([
          "name" => "Espresso",
          "quantity" => "2",
          "note" => "some note",
          "base_price_money" => new \SquareConnect\Model\Money([
            "amount" => 200.0,
            "currency" => "USD"
          ]),
          "gross_sales_money" => new \SquareConnect\Model\Money([
            "amount" => 400.0,
            "currency" => "USD"
          ]),
          "total_tax_money" => new \SquareConnect\Model\Money([
            "amount" => 0.0,
            "currency" => "USD"
          ]),
          "total_discount_money" => new \SquareConnect\Model\Money([
            "amount" => 0.0,
            "currency" => "USD"
          ]),
          "total_money" => new \SquareConnect\Model\Money([
            "amount" => 400.0,
            "currency" => "USD"
          ])
        ])
      ],
      "total_tax_money" => new \SquareConnect\Model\Money([
        "amount" => 0.0,
        "currency" => "USD"
      ]),
      "total_discount_money" => new \SquareConnect\Model\Money([
        "amount" => 0.0,
        "currency" => "USD"
      ]),
      "total_money" => new \SquareConnect\Model\Money([
        "amount" => 400.0,
        "currency" => "USD"
      ])
    ]);

    $this->assertEquals($expected, $order);
  }

  public function test_createOrderWithCatalogItems() {
    $body = new \SquareConnect\Model\CreateOrderRequest([
      "idempotency_key" => uniqid(),
      "reference_id" => "order ref id with catalog",
      "line_items" => [
        [
          "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::LARGE_COFFEE_CLIENT_ID),
          "quantity" => "2",
          "modifiers" => [
            [
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::SOY_MILK_CLIENT_ID)
            ]
          ],
          "discounts" => [
            [
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::AMOUNT_DISCOUNT_CLIENT_ID)
            ]
          ],
          "taxes" => [
            [
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::SALES_TAX_CLIENT_ID)
            ]
          ]
        ]
      ]
    ]);

    $response = self::$api->createOrder(self::$location_id, $body);

    $this->assertNotNull($response->getOrder());
    $order = $response->getOrder();

    $expected = new \SquareConnect\Model\Order([
      "id" => $order->getId(),
      "location_id" => self::$location_id,
      "reference_id" => "order ref id with catalog",
      "line_items" => [
        new \SquareConnect\Model\OrderLineItem([
          "name" => $this->catalogFixtures->COFFEE["item_data"]["name"],
          "quantity" => "2",
          "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::LARGE_COFFEE_CLIENT_ID),
          "variation_name" => "Large",
          "modifiers" => [
            new \SquareConnect\Model\OrderLineItemModifier([
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::SOY_MILK_CLIENT_ID),
              "name" => "SoyMilk",
              "base_price_money" => new \SquareConnect\Model\Money([
                "amount" => 50.0,
                "currency" => "USD"
              ]),
              "total_price_money" => new \SquareConnect\Model\Money([
                "amount" => 100.0, // $0.50 * 2
                "currency" => "USD"
              ]),
            ])
          ],
          "discounts" => [
            new \SquareConnect\Model\OrderLineItemDiscount([
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::AMOUNT_DISCOUNT_CLIENT_ID),
              "name" => $this->catalogFixtures->AMOUNT_DISCOUNT["discount_data"]["name"],
              "type" => "FIXED_AMOUNT",
              "amount_money" => new \SquareConnect\Model\Money([
                "amount" => 50.0,
                "currency" => "USD"
              ]),
              "applied_money" => new \SquareConnect\Model\Money([
                "amount" => 50.0,
                "currency" => "USD"
              ]),
              "scope" => "LINE_ITEM"
            ])
          ],
          "taxes" => [
            new \SquareConnect\Model\OrderLineItemTax([
              "catalog_object_id" => $this->catalogFixtures->getObjectId(CatalogFixtures::SALES_TAX_CLIENT_ID),
              "name" => $this->catalogFixtures->SALES_TAX["tax_data"]["name"],
              "type" => "ADDITIVE",
              "percentage" => $this->catalogFixtures->SALES_TAX["tax_data"]["percentage"],
              "applied_money" => new \SquareConnect\Model\Money([
                // ((($2.50 + $0.50) * 2) - $0.50) * 5% = $0.28
                "amount" => 28.0,
                "currency" => "USD"
              ])
            ])
          ],
          "base_price_money" => new \SquareConnect\Model\Money([
            "amount" => 250.0,
            "currency" => "USD"
          ]),
          "gross_sales_money" => new \SquareConnect\Model\Money([
            "amount" => 600.0,  // ($2.50 + $0.5) * 2 = $6
            "currency" => "USD"
          ]),
          "total_tax_money" => new \SquareConnect\Model\Money([
            "amount" => 28.0, // ($6 - $0.50) *  5% additive = $0.28
            "currency" => "USD"
          ]),
          "total_discount_money" => new \SquareConnect\Model\Money([
            "amount" => 50.0,
            "currency" => "USD"
          ]),
          "total_money" => new \SquareConnect\Model\Money([
            "amount" => 578.0,
            "currency" => "USD"
          ])
        ])
      ],
      "total_tax_money" => new \SquareConnect\Model\Money([
        "amount" => 28.0,
        "currency" => "USD"
      ]),
      "total_discount_money" => new \SquareConnect\Model\Money([
        "amount" => 50.0,
        "currency" => "USD"
      ]),
      "total_money" => new \SquareConnect\Model\Money([
        "amount" => 578.0,
        "currency" => "USD"
      ])
    ]);

    $this->assertEquals($expected, $order);
  }
}

?>
