<?php
/**
 * OrderFilterCriteria
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\EbaySellFeedApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbaySellFeedApi\Model;

use \ArrayAccess;
use \OpenAPI\EbaySellFeedApi\ObjectSerializer;

/**
 * OrderFilterCriteria Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the order filters.
 * @package  OpenAPI\EbaySellFeedApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderFilterCriteria implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderFilterCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creation_date_range' => '\OpenAPI\EbaySellFeedApi\Model\DateRange',
        'modified_date_range' => '\OpenAPI\EbaySellFeedApi\Model\DateRange',
        'order_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creation_date_range' => null,
        'modified_date_range' => null,
        'order_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'creation_date_range' => 'creationDateRange',
        'modified_date_range' => 'modifiedDateRange',
        'order_status' => 'orderStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_date_range' => 'setCreationDateRange',
        'modified_date_range' => 'setModifiedDateRange',
        'order_status' => 'setOrderStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_date_range' => 'getCreationDateRange',
        'modified_date_range' => 'getModifiedDateRange',
        'order_status' => 'getOrderStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['creation_date_range'] = $data['creation_date_range'] ?? null;
        $this->container['modified_date_range'] = $data['modified_date_range'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets creation_date_range
     *
     * @return \OpenAPI\EbaySellFeedApi\Model\DateRange|null
     */
    public function getCreationDateRange()
    {
        return $this->container['creation_date_range'];
    }

    /**
     * Sets creation_date_range
     *
     * @param \OpenAPI\EbaySellFeedApi\Model\DateRange|null $creation_date_range creation_date_range
     *
     * @return self
     */
    public function setCreationDateRange($creation_date_range)
    {
        $this->container['creation_date_range'] = $creation_date_range;

        return $this;
    }

    /**
     * Gets modified_date_range
     *
     * @return \OpenAPI\EbaySellFeedApi\Model\DateRange|null
     */
    public function getModifiedDateRange()
    {
        return $this->container['modified_date_range'];
    }

    /**
     * Sets modified_date_range
     *
     * @param \OpenAPI\EbaySellFeedApi\Model\DateRange|null $modified_date_range modified_date_range
     *
     * @return self
     */
    public function setModifiedDateRange($modified_date_range)
    {
        $this->container['modified_date_range'] = $modified_date_range;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string|null $order_status The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both <code>ACTIVE </code>and<code> COMPLETED</code> states are returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


