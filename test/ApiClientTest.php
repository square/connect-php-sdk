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
 * ApiClientTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class ApiClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeadersNoHeaders() {
        $headers = [];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals(null, $batch_token);
    }

    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeadersNoLinkHeader() {
        $headers = [
            'link' => 'test'
        ];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals(null, $batch_token);
    }

    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeadersWrongLinkHeader() {
        $headers = [
            'Link' => 'test'
        ];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals(null, $batch_token);
    }

    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeadersNoNextLinkHeader() {
        $headers = [
            'Link' => '<http://connect.squareup.com/v1/payments/?batch_token=TOKEN1>; rel="previous"; title="previous chapter"'
        ];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals(null, $batch_token);
    }

    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeadersNoBatchToken() {
        $headers = [
            'Link' => "<http://connect.squareup.com/v1/payments/?batch_Ttoken=TOKEN1>;rel='next'"
        ];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals(null, $batch_token);
    }

    /**
     * Test case for getV1BatchTokenFromHeaders
     *
     */
    public function test_getV1BatchTokenFromHeaders() {
        $headers = [
            'Link' => "<http://connect.squareup.com/v1/payments/?batch_token=TOKEN1>;rel='next'"
        ];
        $batch_token = \SquareConnect\ApiClient::getV1BatchTokenFromHeaders($headers);
        $this->assertEquals('TOKEN1', $batch_token);
    }
}
