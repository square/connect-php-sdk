<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CreateCheckoutRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CreateCheckoutRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'idempotency_key' => 'string',
        'order' => '\SquareConnect\Model\CreateOrderRequestOrder',
        'ask_for_shipping_address' => 'bool',
        'merchant_support_email' => 'string',
        'pre_populate_buyer_email' => 'string',
        'pre_populate_shipping_address' => '\SquareConnect\Model\Address',
        'redirect_url' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'idempotency_key' => 'idempotency_key',
        'order' => 'order',
        'ask_for_shipping_address' => 'ask_for_shipping_address',
        'merchant_support_email' => 'merchant_support_email',
        'pre_populate_buyer_email' => 'pre_populate_buyer_email',
        'pre_populate_shipping_address' => 'pre_populate_shipping_address',
        'redirect_url' => 'redirect_url'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'idempotency_key' => 'setIdempotencyKey',
        'order' => 'setOrder',
        'ask_for_shipping_address' => 'setAskForShippingAddress',
        'merchant_support_email' => 'setMerchantSupportEmail',
        'pre_populate_buyer_email' => 'setPrePopulateBuyerEmail',
        'pre_populate_shipping_address' => 'setPrePopulateShippingAddress',
        'redirect_url' => 'setRedirectUrl'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'idempotency_key' => 'getIdempotencyKey',
        'order' => 'getOrder',
        'ask_for_shipping_address' => 'getAskForShippingAddress',
        'merchant_support_email' => 'getMerchantSupportEmail',
        'pre_populate_buyer_email' => 'getPrePopulateBuyerEmail',
        'pre_populate_shipping_address' => 'getPrePopulateShippingAddress',
        'redirect_url' => 'getRedirectUrl'
    );
  
    /**
      * $idempotency_key A unique string that identifies this checkout among others you've created. It can be any valid string but must be unique for every order sent to Square Checkout for a given location ID.  The idempotency key is used to avoid processing the same order more than once. If you're unsure whether a particular checkout was created successfully, you can reattempt it with the same idempotency key and all the same other parameters without worrying about creating duplicates.  We recommend using a random number/string generator native to the language you are working in to generate strings for your idempotency keys.  See [Idempotency keys](#idempotencykeys) for more information.
      * @var string
      */
    protected $idempotency_key;
    /**
      * $order The order including line items to be checked out.
      * @var \SquareConnect\Model\CreateOrderRequestOrder
      */
    protected $order;
    /**
      * $ask_for_shipping_address If `true`, Square Checkout will collect shipping information on your behalf and store that information with the transaction information in your Square Dashboard.  Default: `false`.
      * @var bool
      */
    protected $ask_for_shipping_address;
    /**
      * $merchant_support_email The email address to display on the Square Checkout confirmation page and confirmation email that the buyer can use to contact the merchant.  If this value is not set, the confirmation page and email will display the primary email address associated with the merchant's Square account.  Default: none; only exists if explicitly set.
      * @var string
      */
    protected $merchant_support_email;
    /**
      * $pre_populate_buyer_email If provided, the buyer's email is pre-populated on the checkout page as an editable text field.  Default: none; only exists if explicitly set.
      * @var string
      */
    protected $pre_populate_buyer_email;
    /**
      * $pre_populate_shipping_address If provided, the buyer's shipping info is pre-populated on the checkout page as editable text fields.  Default: none; only exists if explicitly set.
      * @var \SquareConnect\Model\Address
      */
    protected $pre_populate_shipping_address;
    /**
      * $redirect_url The URL to redirect to after checkout is completed with `checkoutId`, Square's `orderId`, `transactionId`, and `referenceId` appended as URL parameters. For example, if the provided redirect_url is `http://www.example.com/order-complete`, a successful transaction redirects the customer to:  `http://www.example.com/order-complete?checkoutId=xxxxxx&orderId=xxxxxx&referenceId=xxxxxx&transactionId=xxxxxx`  If you do not provide a redirect URL, Square Checkout will display an order confirmation page on your behalf; however Square strongly recommends that you provide a redirect URL so you can verify the transaction results and finalize the order through your existing/normal confirmation workflow.  Default: none; only exists if explicitly set.
      * @var string
      */
    protected $redirect_url;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["idempotency_key"])) {
              $this->idempotency_key = $data["idempotency_key"];
            } else {
              $this->idempotency_key = null;
            }
            if (isset($data["order"])) {
              $this->order = $data["order"];
            } else {
              $this->order = null;
            }
            if (isset($data["ask_for_shipping_address"])) {
              $this->ask_for_shipping_address = $data["ask_for_shipping_address"];
            } else {
              $this->ask_for_shipping_address = null;
            }
            if (isset($data["merchant_support_email"])) {
              $this->merchant_support_email = $data["merchant_support_email"];
            } else {
              $this->merchant_support_email = null;
            }
            if (isset($data["pre_populate_buyer_email"])) {
              $this->pre_populate_buyer_email = $data["pre_populate_buyer_email"];
            } else {
              $this->pre_populate_buyer_email = null;
            }
            if (isset($data["pre_populate_shipping_address"])) {
              $this->pre_populate_shipping_address = $data["pre_populate_shipping_address"];
            } else {
              $this->pre_populate_shipping_address = null;
            }
            if (isset($data["redirect_url"])) {
              $this->redirect_url = $data["redirect_url"];
            } else {
              $this->redirect_url = null;
            }
        }
    }
    /**
     * Gets idempotency_key
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotency_key;
    }
  
    /**
     * Sets idempotency_key
     * @param string $idempotency_key A unique string that identifies this checkout among others you've created. It can be any valid string but must be unique for every order sent to Square Checkout for a given location ID.  The idempotency key is used to avoid processing the same order more than once. If you're unsure whether a particular checkout was created successfully, you can reattempt it with the same idempotency key and all the same other parameters without worrying about creating duplicates.  We recommend using a random number/string generator native to the language you are working in to generate strings for your idempotency keys.  See [Idempotency keys](#idempotencykeys) for more information.
     * @return $this
     */
    public function setIdempotencyKey($idempotency_key)
    {
        $this->idempotency_key = $idempotency_key;
        return $this;
    }
    /**
     * Gets order
     * @return \SquareConnect\Model\CreateOrderRequestOrder
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param \SquareConnect\Model\CreateOrderRequestOrder $order The order including line items to be checked out.
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
    /**
     * Gets ask_for_shipping_address
     * @return bool
     */
    public function getAskForShippingAddress()
    {
        return $this->ask_for_shipping_address;
    }
  
    /**
     * Sets ask_for_shipping_address
     * @param bool $ask_for_shipping_address If `true`, Square Checkout will collect shipping information on your behalf and store that information with the transaction information in your Square Dashboard.  Default: `false`.
     * @return $this
     */
    public function setAskForShippingAddress($ask_for_shipping_address)
    {
        $this->ask_for_shipping_address = $ask_for_shipping_address;
        return $this;
    }
    /**
     * Gets merchant_support_email
     * @return string
     */
    public function getMerchantSupportEmail()
    {
        return $this->merchant_support_email;
    }
  
    /**
     * Sets merchant_support_email
     * @param string $merchant_support_email The email address to display on the Square Checkout confirmation page and confirmation email that the buyer can use to contact the merchant.  If this value is not set, the confirmation page and email will display the primary email address associated with the merchant's Square account.  Default: none; only exists if explicitly set.
     * @return $this
     */
    public function setMerchantSupportEmail($merchant_support_email)
    {
        $this->merchant_support_email = $merchant_support_email;
        return $this;
    }
    /**
     * Gets pre_populate_buyer_email
     * @return string
     */
    public function getPrePopulateBuyerEmail()
    {
        return $this->pre_populate_buyer_email;
    }
  
    /**
     * Sets pre_populate_buyer_email
     * @param string $pre_populate_buyer_email If provided, the buyer's email is pre-populated on the checkout page as an editable text field.  Default: none; only exists if explicitly set.
     * @return $this
     */
    public function setPrePopulateBuyerEmail($pre_populate_buyer_email)
    {
        $this->pre_populate_buyer_email = $pre_populate_buyer_email;
        return $this;
    }
    /**
     * Gets pre_populate_shipping_address
     * @return \SquareConnect\Model\Address
     */
    public function getPrePopulateShippingAddress()
    {
        return $this->pre_populate_shipping_address;
    }
  
    /**
     * Sets pre_populate_shipping_address
     * @param \SquareConnect\Model\Address $pre_populate_shipping_address If provided, the buyer's shipping info is pre-populated on the checkout page as editable text fields.  Default: none; only exists if explicitly set.
     * @return $this
     */
    public function setPrePopulateShippingAddress($pre_populate_shipping_address)
    {
        $this->pre_populate_shipping_address = $pre_populate_shipping_address;
        return $this;
    }
    /**
     * Gets redirect_url
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }
  
    /**
     * Sets redirect_url
     * @param string $redirect_url The URL to redirect to after checkout is completed with `checkoutId`, Square's `orderId`, `transactionId`, and `referenceId` appended as URL parameters. For example, if the provided redirect_url is `http://www.example.com/order-complete`, a successful transaction redirects the customer to:  `http://www.example.com/order-complete?checkoutId=xxxxxx&orderId=xxxxxx&referenceId=xxxxxx&transactionId=xxxxxx`  If you do not provide a redirect URL, Square Checkout will display an order confirmation page on your behalf; however Square strongly recommends that you provide a redirect URL so you can verify the transaction results and finalize the order through your existing/normal confirmation workflow.  Default: none; only exists if explicitly set.
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->redirect_url = $redirect_url;
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
