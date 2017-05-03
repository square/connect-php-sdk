<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogModifierOverride Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CatalogModifierOverride implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'modifier_id' => 'string',
        'on_by_default' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'modifier_id' => 'modifier_id',
        'on_by_default' => 'on_by_default'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'modifier_id' => 'setModifierId',
        'on_by_default' => 'setOnByDefault'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'modifier_id' => 'getModifierId',
        'on_by_default' => 'getOnByDefault'
    );
  
    /**
      * $modifier_id The ID of the [CatalogModifier](#type-catalogmodifier) whose default behavior is being overridden.
      * @var string
      */
    protected $modifier_id;
    /**
      * $on_by_default If `true`, this [CatalogModifier](#type-catalogmodifier) should be selected by default for this [CatalogItem](#type-catalogitem).
      * @var bool
      */
    protected $on_by_default;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->modifier_id = $data["modifier_id"];
            $this->on_by_default = $data["on_by_default"];
        }
    }
    /**
     * Gets modifier_id
     * @return string
     */
    public function getModifierId()
    {
        return $this->modifier_id;
    }
  
    /**
     * Sets modifier_id
     * @param string $modifier_id The ID of the [CatalogModifier](#type-catalogmodifier) whose default behavior is being overridden.
     * @return $this
     */
    public function setModifierId($modifier_id)
    {
        $this->modifier_id = $modifier_id;
        return $this;
    }
    /**
     * Gets on_by_default
     * @return bool
     */
    public function getOnByDefault()
    {
        return $this->on_by_default;
    }
  
    /**
     * Sets on_by_default
     * @param bool $on_by_default If `true`, this [CatalogModifier](#type-catalogmodifier) should be selected by default for this [CatalogItem](#type-catalogitem).
     * @return $this
     */
    public function setOnByDefault($on_by_default)
    {
        $this->on_by_default = $on_by_default;
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
