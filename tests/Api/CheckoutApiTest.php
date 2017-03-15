<?php

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * CheckoutApiTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CheckoutApiTest extends \PHPUnit_Framework_TestCase
{
    private static $api_instance;
    private static $test_accounts;
    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass() {
    	require 'tests/TestAccounts.php';

        self::$api_instance = new \SquareConnect\Api\CheckoutApi();
        self::$test_accounts = new \SquareConnect\TestAccounts();
    }

    /**
     * Clean up after running each test case
     */
    public static function tearDownAfterClass() {

    }

    /**
     * Test case for createCheckout
     *
     * CreateCheckout
     *
     */
    public function test_createCheckout() {
    	$sandbox_account = self::$test_accounts->{'US-Prod-Sandbox'};
        $authorization = $sandbox_account->{'access_token'};
		$result = self::$api_instance->createCheckout($authorization, 'CBASEEffqN8pnVNXwoCL0dSGMVAgAQ', [
		  'idempotency_key' => uniqid(),
		  'order' => [
		    'reference_id' => 'my-order-001',
		    'line_items' => [
		      [
		        'name' => 'line-item-1',
		        'quantity' => '1',
		        'base_price_money' => [
		          'amount' => 1599,
		          'currency' => 'USD'
		        ]
		      ],
		      [
		        'name' => 'line-item-2',
		        'quantity' => '2',
		        'base_price_money' => [
		          'amount' => 799,
		          'currency' => 'USD'
		        ]
		      ]
		    ]
		  ],
		  'ask_for_shipping_address' => true,
		  'merchant_support_email' => 'merchant+support@website.com',
		  'pre_populate_buyer_email' => 'buyer@email.com',
		  'pre_populate_shipping_address' => [
		    'address_line_1' => '500 Electric Ave',
		    'address_line_2' => 'Suite 600',
		    'locality' => 'New York',
		    'administrative_district_level_1' => 'NY',
		    'postal_code' => '10003',
		    'first_name' => 'Jane',
		    'last_name' => 'Doe'
		  ],
		  'redirect_url' => 'https://merchant.website.com/order-confirm'
		]);
		$checkout = $result->getCheckout();
   

	    $this->assertInstanceOf(
	        '\SquareConnect\Model\CreateCheckoutResponse',
	        $result
	    );
	    $this->assertEmpty($result->getErrors());
	}
}
