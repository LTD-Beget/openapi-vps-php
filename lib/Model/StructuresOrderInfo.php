<?php
/**
 * StructuresOrderInfo
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
 * The version of the OpenAPI document: v1.2.0
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
 * StructuresOrderInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StructuresOrderInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Structures_OrderInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'vps_id' => 'string',
        'vps_name' => 'string',
        'type' => 'string',
        'date_create' => 'string',
        'date_complete' => 'string',
        'path' => 'string[]',
        'status' => 'string',
        'copy_info' => '\OpenAPI\Client\Model\StructuresCopyInfo',
        'affect_live' => 'bool',
        'target' => 'string',
        'error_details' => '\OpenAPI\Client\Model\StructuresOrderInfoErrorDetails'
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
        'vps_id' => null,
        'vps_name' => null,
        'type' => 'enum',
        'date_create' => null,
        'date_complete' => null,
        'path' => null,
        'status' => 'enum',
        'copy_info' => null,
        'affect_live' => null,
        'target' => null,
        'error_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'vps_id' => false,
		'vps_name' => false,
		'type' => false,
		'date_create' => false,
		'date_complete' => false,
		'path' => false,
		'status' => false,
		'copy_info' => false,
		'affect_live' => false,
		'target' => false,
		'error_details' => false
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
        'vps_id' => 'vps_id',
        'vps_name' => 'vps_name',
        'type' => 'type',
        'date_create' => 'date_create',
        'date_complete' => 'date_complete',
        'path' => 'path',
        'status' => 'status',
        'copy_info' => 'copy_info',
        'affect_live' => 'affect_live',
        'target' => 'target',
        'error_details' => 'error_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vps_id' => 'setVpsId',
        'vps_name' => 'setVpsName',
        'type' => 'setType',
        'date_create' => 'setDateCreate',
        'date_complete' => 'setDateComplete',
        'path' => 'setPath',
        'status' => 'setStatus',
        'copy_info' => 'setCopyInfo',
        'affect_live' => 'setAffectLive',
        'target' => 'setTarget',
        'error_details' => 'setErrorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vps_id' => 'getVpsId',
        'vps_name' => 'getVpsName',
        'type' => 'getType',
        'date_create' => 'getDateCreate',
        'date_complete' => 'getDateComplete',
        'path' => 'getPath',
        'status' => 'getStatus',
        'copy_info' => 'getCopyInfo',
        'affect_live' => 'getAffectLive',
        'target' => 'getTarget',
        'error_details' => 'getErrorDetails'
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

    public const TYPE_DOWNLOAD = 'DOWNLOAD';
    public const TYPE_RESTORE = 'RESTORE';
    public const STATUS_PROCESSING = 'PROCESSING';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_ERROR = 'ERROR';
    public const STATUS_COMPLETED_PARTIALLY = 'COMPLETED_PARTIALLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DOWNLOAD,
            self::TYPE_RESTORE,
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
            self::STATUS_ERROR,
            self::STATUS_COMPLETED_PARTIALLY,
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
        $this->setIfExists('vps_id', $data ?? [], null);
        $this->setIfExists('vps_name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('date_create', $data ?? [], null);
        $this->setIfExists('date_complete', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('copy_info', $data ?? [], null);
        $this->setIfExists('affect_live', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('error_details', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

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
     * Gets path
     *
     * @return string[]|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string[]|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {

        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }

        $this->container['path'] = $path;

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
     * Gets copy_info
     *
     * @return \OpenAPI\Client\Model\StructuresCopyInfo|null
     */
    public function getCopyInfo()
    {
        return $this->container['copy_info'];
    }

    /**
     * Sets copy_info
     *
     * @param \OpenAPI\Client\Model\StructuresCopyInfo|null $copy_info copy_info
     *
     * @return self
     */
    public function setCopyInfo($copy_info)
    {

        if (is_null($copy_info)) {
            throw new \InvalidArgumentException('non-nullable copy_info cannot be null');
        }

        $this->container['copy_info'] = $copy_info;

        return $this;
    }

    /**
     * Gets affect_live
     *
     * @return bool|null
     */
    public function getAffectLive()
    {
        return $this->container['affect_live'];
    }

    /**
     * Sets affect_live
     *
     * @param bool|null $affect_live affect_live
     *
     * @return self
     */
    public function setAffectLive($affect_live)
    {

        if (is_null($affect_live)) {
            throw new \InvalidArgumentException('non-nullable affect_live cannot be null');
        }

        $this->container['affect_live'] = $affect_live;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target target
     *
     * @return self
     */
    public function setTarget($target)
    {

        if (is_null($target)) {
            throw new \InvalidArgumentException('non-nullable target cannot be null');
        }

        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \OpenAPI\Client\Model\StructuresOrderInfoErrorDetails|null
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \OpenAPI\Client\Model\StructuresOrderInfoErrorDetails|null $error_details error_details
     *
     * @return self
     */
    public function setErrorDetails($error_details)
    {

        if (is_null($error_details)) {
            throw new \InvalidArgumentException('non-nullable error_details cannot be null');
        }

        $this->container['error_details'] = $error_details;

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

