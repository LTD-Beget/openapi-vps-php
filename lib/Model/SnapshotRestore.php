<?php
/**
 * SnapshotRestore
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Облачных серверов
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.5.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * SnapshotRestore Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SnapshotRestore implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Snapshot_Restore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'snapshot' => '\OpenAPI\Client\Model\SnapshotSnapshot',
        'vps_id' => 'string',
        'vps_name' => 'string',
        'target_type' => 'string',
        'date_create' => 'string',
        'date_complete' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'snapshot' => null,
        'vps_id' => null,
        'vps_name' => null,
        'target_type' => 'enum',
        'date_create' => null,
        'date_complete' => null,
        'status' => 'enum'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'snapshot' => false,
		'vps_id' => false,
		'vps_name' => false,
		'target_type' => false,
		'date_create' => false,
		'date_complete' => false,
		'status' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'snapshot' => 'snapshot',
        'vps_id' => 'vps_id',
        'vps_name' => 'vps_name',
        'target_type' => 'target_type',
        'date_create' => 'date_create',
        'date_complete' => 'date_complete',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'snapshot' => 'setSnapshot',
        'vps_id' => 'setVpsId',
        'vps_name' => 'setVpsName',
        'target_type' => 'setTargetType',
        'date_create' => 'setDateCreate',
        'date_complete' => 'setDateComplete',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'snapshot' => 'getSnapshot',
        'vps_id' => 'getVpsId',
        'vps_name' => 'getVpsName',
        'target_type' => 'getTargetType',
        'date_create' => 'getDateCreate',
        'date_complete' => 'getDateComplete',
        'status' => 'getStatus'
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

    public const TARGET_TYPE_EXISTING_VPS = 'EXISTING_VPS';
    public const TARGET_TYPE_NEW_VPS = 'NEW_VPS';
    public const STATUS_PROCESSING = 'PROCESSING';
    public const STATUS_COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_EXISTING_VPS,
            self::TARGET_TYPE_NEW_VPS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_COMPLETED,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('snapshot', $data ?? [], null);
        $this->setIfExists('vps_id', $data ?? [], null);
        $this->setIfExists('vps_name', $data ?? [], null);
        $this->setIfExists('target_type', $data ?? [], null);
        $this->setIfExists('date_create', $data ?? [], null);
        $this->setIfExists('date_complete', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($this->container['target_type']) && !in_array($this->container['target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'target_type', must be one of '%s'",
                $this->container['target_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets snapshot
     *
     * @return \OpenAPI\Client\Model\SnapshotSnapshot|null
     */
    public function getSnapshot()
    {
        return $this->container['snapshot'];
    }

    /**
     * Sets snapshot
     *
     * @param \OpenAPI\Client\Model\SnapshotSnapshot|null $snapshot snapshot
     *
     * @return self
     */
    public function setSnapshot($snapshot)
    {

        if (is_null($snapshot)) {
            throw new \InvalidArgumentException('non-nullable snapshot cannot be null');
        }

        $this->container['snapshot'] = $snapshot;

        return $this;
    }

    /**
     * Gets vps_id
     *
     * @return string|null
     */
    public function getVpsId()
    {
        return $this->container['vps_id'];
    }

    /**
     * Sets vps_id
     *
     * @param string|null $vps_id vps_id
     *
     * @return self
     */
    public function setVpsId($vps_id)
    {

        if (is_null($vps_id)) {
            throw new \InvalidArgumentException('non-nullable vps_id cannot be null');
        }

        $this->container['vps_id'] = $vps_id;

        return $this;
    }

    /**
     * Gets vps_name
     *
     * @return string|null
     */
    public function getVpsName()
    {
        return $this->container['vps_name'];
    }

    /**
     * Sets vps_name
     *
     * @param string|null $vps_name vps_name
     *
     * @return self
     */
    public function setVpsName($vps_name)
    {

        if (is_null($vps_name)) {
            throw new \InvalidArgumentException('non-nullable vps_name cannot be null');
        }

        $this->container['vps_name'] = $vps_name;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param string|null $target_type target_type
     *
     * @return self
     */
    public function setTargetType($target_type)
    {
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($target_type) && !in_array($target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'target_type', must be one of '%s'",
                    $target_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($target_type)) {
            throw new \InvalidArgumentException('non-nullable target_type cannot be null');
        }

        $this->container['target_type'] = $target_type;

        return $this;
    }

    /**
     * Gets date_create
     *
     * @return string|null
     */
    public function getDateCreate()
    {
        return $this->container['date_create'];
    }

    /**
     * Sets date_create
     *
     * @param string|null $date_create date_create
     *
     * @return self
     */
    public function setDateCreate($date_create)
    {

        if (is_null($date_create)) {
            throw new \InvalidArgumentException('non-nullable date_create cannot be null');
        }

        $this->container['date_create'] = $date_create;

        return $this;
    }

    /**
     * Gets date_complete
     *
     * @return string|null
     */
    public function getDateComplete()
    {
        return $this->container['date_complete'];
    }

    /**
     * Sets date_complete
     *
     * @param string|null $date_complete date_complete
     *
     * @return self
     */
    public function setDateComplete($date_complete)
    {

        if (is_null($date_complete)) {
            throw new \InvalidArgumentException('non-nullable date_complete cannot be null');
        }

        $this->container['date_complete'] = $date_complete;

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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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


