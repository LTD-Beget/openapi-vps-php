<?php
/**
 * ManageGetStatusesResponseStatusInfo
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
 * The version of the OpenAPI document: v1.4.1
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
 * ManageGetStatusesResponseStatusInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManageGetStatusesResponseStatusInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Manage_GetStatusesResponse_StatusInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'rescue_mode' => 'bool',
        'migrating' => 'bool',
        'manage_enabled' => 'bool',
        'restoring' => 'bool',
        'archived' => 'bool',
        'unblocking' => 'bool',
        'unarchiving' => 'bool'
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
        'status' => 'enum',
        'rescue_mode' => null,
        'migrating' => null,
        'manage_enabled' => null,
        'restoring' => null,
        'archived' => null,
        'unblocking' => null,
        'unarchiving' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'status' => false,
		'rescue_mode' => false,
		'migrating' => false,
		'manage_enabled' => false,
		'restoring' => false,
		'archived' => false,
		'unblocking' => false,
		'unarchiving' => false
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
        'status' => 'status',
        'rescue_mode' => 'rescue_mode',
        'migrating' => 'migrating',
        'manage_enabled' => 'manage_enabled',
        'restoring' => 'restoring',
        'archived' => 'archived',
        'unblocking' => 'unblocking',
        'unarchiving' => 'unarchiving'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'rescue_mode' => 'setRescueMode',
        'migrating' => 'setMigrating',
        'manage_enabled' => 'setManageEnabled',
        'restoring' => 'setRestoring',
        'archived' => 'setArchived',
        'unblocking' => 'setUnblocking',
        'unarchiving' => 'setUnarchiving'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'rescue_mode' => 'getRescueMode',
        'migrating' => 'getMigrating',
        'manage_enabled' => 'getManageEnabled',
        'restoring' => 'getRestoring',
        'archived' => 'getArchived',
        'unblocking' => 'getUnblocking',
        'unarchiving' => 'getUnarchiving'
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

    public const STATUS_UNKNOWN = 'UNKNOWN';
    public const STATUS_CREATING = 'CREATING';
    public const STATUS_RUNNING = 'RUNNING';
    public const STATUS_STOPPING = 'STOPPING';
    public const STATUS_RESTARTING = 'RESTARTING';
    public const STATUS_REMOVING = 'REMOVING';
    public const STATUS_REMOVED = 'REMOVED';
    public const STATUS_STOPPED = 'STOPPED';
    public const STATUS_STARTING = 'STARTING';
    public const STATUS_RECONFIGURING = 'RECONFIGURING';
    public const STATUS_REINSTALLING = 'REINSTALLING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_STOPPING,
            self::STATUS_RESTARTING,
            self::STATUS_REMOVING,
            self::STATUS_REMOVED,
            self::STATUS_STOPPED,
            self::STATUS_STARTING,
            self::STATUS_RECONFIGURING,
            self::STATUS_REINSTALLING,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('rescue_mode', $data ?? [], null);
        $this->setIfExists('migrating', $data ?? [], null);
        $this->setIfExists('manage_enabled', $data ?? [], null);
        $this->setIfExists('restoring', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('unblocking', $data ?? [], null);
        $this->setIfExists('unarchiving', $data ?? [], null);
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
     * Gets rescue_mode
     *
     * @return bool|null
     */
    public function getRescueMode()
    {
        return $this->container['rescue_mode'];
    }

    /**
     * Sets rescue_mode
     *
     * @param bool|null $rescue_mode rescue_mode
     *
     * @return self
     */
    public function setRescueMode($rescue_mode)
    {

        if (is_null($rescue_mode)) {
            throw new \InvalidArgumentException('non-nullable rescue_mode cannot be null');
        }

        $this->container['rescue_mode'] = $rescue_mode;

        return $this;
    }

    /**
     * Gets migrating
     *
     * @return bool|null
     */
    public function getMigrating()
    {
        return $this->container['migrating'];
    }

    /**
     * Sets migrating
     *
     * @param bool|null $migrating migrating
     *
     * @return self
     */
    public function setMigrating($migrating)
    {

        if (is_null($migrating)) {
            throw new \InvalidArgumentException('non-nullable migrating cannot be null');
        }

        $this->container['migrating'] = $migrating;

        return $this;
    }

    /**
     * Gets manage_enabled
     *
     * @return bool|null
     */
    public function getManageEnabled()
    {
        return $this->container['manage_enabled'];
    }

    /**
     * Sets manage_enabled
     *
     * @param bool|null $manage_enabled manage_enabled
     *
     * @return self
     */
    public function setManageEnabled($manage_enabled)
    {

        if (is_null($manage_enabled)) {
            throw new \InvalidArgumentException('non-nullable manage_enabled cannot be null');
        }

        $this->container['manage_enabled'] = $manage_enabled;

        return $this;
    }

    /**
     * Gets restoring
     *
     * @return bool|null
     */
    public function getRestoring()
    {
        return $this->container['restoring'];
    }

    /**
     * Sets restoring
     *
     * @param bool|null $restoring restoring
     *
     * @return self
     */
    public function setRestoring($restoring)
    {

        if (is_null($restoring)) {
            throw new \InvalidArgumentException('non-nullable restoring cannot be null');
        }

        $this->container['restoring'] = $restoring;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {

        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }

        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets unblocking
     *
     * @return bool|null
     */
    public function getUnblocking()
    {
        return $this->container['unblocking'];
    }

    /**
     * Sets unblocking
     *
     * @param bool|null $unblocking unblocking
     *
     * @return self
     */
    public function setUnblocking($unblocking)
    {

        if (is_null($unblocking)) {
            throw new \InvalidArgumentException('non-nullable unblocking cannot be null');
        }

        $this->container['unblocking'] = $unblocking;

        return $this;
    }

    /**
     * Gets unarchiving
     *
     * @return bool|null
     */
    public function getUnarchiving()
    {
        return $this->container['unarchiving'];
    }

    /**
     * Sets unarchiving
     *
     * @param bool|null $unarchiving unarchiving
     *
     * @return self
     */
    public function setUnarchiving($unarchiving)
    {

        if (is_null($unarchiving)) {
            throw new \InvalidArgumentException('non-nullable unarchiving cannot be null');
        }

        $this->container['unarchiving'] = $unarchiving;

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


