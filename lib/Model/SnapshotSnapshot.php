<?php
/**
 * SnapshotSnapshot
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
 * SnapshotSnapshot Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SnapshotSnapshot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Snapshot_Snapshot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'vps_id' => 'string',
        'vps_name' => 'string',
        'date_create' => 'string',
        'size' => 'string',
        'status' => 'string',
        'description' => 'string',
        'configuration' => '\OpenAPI\Client\Model\SnapshotRequiredConfiguration',
        'price_day' => 'float',
        'installed_software' => '\OpenAPI\Client\Model\StructuresInstalledSoftwareInfo'
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
        'date_create' => null,
        'size' => null,
        'status' => 'enum',
        'description' => null,
        'configuration' => null,
        'price_day' => 'double',
        'installed_software' => null
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
		'date_create' => false,
		'size' => false,
		'status' => false,
		'description' => false,
		'configuration' => false,
		'price_day' => false,
		'installed_software' => false
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
        'date_create' => 'date_create',
        'size' => 'size',
        'status' => 'status',
        'description' => 'description',
        'configuration' => 'configuration',
        'price_day' => 'price_day',
        'installed_software' => 'installed_software'
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
        'date_create' => 'setDateCreate',
        'size' => 'setSize',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'configuration' => 'setConfiguration',
        'price_day' => 'setPriceDay',
        'installed_software' => 'setInstalledSoftware'
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
        'date_create' => 'getDateCreate',
        'size' => 'getSize',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'configuration' => 'getConfiguration',
        'price_day' => 'getPriceDay',
        'installed_software' => 'getInstalledSoftware'
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

    public const STATUS_CREATING = 'CREATING';
    public const STATUS_DONE = 'DONE';
    public const STATUS_RESTORING = 'RESTORING';
    public const STATUS_DELETED = 'DELETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_DONE,
            self::STATUS_RESTORING,
            self::STATUS_DELETED,
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
        $this->setIfExists('date_create', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('price_day', $data ?? [], null);
        $this->setIfExists('installed_software', $data ?? [], null);
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
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {

        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        $this->container['size'] = $size;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \OpenAPI\Client\Model\SnapshotRequiredConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \OpenAPI\Client\Model\SnapshotRequiredConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {

        if (is_null($configuration)) {
            throw new \InvalidArgumentException('non-nullable configuration cannot be null');
        }

        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets price_day
     *
     * @return float|null
     */
    public function getPriceDay()
    {
        return $this->container['price_day'];
    }

    /**
     * Sets price_day
     *
     * @param float|null $price_day price_day
     *
     * @return self
     */
    public function setPriceDay($price_day)
    {

        if (is_null($price_day)) {
            throw new \InvalidArgumentException('non-nullable price_day cannot be null');
        }

        $this->container['price_day'] = $price_day;

        return $this;
    }

    /**
     * Gets installed_software
     *
     * @return \OpenAPI\Client\Model\StructuresInstalledSoftwareInfo|null
     */
    public function getInstalledSoftware()
    {
        return $this->container['installed_software'];
    }

    /**
     * Sets installed_software
     *
     * @param \OpenAPI\Client\Model\StructuresInstalledSoftwareInfo|null $installed_software installed_software
     *
     * @return self
     */
    public function setInstalledSoftware($installed_software)
    {

        if (is_null($installed_software)) {
            throw new \InvalidArgumentException('non-nullable installed_software cannot be null');
        }

        $this->container['installed_software'] = $installed_software;

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

