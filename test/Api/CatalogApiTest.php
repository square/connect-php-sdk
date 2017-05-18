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
    private static $api;
    private static $test_accounts;
    private $objects = array();
    private $idMap = array();
    private $beverages = array(
      "type" => "CATEGORY",
      "id" => "#Beverages",
      "category_data" => array(
        "name" => "Beverages"
      )
    );
    private $milks = array(
      "type" => "MODIFIER_LIST",
      "id" => "#Milks",
      "modifier_list_data" => array(
        "name" => "Milks",
        "modifiers" => array(
          array(
            "type" => "MODIFIER",
            "id" => "#WholeMilk",
            "modifier_data" => array(
              "name" => "Whole Milk")),
          array(
            "type" => 'MODIFIER',
            "id" => "#SkimMilk",
            "modifier_data" => array(
              "name" => "Skim Milk")),
          array(
            "type" => "MODIFIER",
            "id" => "#SoyMilk",
            "modifier_data" => array(
              "name" => "SoyMilk",
              "price_money" => array(
                "amount" => 50.0,
                "currency" => "USD"
              )
            )
          )
        )
      )
    );

    private $syrups = array(
      "type" => "MODIFIER_LIST",
      "id" => "#Syrups",
      "modifier_list_data" => array(
        "name" => "Syrups",
        "modifiers" => array(
          array(
            "type" => "MODIFIER",
            "id" => "#Hazelnut",
            "modifier_data" => array(
              "name" => "Hazelnut"
            )
          ),
          array(
            "type" => "MODIFIER",
            "id" => "#Vanilla",
            "modifier_data" => array(
              "name" => "Vanilla"
            )
          ),
          array(
            "type" => "MODIFIER",
            "id" => "#Chocolate",
            "modifier_data" => array(
              "name" => "Chocolate"
            )
          )
        )
      )
    );
    private $coffee = array(
      "type" => "ITEM",
      "id" => "#Coffee",
      "item_data" => array(
        "name" => "Coffee",
        "description" => "Hot bean juice",
        "abbreviation" => "Co",
        "category_id" => "#Beverages",
        "modifier_list_info" => array(array("modifier_list_id" => "#Milks")),
        "tax_ids" => array("#SalesTax"),
        "variations" => array(
          array(
            "type" => "ITEM_VARIATION",
            "id" => "#SmallCoffee",
            "item_variation_data" => array(
              "name" => "Small",
              "item_id" => "#Coffee",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => array(
                "amount" => 195.0,
                "currency" => "USD"
              )
            )
          ),
          array(
            "type" => "ITEM_VARIATION",
            "id" => "#LargeCoffee",
            "item_variation_data" => array(
              "name" => "Large",
              "item_id" => "#Coffee",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => array(
                "amount" => 255.0,
                "currency" => "USD"
              )
            )
          )
        )
      )
    );
    private $tea = array(
      "type" => "ITEM",
      "id" => "#Tea",
      "item_data" => array(
        "name" => "Tea",
        "description" => "Hot leaf juice",
        "abbreviation" => "Te",
        "category_id" => "#Beverages",
        "modifier_list_info" => array(array("modifier_list_id" => "#Milks")),
        "tax_ids" => array("#SalesTax"),
        "variations" => array(
          array(
            "type" => "ITEM_VARIATION",
            "id" => "#SmallTea",
            "item_variation_data" => array(
              "name" => "Small",
              "item_id" => "#Tea",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => array(
                "amount" => 150.0,
                "currency" => "USD"
              )
            )
          ),
          array(
            "type" => "ITEM_VARIATION",
            "id" => "#LargeTea",
            "item_variation_data" => array(
              "name" => "Large",
              "item_id" => "#Tea",
              "pricing_type" => "FIXED_PRICING",
              "price_money" => array(
                "amount" => 200.0,
                "currency" => "USD"
              )
            )
          )
        )
      )
    );
    private $sales_tax = array(
      "type" => "TAX",
      "id" => '#SalesTax',
      "present_at_all_locations" => true,
      "tax_data" => array(
        "name" => "Sales Tax",
        "calculation_phase" => "TAX_SUBTOTAL_PHASE",
        "inclusion_type" => "ADDITIVE",
        "percentage" => '5.0',
        "applies_to_custom_amounts" => true,
        "enabled" => true
      )
    );



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
      $this->objects = array($this->beverages, $this->milks, $this->syrups, $this->coffee, $this->tea, $this->sales_tax);
      $this->idMap = array();
      $this->buildTestCatalog();
    }

    protected function tearDown() {
      $this->deleteTestCatalog();
    }

    protected function buildTestCatalog() {
      $body = new \SquareConnect\Model\BatchUpsertCatalogObjectsRequest(array(
        "idempotency_key" => uniqid(),
        "batches" => array(
          array(
            "objects" => $this->objects
          )
        )
      ));
      $response = self::$api->batchUpsertCatalogObjects($body);

      foreach($response->getIdMappings() as $mapping) {
        $this->idMap[$mapping->getClientObjectId()] = $mapping->getObjectId();
      }
    }

    protected function deleteTestCatalog() {
        $objectIds = array();
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
          $request = new \SquareConnect\Model\BatchDeleteCatalogObjectsRequest(array(
            "object_ids" => $toRemove
          ));
          self::$api->batchDeleteCatalogObjects($request);
        }
    }

    public function test_clean() {

    }
    /**
     * Test case for batchDeleteCatalogObjects
     *
     * BatchDeleteCatalogObjects
     *
     */
    public function test_batchDeleteCatalogObjects() {
      $coffeeId = $this->idMap["#Coffee"];
      $smallCoffeeId = $this->idMap["#SmallCoffee"];
      $largeCoffeeId = $this->idMap["#LargeCoffee"];
      $smallTeaId = $this->idMap["#SmallTea"];

      $request = new \SquareConnect\Model\BatchDeleteCatalogObjectsRequest(array(
        "object_ids" => array($coffeeId, $smallTeaId)
      ));
      $response = self::$api->batchDeleteCatalogObjects($request);

      $this->assertEquals(4, count($response->getDeletedObjectIds()));
      $this->assertTrue(in_array($coffeeId, $response->getDeletedObjectIds()));
      $this->assertTrue(in_array($smallCoffeeId, $response->getDeletedObjectIds()));
      $this->assertTrue(in_array($largeCoffeeId, $response->getDeletedObjectIds()));
      $this->assertTrue(in_array($smallTeaId, $response->getDeletedObjectIds()));

    }
    /**
     * Test case for batchRetrieveCatalogObjects
     *
     * BatchRetrieveCatalogObjects
     *
     */
    public function test_batchRetrieveCatalogObjects() {
      $coffeeId = $this->idMap["#Coffee"];
      $salesTaxId = $this->idMap["#SalesTax"];
      $beveragesId = $this->idMap["#Beverages"];
      $milksId = $this->idMap["#Milks"];

      $request = new \SquareConnect\Model\BatchRetrieveCatalogObjectsRequest(array(
        "object_ids" => array($coffeeId, $salesTaxId)
      ));

      $response = self::$api->batchRetrieveCatalogObjects($request);

      $this->assertEquals(2, count($response->getObjects()));
      $coffee = $response->getObjects()[0];
      $this->assertEquals("ITEM", $coffee->getType());
      $this->assertEquals($coffeeId, $coffee->getId());
      $this->assertNotEmpty($coffee->getUpdatedAt());
      $this->assertTrue($coffee->getVersion() != 0);
      $this->assertFalse($coffee->getIsDeleted());
      $this->assertEmpty($coffee->getCatalogV1Ids());
      // $this->asserTrue($coffee->getPresentAtAllLocations());
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
      $this->assertNull($coffee->getItemData()->getImageUrl());

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

    /**
     * Test case for batchUpsertCatalogObjects
     *
     * BatchUpsertCatalogObjects
     *
     */
    public function test_batchUpsertCatalogObjects() {

      $batches = array();

      $numObjects = 0;
      // TODO s/$batchNum < 1/$batchNum < 3/
      for ($batchNum = 0; $batchNum < 1; $batchNum++) {
        $batch = array();

        for($i = 0; $i < 100; $i++) {
          $itemId = sprintf("Item-%d-%d", $batchNum, $i);

          $variationId = sprintf("#ItemVariation-%d-%d", $batchNum, $i);
          array_push($batch, new \SquareConnect\Model\CatalogObject(array(
            "type" => "ITEM",
            "id" => "#" . $itemId,
            "item_data" => array(
              "name" => $itemId,
              "variations" => array(
                array(
                  "type" => "ITEM_VARIATION",
                  "id" => $variationId,
                  "item_variation_data" => array(
                    "name" => "Regular",
                    "item_id" => "#" . $itemId,
                    "pricing_type" => "VARIABLE_PRICING"
                  )
                )
              )
            )
          )));
          $numObjects++;
        }
        array_push($batches, array("objects" => $batch));
      }

      $request = new \SquareConnect\Model\BatchUpsertCatalogObjectsRequest(array(
        "idempotency_key" =>  uniqid(),
        "batches" => $batches
      ));
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
      $coffeeId = $this->idMap["#Coffee"];
      $smallCoffeeId = $this->idMap["#SmallCoffee"];
      $largeCoffeeId = $this->idMap["#LargeCoffee"];
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

      $objects = array();
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
      $coffeeId = $this->idMap["#Coffee"];
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
      $query = new \SquareConnect\Model\SearchCatalogObjectsRequest(array(
        "query" => array(
          "prefix_query" => array(
            "attribute_name" => "name",
            "attribute_prefix" => "Sm"
          )
        ),
        "include_deleted_objects" => false,
        "include_related_objects" => false,
      ));

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
      $query = new \SquareConnect\Model\SearchCatalogObjectsRequest(array(
        "query" => array(
          "items_for_tax_query" => array(
            "tax_ids" => array(
              $this->idMap["#SalesTax"]
            )
          )
        ),
        "include_deleted_objects" => false,
        "include_related_objects" => false,
      ));

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
      $coffeeId = $this->idMap["#Coffee"];
      $milksId = $this->idMap["#Milks"];
      $syrupsId = $this->idMap["#Syrups"];

      $beforeUpdate = self::$api->retrieveCatalogObject($coffeeId, false);

      $this->assertCount(1, $beforeUpdate->getObject()->getItemData()->getModifierListInfo());
      $this->assertEquals($milksId,
        $beforeUpdate->getObject()->getItemData()->getModifierListInfo()[0]->getModifierListId());

      $request = new \SquareConnect\Model\UpdateItemModifierListsRequest(array(
        "item_ids" => array($coffeeId),
        "modifier_lists_to_enable" => array($syrupsId),
        "modifier_lists_to_disable" => array($milksId),
      ));
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
      $coffeeId = $this->idMap["#Coffee"];
      $salesTaxId = $this->idMap["#SalesTax"];

      $beforeUpdate = self::$api->retrieveCatalogObject($coffeeId, false);
      $this->assertCount(1, $beforeUpdate->getObject()->getItemData()->getTaxIds());

      $request = new \SquareConnect\Model\UpdateItemTaxesRequest(array(
        "item_ids" => array($coffeeId),
        "taxes_to_disable" => array($salesTaxId)
      ));

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
      $request = new \SquareConnect\Model\UpsertCatalogObjectRequest(array(
        "idempotency_key" => uniqid(),
        "object" => array(
          "type" => "DISCOUNT",
          "id" => "#Discount",
          "discount_data" => array(
            "name" => "Half off",
            "percentage" => "50.0"
          )
         )
      ));

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
