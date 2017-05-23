<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Refund Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1Refund implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'reason' => 'string',
        'refunded_money' => '\SquareConnect\Model\V1Money',
        'created_at' => 'string',
        'processed_at' => 'string',
        'payment_id' => 'string',
        'merchant_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'reason' => 'reason',
        'refunded_money' => 'refunded_money',
        'created_at' => 'created_at',
        'processed_at' => 'processed_at',
        'payment_id' => 'payment_id',
        'merchant_id' => 'merchant_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'reason' => 'setReason',
        'refunded_money' => 'setRefundedMoney',
        'created_at' => 'setCreatedAt',
        'processed_at' => 'setProcessedAt',
        'payment_id' => 'setPaymentId',
        'merchant_id' => 'setMerchantId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'reason' => 'getReason',
        'refunded_money' => 'getRefundedMoney',
        'created_at' => 'getCreatedAt',
        'processed_at' => 'getProcessedAt',
        'payment_id' => 'getPaymentId',
        'merchant_id' => 'getMerchantId'
    );
  
    /**
      * $type The type of refund
      * @var string
      */
    protected $type;
    /**
      * $reason The merchant-specified reason for the refund.
      * @var string
      */
    protected $reason;
    /**
      * $refunded_money The amount of money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_money;
    /**
      * $created_at The time when the merchant initiated the refund for Square to process, in ISO 8601 format..
      * @var string
      */
    protected $created_at;
    /**
      * $processed_at The time when Square processed the refund on behalf of the merchant, in ISO 8601 format.
      * @var string
      */
    protected $processed_at;
    /**
      * $payment_id The Square-issued ID of the payment the refund is applied to.
      * @var string
      */
    protected $payment_id;
    /**
      * $merchant_id 
      * @var string
      */
    protected $merchant_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["reason"])) {
              $this->reason = $data["reason"];
            } else {
              $this->reason = null;
            }
            if (isset($data["refunded_money"])) {
              $this->refunded_money = $data["refunded_money"];
            } else {
              $this->refunded_money = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["processed_at"])) {
              $this->processed_at = $data["processed_at"];
            } else {
              $this->processed_at = null;
            }
            if (isset($data["payment_id"])) {
              $this->payment_id = $data["payment_id"];
            } else {
              $this->payment_id = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
        }
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of refund
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason The merchant-specified reason for the refund.
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedMoney()
    {
        return $this->refunded_money;
    }
  
    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\V1Money $refunded_money The amount of money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->refunded_money = $refunded_money;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The time when the merchant initiated the refund for Square to process, in ISO 8601 format..
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets processed_at
     * @return string
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }
  
    /**
     * Sets processed_at
     * @param string $processed_at The time when Square processed the refund on behalf of the merchant, in ISO 8601 format.
     * @return $this
     */
    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
        return $this;
    }
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id The Square-issued ID of the payment the refund is applied to.
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id 
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
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
