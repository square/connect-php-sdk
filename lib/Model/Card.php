<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Card Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Card implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'card_brand' => 'string',
        'last_4' => 'string',
        'exp_month' => 'int',
        'exp_year' => 'int',
        'cardholder_name' => 'string',
        'billing_address' => '\SquareConnect\Model\Address'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'card_brand' => 'card_brand',
        'last_4' => 'last_4',
        'exp_month' => 'exp_month',
        'exp_year' => 'exp_year',
        'cardholder_name' => 'cardholder_name',
        'billing_address' => 'billing_address'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'card_brand' => 'setCardBrand',
        'last_4' => 'setLast4',
        'exp_month' => 'setExpMonth',
        'exp_year' => 'setExpYear',
        'cardholder_name' => 'setCardholderName',
        'billing_address' => 'setBillingAddress'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'card_brand' => 'getCardBrand',
        'last_4' => 'getLast4',
        'exp_month' => 'getExpMonth',
        'exp_year' => 'getExpYear',
        'cardholder_name' => 'getCardholderName',
        'billing_address' => 'getBillingAddress'
    );
  
    /**
      * $id The card's unique ID, if any.
      * @var string
      */
    protected $id;
    /**
      * $card_brand The card's brand (such as `VISA`). See [CardBrand](#type-cardbrand) for all possible values.
      * @var string
      */
    protected $card_brand;
    /**
      * $last_4 The last 4 digits of the card's number.
      * @var string
      */
    protected $last_4;
    /**
      * $exp_month The month of the card's expiration date. This value is always between `1` and `12`, inclusive.
      * @var int
      */
    protected $exp_month;
    /**
      * $exp_year The four-digit year of the card's expiration date.
      * @var int
      */
    protected $exp_year;
    /**
      * $cardholder_name The cardholder name. This value is present only if this object represents a customer's card on file.
      * @var string
      */
    protected $cardholder_name;
    /**
      * $billing_address The card's billing address. This value is present only if this object represents a customer's card on file.
      * @var \SquareConnect\Model\Address
      */
    protected $billing_address;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["card_brand"])) {
              $this->card_brand = $data["card_brand"];
            } else {
              $this->card_brand = null;
            }
            if (isset($data["last_4"])) {
              $this->last_4 = $data["last_4"];
            } else {
              $this->last_4 = null;
            }
            if (isset($data["exp_month"])) {
              $this->exp_month = $data["exp_month"];
            } else {
              $this->exp_month = null;
            }
            if (isset($data["exp_year"])) {
              $this->exp_year = $data["exp_year"];
            } else {
              $this->exp_year = null;
            }
            if (isset($data["cardholder_name"])) {
              $this->cardholder_name = $data["cardholder_name"];
            } else {
              $this->cardholder_name = null;
            }
            if (isset($data["billing_address"])) {
              $this->billing_address = $data["billing_address"];
            } else {
              $this->billing_address = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The card's unique ID, if any.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->card_brand;
    }
  
    /**
     * Sets card_brand
     * @param string $card_brand The card's brand (such as `VISA`). See [CardBrand](#type-cardbrand) for all possible values.
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->card_brand = $card_brand;
        return $this;
    }
    /**
     * Gets last_4
     * @return string
     */
    public function getLast4()
    {
        return $this->last_4;
    }
  
    /**
     * Sets last_4
     * @param string $last_4 The last 4 digits of the card's number.
     * @return $this
     */
    public function setLast4($last_4)
    {
        $this->last_4 = $last_4;
        return $this;
    }
    /**
     * Gets exp_month
     * @return int
     */
    public function getExpMonth()
    {
        return $this->exp_month;
    }
  
    /**
     * Sets exp_month
     * @param int $exp_month The month of the card's expiration date. This value is always between `1` and `12`, inclusive.
     * @return $this
     */
    public function setExpMonth($exp_month)
    {
        $this->exp_month = $exp_month;
        return $this;
    }
    /**
     * Gets exp_year
     * @return int
     */
    public function getExpYear()
    {
        return $this->exp_year;
    }
  
    /**
     * Sets exp_year
     * @param int $exp_year The four-digit year of the card's expiration date.
     * @return $this
     */
    public function setExpYear($exp_year)
    {
        $this->exp_year = $exp_year;
        return $this;
    }
    /**
     * Gets cardholder_name
     * @return string
     */
    public function getCardholderName()
    {
        return $this->cardholder_name;
    }
  
    /**
     * Sets cardholder_name
     * @param string $cardholder_name The cardholder name. This value is present only if this object represents a customer's card on file.
     * @return $this
     */
    public function setCardholderName($cardholder_name)
    {
        $this->cardholder_name = $cardholder_name;
        return $this;
    }
    /**
     * Gets billing_address
     * @return \SquareConnect\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }
  
    /**
     * Sets billing_address
     * @param \SquareConnect\Model\Address $billing_address The card's billing address. This value is present only if this object represents a customer's card on file.
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
