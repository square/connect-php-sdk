<?php
namespace SquareConnect\Api;

class CatalogFixtures
{

  const COFFEE_CLIENT_ID = "#Coffee";
  const BEVERAGES_CLIENT_ID = "#Beverages";
  const SMALL_COFFEE_CLIENT_ID = "#SmallCoffee";
  const LARGE_COFFEE_CLIENT_ID = "#LargeCoffee";
  const SMALL_TEA_CLIENT_ID = "#SmallTea";
  const SOY_MILK_CLIENT_ID = "#SoyMilk";
  const SALES_TAX_CLIENT_ID = "#SalesTax";
  const MILKS_CLIENT_ID = "#Milks";
  const AMOUNT_DISCOUNT_CLIENT_ID = "#AmountDiscount";

  private $idMap = [];
  public $objects = [];

  public $BEVERAGES = [
    "type" => "CATEGORY",
    "id" => self::BEVERAGES_CLIENT_ID,
    "category_data" => [
      "name" => "Beverages"
    ]
  ];

  public $MILKS = [
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
          "id" => self::SOY_MILK_CLIENT_ID,
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

  public $SYRUPS = [
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

  public $COFFEE = [
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
              "amount" => 250.0,
              "currency" => "USD"
            ]
          ]
        ]
      ]
    ]
  ];

  public $TEA = [
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

  public $AMOUNT_DISCOUNT = [
    "type" => "DISCOUNT",
    "id" => self::AMOUNT_DISCOUNT_CLIENT_ID,
    "discount_data" => [
      "name" => "50 cents off",
      "amount_money" => [
        "amount" => 50.0,
        "currency" => "USD"
      ]
    ]
  ];

  public $SALES_TAX = [
    "type" => "TAX",
    "id" => self::SALES_TAX_CLIENT_ID,
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

  public function __construct($catalogApi) {
    $this->api = $catalogApi;
    $this->objects = [$this->BEVERAGES, $this->MILKS, $this->SYRUPS, $this->COFFEE, $this->TEA, $this->AMOUNT_DISCOUNT, $this->SALES_TAX];
    $this->idMap = [];

    $this->buildTestCatalog();
  }

  public function getObjectId($clientId) {
    return $this->idMap[$clientId];
  }

  private function buildTestCatalog() {
    $body = new \SquareConnect\Model\BatchUpsertCatalogObjectsRequest([
      "idempotency_key" => uniqid(),
      "batches" => [
        [
          "objects" => $this->objects
        ]
      ]
    ]);

    $response = $this->api->batchUpsertCatalogObjects($body);

    foreach($response->getIdMappings() as $mapping) {
      $this->idMap[$mapping->getClientObjectId()] = $mapping->getObjectId();
    }
  }


  public function cleanupTestCatalog() {
    $objectIds = [];
    $cursor = "";
    do {
      $response = $this->api->listCatalog($cursor, null);
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
      $this->api->batchDeleteCatalogObjects($request);
    }
  }
}

?>
