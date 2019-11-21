<?php

namespace SquareConnect\Util;

require 'autoload.php';

/**
 * CaseInsensitiveArrayTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CaseInsensitiveArrayTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass(){
      parent::setUpBeforeClass();
    }

    /**
     * Clean up after running each test case
     */
    public static function tearDownAfterClass(){
      parent::setUpBeforeClass();
    }

    /**
     * Test case for default constructor, get, and set.
     *
     * DefaultConstructor, Get, and Set.
     *
     */
    public function test_SimpleBehavior(){
        // Test default constructor.
        $cid = new CaseInsensitiveArray();
        $this->assertInstanceOf(
            '\SquareConnect\Util\CaseInsensitiveArray',
            $cid
        );

        $this->assertEquals(count($cid), 0);
        $this->assertEmpty($cid);

        // Test insert operator.
        $cid['Foo'] = 'Bar';
        $this->assertEquals(count($cid), 1);
        $this->assertEquals($cid['Foo'], 'Bar');
        $this->assertEquals($cid['FOO'], 'Bar');
    }

    /**
     * Test case for parameter constructor and get.
     *
     * ParamConstructor and Get.
     *
     */
    public function test_ParamConstructor(){
        // Test parameter constructor.
        $arr = [
          "FOO" => "foo_value",
          "bar" => "bar_value",
        ];
        $cid = new CaseInsensitiveArray($arr);
        $this->assertInstanceOf(
            '\SquareConnect\Util\CaseInsensitiveArray',
            $cid
        );
        $this->assertEquals(count($cid), 2);
        $this->assertEquals($cid['foo'], 'foo_value');
        $this->assertEquals($cid['bar'], 'bar_value');
    }

    public function test_IteratorIsCaseSensitive(){
      $arr = [
        "fOo" => "foo_value",
      ];
      $cid = new CaseInsensitiveArray($arr);
      $iterator = $cid->getIterator();
      while ($iterator->valid()) {
        $this->assertEquals($iterator->key(), "fOo");
        $this->assertNotEquals($iterator->key(), "FOO");
        $iterator->next();
      }
    }
}
