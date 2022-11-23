<?php
/**
 * StatisticGetCpuDetailsResponse
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
 * StatisticGetCpuDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticGetCpuDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic_GetCpuDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string[]',
        'user' => 'float[]',
        'nice' => 'float[]',
        'system' => 'float[]',
        'idle' => 'float[]',
        'iowait' => 'float[]',
        'irq' => 'float[]',
        'softirq' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'user' => 'double',
        'nice' => 'double',
        'system' => 'double',
        'idle' => 'double',
        'iowait' => 'double',
        'irq' => 'double',
        'softirq' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
		'user' => false,
		'nice' => false,
		'system' => false,
		'idle' => false,
		'iowait' => false,
		'irq' => false,
		'softirq' => false
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
        'date' => 'date',
        'user' => 'user',
        'nice' => 'nice',
        'system' => 'system',
        'idle' => 'idle',
        'iowait' => 'iowait',
        'irq' => 'irq',
        'softirq' => 'softirq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'user' => 'setUser',
        'nice' => 'setNice',
        'system' => 'setSystem',
        'idle' => 'setIdle',
        'iowait' => 'setIowait',
        'irq' => 'setIrq',
        'softirq' => 'setSoftirq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'user' => 'getUser',
        'nice' => 'getNice',
        'system' => 'getSystem',
        'idle' => 'getIdle',
        'iowait' => 'getIowait',
        'irq' => 'getIrq',
        'softirq' => 'getSoftirq'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('nice', $data ?? [], null);
        $this->setIfExists('system', $data ?? [], null);
        $this->setIfExists('idle', $data ?? [], null);
        $this->setIfExists('iowait', $data ?? [], null);
        $this->setIfExists('irq', $data ?? [], null);
        $this->setIfExists('softirq', $data ?? [], null);
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
     * Gets date
     *
     * @return string[]|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string[]|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {

        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets user
     *
     * @return float[]|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param float[]|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {

        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }

        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets nice
     *
     * @return float[]|null
     */
    public function getNice()
    {
        return $this->container['nice'];
    }

    /**
     * Sets nice
     *
     * @param float[]|null $nice nice
     *
     * @return self
     */
    public function setNice($nice)
    {

        if (is_null($nice)) {
            throw new \InvalidArgumentException('non-nullable nice cannot be null');
        }

        $this->container['nice'] = $nice;

        return $this;
    }

    /**
     * Gets system
     *
     * @return float[]|null
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param float[]|null $system system
     *
     * @return self
     */
    public function setSystem($system)
    {

        if (is_null($system)) {
            throw new \InvalidArgumentException('non-nullable system cannot be null');
        }

        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets idle
     *
     * @return float[]|null
     */
    public function getIdle()
    {
        return $this->container['idle'];
    }

    /**
     * Sets idle
     *
     * @param float[]|null $idle idle
     *
     * @return self
     */
    public function setIdle($idle)
    {

        if (is_null($idle)) {
            throw new \InvalidArgumentException('non-nullable idle cannot be null');
        }

        $this->container['idle'] = $idle;

        return $this;
    }

    /**
     * Gets iowait
     *
     * @return float[]|null
     */
    public function getIowait()
    {
        return $this->container['iowait'];
    }

    /**
     * Sets iowait
     *
     * @param float[]|null $iowait iowait
     *
     * @return self
     */
    public function setIowait($iowait)
    {

        if (is_null($iowait)) {
            throw new \InvalidArgumentException('non-nullable iowait cannot be null');
        }

        $this->container['iowait'] = $iowait;

        return $this;
    }

    /**
     * Gets irq
     *
     * @return float[]|null
     */
    public function getIrq()
    {
        return $this->container['irq'];
    }

    /**
     * Sets irq
     *
     * @param float[]|null $irq irq
     *
     * @return self
     */
    public function setIrq($irq)
    {

        if (is_null($irq)) {
            throw new \InvalidArgumentException('non-nullable irq cannot be null');
        }

        $this->container['irq'] = $irq;

        return $this;
    }

    /**
     * Gets softirq
     *
     * @return float[]|null
     */
    public function getSoftirq()
    {
        return $this->container['softirq'];
    }

    /**
     * Sets softirq
     *
     * @param float[]|null $softirq softirq
     *
     * @return self
     */
    public function setSoftirq($softirq)
    {

        if (is_null($softirq)) {
            throw new \InvalidArgumentException('non-nullable softirq cannot be null');
        }

        $this->container['softirq'] = $softirq;

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

