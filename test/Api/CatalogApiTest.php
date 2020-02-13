<?php
namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;
use \SquareConnect\Model\CatalogObject;
use \SquareConnect\Model\BatchUpsertCatalogObjectsRequest;
use \SquareConnect\Model\BatchDeleteCatalogObjectsRequest;
use \SquareConnect\Model\UpdateItemTaxesRequest;
use \SquareConnect\Model\UpsertCatalogObjectRequest;


/**
 * CatalogApiTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CatalogApiTest extends \PHPUnit_Framework_TestCase
{

    const COFFEE_CLIENT_ID = "#Coffee";
    const BEVERAGES_CLIENT_ID = "#Beverages";
    const SMALL_COFFEE_CLIENT_ID = "#SmallCoffee";
    const LARGE_COFFEE_CLIENT_ID = "#LargeCoffee";
    const SMALL_TEA_CLIENT_ID = "#SmallTea";
    const SALES_TAX_CLIENT_ID = "#SalesTax";
    const MILKS_CLIENT_ID = "#Milks";

    private static $api;
    private static $test_accounts;
    private $objects = [];
    private $idMap = [];
    private $beverages = [
      "type" => "CATEGORY",
      "id" => self::BEVERAGES_CLIENT_ID,
      "category_data" => [
        "name" => "Beverages"
      ]
    ];
    private $milks = [
      "type" => "MODIFIER_LIST",
      "id" => self::MILKS_CLIENT_ID,
      "modifier_list_data" => [
        "name" => "Milks",
        "modifiers" => [
          [
            "type" => "MODIFIER",
            "id" => "#WholeMilk",
            "modifier_data" => [
              "name" => "Whole Milk"]],
          [
            "type" => 'MODIFIER',
            "id" => "#SkimMilk",
            "modifier_data" => [
              "name" => "Skim Milk"]],
          [
            "type" => "MODIFIER",
            "id" => "#SoyMilk",
            "modifier_data" => [
              "name" => "SoyMilk",
              "price_money" => [
                "amount" => 50.0,
                "currency" => "USD"
              ]
            ]
          ]
        ]
      ]
    ];

    private $syrups = [
      "type" => "MODIFIER_LIST",
      "id" => "#Syrups",
      "modifier_list_data" => [
        "name" => "Syrups",
        "modifiers" => [
          [
            "type" => "MODIFIER",
            "id" => "#Hazelnut",
            "modifier_data" => [
              "name" => "Hazelnut"
            ]
          ],
          [
            "type" => "MODIFIER",
            "id" => "#Vanilla",
            "modifier_data" => [
              "name" => "Vanilla"
            ]
          ],
          [
            "type" => "MODIFIER",
            "id" => "#Chocolate",
            "modifier_data" => [
              "name" => "Chocolate"
            ]
          ]
        ]
      ]
    ];
    private $coffee = [
      "type" => "ITEM",
      "id" => self::COFFEE_CLIENT_ID,
      "item_data" => [
        "name" => "Coffee",
        "description" => "Hot bean juice",
        "abbreviation" => "Co",
        "category_id" => self::BEVERAGES_CLIENT_ID,
        "modifier_list_info" => [["modifier_list_id" => self::MILKS_CLIENT_ID]],
        "tax_ids" => [self::SALES_TAX_CLIENT_ID],
        "variations" => [
          [
            "type" => "ITEM_VARIATION",
            "id" => self::SMALL_COFFEE_CLIENT_ID,
            "item_variation_data" => [
              "name" => "Small",
              "item_id" => self::COFFEE_CLIENT_ID,
              "pricing_type" => "FIXED_PRICING",
              "price_money" => [
                "amount" => 195.0,
                "currency" => "USD"
              ]
            ]
          ],
          [
            "type" => "ITEM_VARIATION",
            "id" => self::LARGE_COFFEE_CLIENT_ID,
            "item_variation_data" => [
              "name" => "Large",
              "item_id" => self::COFFEE_CLIENT_ID,
              "pricing_type" => "FIXED_PRICING",
              "price_money" => [
                "amount" => 255.0,
                "currency" => "USD"
              ]
            ]
          ]
        ]
      ]
    ];
    private $tea = [
      "type" => "ITEM",
      "id" => "#Tea",
      "item_data" => [
        "name" => "Tea",
        "description" => "Hot leaf juice",
        "abbreviation" => "Te",
        "category_id" => self::BEVERAGES_CLIENT_ID,
        "modifier_list_info" => [["modifier_list_id" => self::MILKS_CLIENT_ID]],
        "tax_ids" => [self::SALES_TAX_CLIENT_ID],
        "variations" => [
          [
            "type" => "ITEM_VARIATION",
            "id" => self::SMALL_TEA_CLIENT_ID,
            "item_variation_data" => [
              "name" => "Small",
              "item_id" => "#Tea",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => [
                "amount" => 150.0,
                "currency" => "USD"
              ]
            ]
          ],
          [
            "type" => "ITEM_VARIATION",
            "id" => "#LargeTea",
            "item_variation_data" => [
              "name" => "Large",
              "item_id" => "#Tea",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => [
                "amount" => 200.0,
                "currency" => "USD"
              ]
            ]
          ]
        ]
      ]
    ];
    private $sales_tax = [
      "type" => "TAX",
      "id" => '#SalesTax',
      "present_at_all_locations" => true,
      "tax_data" => [
        "name" => "Sales Tax",
        "calculation_phase" => "TAX_SUBTOTAL_PHASE",
        "inclusion_type" => "ADDITIVE",
        "percentage" => '5.0',
        "applies_to_custom_amounts" => true,
        "enabled" => true
      ]
    ];

    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass() {
      self::$api = new \SquareConnect\Api\CatalogApi();
      self::$test_accounts = new \SquareConnect\TestAccounts();
      // Configure OAuth2 access token for authorization: oauth2
      $account = self::$test_accounts->{'US-Prod'};
      $access_token = $account->{'access_token'};
      Configuration::getDefaultConfiguration()->setAccessToken($access_token);
    }

    protected function setUp() {
      $this->objects = [$this->beverages, $this->milks, $this->syrups, $this->coffee, $this->tea, $this->sales_tax];
      $this->idMap = [];
      $this->buildTestCatalog();
    }

    protected function tearDown() {
      $this->deleteTestCatalog();
    }

    protected function buildTestCatalog() {
      $body = new \SquareConnect\Model\BatchUpsertCatalogObjectsRequest([
        "idempotency_key" => uniqid(),
        "batches" => [
          [
            "objects" => $this->objects
          ]
        ]
      ]);

      $response = self::$api->batchUpsertCatalogObjects($body);

      foreach($response->getIdMappings() as $mapping) {
        $this->idMap[$mapping->getClientObjectId()] = $mapping->getObjectId();
      }
    }

    protected function deleteTestCatalog() {
        $objectIds = [];
        $cursor = "";
        do {
          $response = self::$api->listCatalog($cursor, null);
          $cursor = $response->getCursor();
          foreach($response->getObjects() as $object) {
            array_push($objectIds, $object->getId());
          }
        } while (!empty($cursor));

        while(!empty($objectIds)) {
          $toRemove = array_splice($objectIds, 0, 200);
          $request = new \SquareConnect\Model\BatchDeleteCatalogObjectsRequest([
            "object_ids" => $toRemove
          ]);
          self::$api->batchDeleteCatalogObjects($request);
        }
    }

    /**
     * Test case for batchDeleteCatalogObjects
     *
     * BatchDeleteCatalogObjects
     *
     */
    public function test_batchDeleteCatalogObjects() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $smallCoffeeId = $this->idMap[self::SMALL_COFFEE_CLIENT_ID];
      $largeCoffeeId = $this->idMap[self::LARGE_COFFEE_CLIENT_ID];
      $smallTeaId = $this->idMap[self::SMALL_TEA_CLIENT_ID];

      $request = new \SquareConnect\Model\BatchDeleteCatalogObjectsRequest([
        "object_ids" => [$coffeeId, $smallTeaId]
      ]);
      $response = self::$api->batchDeleteCatalogObjects($request);

      $this->assertCount(4, $response->getDeletedObjectIds());
      $this->assertContains($coffeeId, $response->getDeletedObjectIds());
      $this->assertContains($smallCoffeeId, $response->getDeletedObjectIds());
      $this->assertContains($largeCoffeeId, $response->getDeletedObjectIds());
      $this->assertContains($smallTeaId, $response->getDeletedObjectIds());
    }
    /**
     * Test case for batchRetrieveCatalogObjects
     *
     * BatchRetrieveCatalogObjects
     *
     */

    /*
    public function test_batchRetrieveCatalogObjects() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $salesTaxId = $this->idMap[self::SALES_TAX_CLIENT_ID];
      $beveragesId = $this->idMap[self::BEVERAGES_CLIENT_ID];
      $milksId = $this->idMap[self::MILKS_CLIENT_ID];

      $request = new \SquareConnect\Model\BatchRetrieveCatalogObjectsRequest([
        "object_ids" => [$coffeeId, $salesTaxId]
      ]);

      $response = self::$api->batchRetrieveCatalogObjects($request);

      $this->assertCount(2, $response->getObjects());
      $coffee = $response->getObjects()[0];
      $this->assertEquals("ITEM", $coffee->getType());
      $this->assertEquals($coffeeId, $coffee->getId());
      $this->assertNotEmpty($coffee->getUpdatedAt());
      $this->assertTrue($coffee->getVersion() != 0);
      $this->assertFalse($coffee->getIsDeleted());
      $this->assertEmpty($coffee->getCatalogV1Ids());
      $this->assertEmpty($coffee->getPresentAtLocationIds());
      $this->assertEmpty($coffee->getAbsentAtLocationIds());

      $this->assertEquals("Coffee", $coffee->getItemData()->getName());
      $this->assertEquals("Hot bean juice", $coffee->getItemData()->getDescription());
      $this->assertEquals("Co", $coffee->getItemData()->getAbbreviation());
      $this->assertNull($coffee->getItemData()->getLabelColor());
      $this->assertNull($coffee->getItemData()->getAvailableOnline());
      $this->assertNull($coffee->getItemData()->getAvailableForPickup());
      $this->assertNull($coffee->getItemData()->getAvailableElectronically());
      $this->assertEquals($beveragesId, $coffee->getItemData()->getCategoryId());
      $this->assertCount(1, $coffee->getItemData()->getTaxIds());
      $this->assertEquals($salesTaxId, $coffee->getItemData()->getTaxIds()[0]);
      $this->assertCount(1, $coffee->getItemData()->getModifierListInfo());
      $this->assertEquals($milksId, $coffee->getItemData()->getModifierListInfo()[0]->getModifierListId());
      $this->assertEmpty($coffee->getItemData()->getModifierListInfo()[0]->getModifierOverrides());
      $this->assertNull($coffee->getItemData()->getModifierListInfo()[0]->getMinSelectedModifiers());
      $this->assertNull($coffee->getItemData()->getModifierListInfo()[0]->getMaxSelectedModifiers());
      $this->assertNull($coffee->getItemData()->getModifierListInfo()[0]->getEnabled());

      $this->assertCount(2, $coffee->getItemData()->getVariations());
      $this->assertEquals("Small", $coffee->getItemData()->getVariations()[0]->getItemVariationData()->getName());
      $this->assertEquals("FIXED_PRICING", $coffee->getItemData()->getVariations()[0]->getItemVariationData()->getPricingType());
      $this->assertEquals(195.0, $coffee->getItemData()->getVariations()[0]->getItemVariationData()->getPriceMoney()->getAmount());
      $this->assertEquals("USD", $coffee->getItemData()->getVariations()[0]->getItemVariationData()->getPriceMoney()->getCurrency());

      $this->assertEquals("Large", $coffee->getItemData()->getVariations()[1]->getItemVariationData()->getName());
      $this->assertEquals("FIXED_PRICING", $coffee->getItemData()->getVariations()[1]->getItemVariationData()->getPricingType());
      $this->assertEquals(255.0, $coffee->getItemData()->getVariations()[1]->getItemVariationData()->getPriceMoney()->getAmount());
      $this->assertEquals("USD", $coffee->getItemData()->getVariations()[1]->getItemVariationData()->getPriceMoney()->getCurrency());

      $this->assertNull($coffee->getCategoryData());
      $this->assertNull($coffee->getItemVariationData());
      $this->assertNull($coffee->getTaxData());
      $this->assertNull($coffee->getDiscountData());
      $this->assertNull($coffee->getModifierListData());
      $this->assertNull($coffee->getModifierData());

      $salesTax = $response->getObjects()[1];
      $this->assertEquals("TAX", $salesTax->getType());
      $this->assertEquals($salesTaxId, $salesTax->getId());
      $this->assertEquals("Sales Tax", $salesTax->getTaxData()->getName());
    }
    */

    /**
     * Test case for batchUpsertCatalogObjects
     *
     * BatchUpsertCatalogObjects
     *
     */
    public function test_batchUpsertCatalogObjects() {
      $batches = [];

      $numObjects = 0;
      // TODO s/$batchNum < 1/$batchNum < 3/
      for ($batchNum = 0; $batchNum < 1; $batchNum++) {
        $batch = [];

        for($i = 0; $i < 100; $i++) {
          $itemId = sprintf("Item-%d-%d", $batchNum, $i);

          $variationId = sprintf("#ItemVariation-%d-%d", $batchNum, $i);
          array_push($batch, new \SquareConnect\Model\CatalogObject([
            "type" => "ITEM",
            "id" => "#" . $itemId,
            "item_data" => [
              "name" => $itemId,
              "variations" => [
                [
                  "type" => "ITEM_VARIATION",
                  "id" => $variationId,
                  "item_variation_data" => [
                    "name" => "Regular",
                    "item_id" => "#" . $itemId,
                    "pricing_type" => "VARIABLE_PRICING"
                  ]
                ]
              ]
            ]
          ]));
          $numObjects++;
        }
        array_push($batches, ["objects" => $batch]);
      }

      $request = new \SquareConnect\Model\BatchUpsertCatalogObjectsRequest([
        "idempotency_key" =>  uniqid(),
        "batches" => $batches
      ]);
      $response = self::$api->batchUpsertCatalogObjects($request);

      $this->assertCount($numObjects, $response->getObjects());
    }
    /**
     * Test case for catalogInfo
     *
     * CatalogInfo
     *
     */
    public function test_catalogInfo() {
      $response = self::$api->catalogInfo();
      $this->assertEquals(1000, $response->getLimits()->getBatchUpsertMaxObjectsPerBatch());
      $this->assertEquals(10000, $response->getLimits()->getBatchUpsertMaxTotalObjects());
      $this->assertEquals(1000, $response->getLimits()->getBatchRetrieveMaxObjectIds());
      $this->assertEquals(1000, $response->getLimits()->getSearchMaxPageLimit());
      $this->assertEquals(200, $response->getLimits()->getBatchDeleteMaxObjectIds());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemTaxesMaxItemIds());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemTaxesMaxTaxesToEnable());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemTaxesMaxTaxesToDisable());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemModifierListsMaxItemIds());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemModifierListsMaxModifierListsToEnable());
      $this->assertEquals(1000, $response->getLimits()->getUpdateItemModifierListsMaxModifierListsToDisable());
    }

    /**
     * Test case for deleteCatalogObject
     *
     * DeleteCatalogObject
     *
     */
    public function test_deleteCatalogObject() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $smallCoffeeId = $this->idMap[self::SMALL_COFFEE_CLIENT_ID];
      $largeCoffeeId = $this->idMap[self::LARGE_COFFEE_CLIENT_ID];
      $response = self::$api->deleteCatalogObject($coffeeId);

      $this->assertCount(3, $response->getDeletedObjectIds());

      $this->assertContains($coffeeId, $response->getDeletedObjectIds());
      $this->assertContains($smallCoffeeId, $response->getDeletedObjectIds());
      $this->assertContains($largeCoffeeId, $response->getDeletedObjectIds());
    }
    /**
     * Test case for listCatalog
     *
     * ListCatalog
     *
     */
    public function test_listCatalog() {
      $objects = [];
      $cursor = "";
      do {
        $response = self::$api->listCatalog($cursor, null);
        $cursor = $response->getCursor();
        $objects = array_merge($objects, $response->getObjects());
      } while (!empty($cursor));

      $this->assertCount(count($this->objects), $objects);
    }
    /**
     * Test case for retrieveCatalogObject
     *
     * RetrieveCatalogObject
     *
     */
    public function test_retrieveCatalogObject() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $response = self::$api->retrieveCatalogObject($coffeeId, true);

      $this->assertEmpty($response->getErrors());
      $this->assertEquals($coffeeId, $response->getObject()->getId());

      $this->assertCount(3, $response->getRelatedObjects());

      $gotMilks = false;
      $gotSalesTax = false;
      $gotBeverages = false;

      $this->assertNotEmpty(array_filter($response->getRelatedObjects(), function($object) {
        return $object->getType() == "MODIFIER_LIST" &&
          $object->getModifierListData()->getName() == "Milks";
      }));

      $this->assertNotEmpty(array_filter($response->getRelatedObjects(), function($object) {
        return $object->getType() == "CATEGORY" &&
          $object->getCategoryData()->getName() == "Beverages";
      }));

      $this->assertNotEmpty(array_filter($response->getRelatedObjects(), function($object) {
        return $object->getType() == "TAX" &&
          $object->getTaxData()->getName() == "Sales Tax";
      }));
    }
    /**
     * Test case for searchCatalogObjects
     *
     * SearchCatalogObjects
     *
     */
    public function test_searchCatalogObjectsWithPrefixQuery() {
      $query = new \SquareConnect\Model\SearchCatalogObjectsRequest([
        "query" => [
          "prefix_query" => [
            "attribute_name" => "name",
            "attribute_prefix" => "Sm"
          ]
        ],
        "include_deleted_objects" => false,
        "include_related_objects" => false,
      ]);

      $response = self::$api->searchCatalogObjects($query);
      $this->assertCount(2, $response->getObjects());

      $this->assertEquals("ITEM_VARIATION", $response->getObjects()[0]->getType());
      $this->assertEquals("Small", $response->getObjects()[0]->getItemVariationData()->getName());
      $this->assertEquals("ITEM_VARIATION", $response->getObjects()[1]->getType());
      $this->assertEquals("Small", $response->getObjects()[1]->getItemVariationData()->getName());
    }

    /**
     * Test case for searchCatalogObjects
     *
     * SearchCatalogObjects
     *
     */
    public function test_searchCatalogObjectsWithTaxQuery() {
      $query = new \SquareConnect\Model\SearchCatalogObjectsRequest([
        "query" => [
          "items_for_tax_query" => [
            "tax_ids" => [
              $this->idMap[self::SALES_TAX_CLIENT_ID]
            ]
          ]
        ],
        "include_deleted_objects" => false,
        "include_related_objects" => false,
      ]);

      $response = self::$api->searchCatalogObjects($query);
      $this->assertCount(2, $response->getObjects());

      $this->assertEquals("ITEM", $response->getObjects()[0]->getType());
      $this->assertEquals("ITEM", $response->getObjects()[1]->getType());

      $this->assertNotEmpty(array_filter($response->getObjects(), function($object) {
        return
          $object->getItemData()->getName() == "Coffee";
      }));

      $this->assertNotEmpty(array_filter($response->getObjects(), function($object) {
        return
          $object->getItemData()->getName() == "Tea";
      }));
    }
    /**
     * Test case for updateItemModifierLists
     *
     * UpdateItemModifierLists
     *
     */
    public function test_updateItemModifierLists() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $milksId = $this->idMap[self::MILKS_CLIENT_ID];
      $syrupsId = $this->idMap["#Syrups"];

      $beforeUpdate = self::$api->retrieveCatalogObject($coffeeId, false);

      $this->assertCount(1, $beforeUpdate->getObject()->getItemData()->getModifierListInfo());
      $this->assertEquals($milksId,
        $beforeUpdate->getObject()->getItemData()->getModifierListInfo()[0]->getModifierListId());

      $request = new \SquareConnect\Model\UpdateItemModifierListsRequest([
        "item_ids" => [$coffeeId],
        "modifier_lists_to_enable" => [$syrupsId],
        "modifier_lists_to_disable" => [$milksId],
      ]);
      $response = self::$api->updateItemModifierLists($request);

      $afterUpdate = self::$api->retrieveCatalogObject($coffeeId, false);
      // TODO: uncomment this soon
      // $this->assertCount(1, $afterUpdate->getObject()->getItemData()->getModifierListInfo());
      // $this->assertEquals($syrupsId,
      //   $afterUpdate->getObject()->getItemData()->getModifierListInfo()[0]->getModifierListId());
    }
    /**
     * Test case for updateItemTaxes
     *
     * UpdateItemTaxes
     *
     */
    public function test_updateItemTaxes() {
      $coffeeId = $this->idMap[self::COFFEE_CLIENT_ID];
      $salesTaxId = $this->idMap[self::SALES_TAX_CLIENT_ID];

      $beforeUpdate = self::$api->retrieveCatalogObject($coffeeId, false);
      $this->assertCount(1, $beforeUpdate->getObject()->getItemData()->getTaxIds());

      $request = new \SquareConnect\Model\UpdateItemTaxesRequest([
        "item_ids" => [$coffeeId],
        "taxes_to_disable" => [$salesTaxId]
      ]);

      self::$api->updateItemTaxes($request);

      $afterUpdate = self::$api->retrieveCatalogObject($coffeeId, false);
      $this->assertEmpty($afterUpdate->getObject()->getItemData()->getTaxIds());
    }
    /**
     * Test case for upsertCatalogObject
     *
     * UpsertCatalogObject
     *
     */
    public function test_upsertCatalogObject() {
      $request = new \SquareConnect\Model\UpsertCatalogObjectRequest([
        "idempotency_key" => uniqid(),
        "object" => [
          "type" => "DISCOUNT",
          "id" => "#Discount",
          "discount_data" => [
            "name" => "Half off",
            "percentage" => "50.0"
          ]
        ]
      ]);

      $response = self::$api->upsertCatalogObject($request);

      $this->assertEquals("Half off", $response->getCatalogObject()->getDiscountData()->getName());
      $this->assertNotNull($response->getCatalogObject()->getId());
      $this->assertNotNull($response->getCatalogObject()->getUpdatedAt());
      $this->assertNotNull($response->getCatalogObject()->getVersion());
      $this->assertFalse($response->getCatalogObject()->getIsDeleted());

      $this->assertCount(1, $response->getIdMappings());
      $this->assertEquals("#Discount", $response->getIdMappings()[0]->getClientObjectId());
    }
}
