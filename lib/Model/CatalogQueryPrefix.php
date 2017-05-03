<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogQueryPrefix Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CatalogQueryPrefix implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'attribute_name' => 'string',
        'attribute_prefix' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'attribute_name' => 'attribute_name',
        'attribute_prefix' => 'attribute_prefix'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'attribute_name' => 'setAttributeName',
        'attribute_prefix' => 'setAttributePrefix'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'attribute_name' => 'getAttributeName',
        'attribute_prefix' => 'getAttributePrefix'
    );
  
    /**
      * $attribute_name The name of the attribute to be searched.
      * @var string
      */
    protected $attribute_name;
    /**
      * $attribute_prefix The desired prefix of the search attribute value.
      * @var string
      */
    protected $attribute_prefix;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->attribute_name = $data["attribute_name"];
            $this->attribute_prefix = $data["attribute_prefix"];
        }
    }
    /**
     * Gets attribute_name
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attribute_name;
    }
  
    /**
     * Sets attribute_name
     * @param string $attribute_name The name of the attribute to be searched.
     * @return $this
     */
    public function setAttributeName($attribute_name)
    {
        $this->attribute_name = $attribute_name;
        return $this;
    }
    /**
     * Gets attribute_prefix
     * @return string
     */
    public function getAttributePrefix()
    {
        return $this->attribute_prefix;
    }
  
    /**
     * Sets attribute_prefix
     * @param string $attribute_prefix The desired prefix of the search attribute value.
     * @return $this
     */
    public function setAttributePrefix($attribute_prefix)
    {
        $this->attribute_prefix = $attribute_prefix;
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
