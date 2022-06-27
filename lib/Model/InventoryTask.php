<?php
/**
 * InventoryTask
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InventoryTask Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'task_id' => 'string',
        'status' => 'string',
        'feed_type' => 'string',
        'creation_date' => 'string',
        'completion_date' => 'string',
        'schema_version' => 'string',
        'detail_href' => 'string',
        'upload_summary' => '\OpenAPI\Client\Model\UploadSummary',
        'filter_criteria' => '\OpenAPI\Client\Model\InventoryFilterCriteria',
        'inventory_file_template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'task_id' => null,
        'status' => null,
        'feed_type' => null,
        'creation_date' => null,
        'completion_date' => null,
        'schema_version' => null,
        'detail_href' => null,
        'upload_summary' => null,
        'filter_criteria' => null,
        'inventory_file_template' => null
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
        'task_id' => 'taskId',
        'status' => 'status',
        'feed_type' => 'feedType',
        'creation_date' => 'creationDate',
        'completion_date' => 'completionDate',
        'schema_version' => 'schemaVersion',
        'detail_href' => 'detailHref',
        'upload_summary' => 'uploadSummary',
        'filter_criteria' => 'filterCriteria',
        'inventory_file_template' => 'inventoryFileTemplate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'task_id' => 'setTaskId',
        'status' => 'setStatus',
        'feed_type' => 'setFeedType',
        'creation_date' => 'setCreationDate',
        'completion_date' => 'setCompletionDate',
        'schema_version' => 'setSchemaVersion',
        'detail_href' => 'setDetailHref',
        'upload_summary' => 'setUploadSummary',
        'filter_criteria' => 'setFilterCriteria',
        'inventory_file_template' => 'setInventoryFileTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'task_id' => 'getTaskId',
        'status' => 'getStatus',
        'feed_type' => 'getFeedType',
        'creation_date' => 'getCreationDate',
        'completion_date' => 'getCompletionDate',
        'schema_version' => 'getSchemaVersion',
        'detail_href' => 'getDetailHref',
        'upload_summary' => 'getUploadSummary',
        'filter_criteria' => 'getFilterCriteria',
        'inventory_file_template' => 'getInventoryFileTemplate'
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
        $this->container['task_id'] = $data['task_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['completion_date'] = $data['completion_date'] ?? null;
        $this->container['schema_version'] = $data['schema_version'] ?? null;
        $this->container['detail_href'] = $data['detail_href'] ?? null;
        $this->container['upload_summary'] = $data['upload_summary'] ?? null;
        $this->container['filter_criteria'] = $data['filter_criteria'] ?? null;
        $this->container['inventory_file_template'] = $data['inventory_file_template'] ?? null;
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
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id The ID of the task. This ID is generated when the task was created by the <strong>createInventoryTask</strong> method.
     *
     * @return self
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the task. Users must wait until status is complete before moving on to the next step (such as uploading/downloading a file). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets feed_type
     *
     * @return string|null
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     *
     * @param string|null $feed_type The feed type associated with the inventory task.
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The date the task was created.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets completion_date
     *
     * @return string|null
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param string|null $completion_date The timestamp when the task <strong>status</strong> went into the <code>COMPLETED</code>, <code>COMPLETED_WITH_ERROR</code>, or <code>PARTIALLY_PROCESSED</code> state. This field is only returned if the status is one of the three completed values.
     *
     * @return self
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string|null $schema_version The schema version number associated with the task.
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets detail_href
     *
     * @return string|null
     */
    public function getDetailHref()
    {
        return $this->container['detail_href'];
    }

    /**
     * Sets detail_href
     *
     * @param string|null $detail_href The path to the call URI used to retrieve the task. This field points to the <strong>getInventoryTask</strong> URI.
     *
     * @return self
     */
    public function setDetailHref($detail_href)
    {
        $this->container['detail_href'] = $detail_href;

        return $this;
    }

    /**
     * Gets upload_summary
     *
     * @return \OpenAPI\Client\Model\UploadSummary|null
     */
    public function getUploadSummary()
    {
        return $this->container['upload_summary'];
    }

    /**
     * Sets upload_summary
     *
     * @param \OpenAPI\Client\Model\UploadSummary|null $upload_summary upload_summary
     *
     * @return self
     */
    public function setUploadSummary($upload_summary)
    {
        $this->container['upload_summary'] = $upload_summary;

        return $this;
    }

    /**
     * Gets filter_criteria
     *
     * @return \OpenAPI\Client\Model\InventoryFilterCriteria|null
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }

    /**
     * Sets filter_criteria
     *
     * @param \OpenAPI\Client\Model\InventoryFilterCriteria|null $filter_criteria filter_criteria
     *
     * @return self
     */
    public function setFilterCriteria($filter_criteria)
    {
        $this->container['filter_criteria'] = $filter_criteria;

        return $this;
    }

    /**
     * Gets inventory_file_template
     *
     * @return string|null
     */
    public function getInventoryFileTemplate()
    {
        return $this->container['inventory_file_template'];
    }

    /**
     * Sets inventory_file_template
     *
     * @param string|null $inventory_file_template The inventory file template used to return specific types of inventory tasks, if set in the <strong>createInventoryTask</strong> method. This field does not apply to <code>LMS_ACTIVE_INVENTORY_REPORT</code> feed types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:InventoryFileTemplateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setInventoryFileTemplate($inventory_file_template)
    {
        $this->container['inventory_file_template'] = $inventory_file_template;

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


