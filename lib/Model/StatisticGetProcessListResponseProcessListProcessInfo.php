<?php
/**
 * StatisticGetProcessListResponseProcessListProcessInfo
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
 * StatisticGetProcessListResponseProcessListProcessInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticGetProcessListResponseProcessListProcessInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic_GetProcessListResponse_ProcessList_ProcessInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pid' => 'int',
        'nice' => 'int',
        'virt' => 'string',
        'rss' => 'string',
        'state' => 'string',
        'cpu_percent' => 'float',
        'mem_percent' => 'float',
        'time_running' => 'float',
        'name' => 'string',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pid' => 'uint32',
        'nice' => 'int32',
        'virt' => null,
        'rss' => null,
        'state' => null,
        'cpu_percent' => 'float',
        'mem_percent' => 'float',
        'time_running' => 'float',
        'name' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pid' => false,
		'nice' => false,
		'virt' => false,
		'rss' => false,
		'state' => false,
		'cpu_percent' => false,
		'mem_percent' => false,
		'time_running' => false,
		'name' => false,
		'user' => false
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
        'pid' => 'pid',
        'nice' => 'nice',
        'virt' => 'virt',
        'rss' => 'rss',
        'state' => 'state',
        'cpu_percent' => 'cpu_percent',
        'mem_percent' => 'mem_percent',
        'time_running' => 'time_running',
        'name' => 'name',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pid' => 'setPid',
        'nice' => 'setNice',
        'virt' => 'setVirt',
        'rss' => 'setRss',
        'state' => 'setState',
        'cpu_percent' => 'setCpuPercent',
        'mem_percent' => 'setMemPercent',
        'time_running' => 'setTimeRunning',
        'name' => 'setName',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pid' => 'getPid',
        'nice' => 'getNice',
        'virt' => 'getVirt',
        'rss' => 'getRss',
        'state' => 'getState',
        'cpu_percent' => 'getCpuPercent',
        'mem_percent' => 'getMemPercent',
        'time_running' => 'getTimeRunning',
        'name' => 'getName',
        'user' => 'getUser'
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
        $this->setIfExists('pid', $data ?? [], null);
        $this->setIfExists('nice', $data ?? [], null);
        $this->setIfExists('virt', $data ?? [], null);
        $this->setIfExists('rss', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('cpu_percent', $data ?? [], null);
        $this->setIfExists('mem_percent', $data ?? [], null);
        $this->setIfExists('time_running', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
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
     * Gets pid
     *
     * @return int|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int|null $pid pid
     *
     * @return self
     */
    public function setPid($pid)
    {

        if (is_null($pid)) {
            throw new \InvalidArgumentException('non-nullable pid cannot be null');
        }

        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets nice
     *
     * @return int|null
     */
    public function getNice()
    {
        return $this->container['nice'];
    }

    /**
     * Sets nice
     *
     * @param int|null $nice nice
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
     * Gets virt
     *
     * @return string|null
     */
    public function getVirt()
    {
        return $this->container['virt'];
    }

    /**
     * Sets virt
     *
     * @param string|null $virt virt
     *
     * @return self
     */
    public function setVirt($virt)
    {

        if (is_null($virt)) {
            throw new \InvalidArgumentException('non-nullable virt cannot be null');
        }

        $this->container['virt'] = $virt;

        return $this;
    }

    /**
     * Gets rss
     *
     * @return string|null
     */
    public function getRss()
    {
        return $this->container['rss'];
    }

    /**
     * Sets rss
     *
     * @param string|null $rss rss
     *
     * @return self
     */
    public function setRss($rss)
    {

        if (is_null($rss)) {
            throw new \InvalidArgumentException('non-nullable rss cannot be null');
        }

        $this->container['rss'] = $rss;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {

        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets cpu_percent
     *
     * @return float|null
     */
    public function getCpuPercent()
    {
        return $this->container['cpu_percent'];
    }

    /**
     * Sets cpu_percent
     *
     * @param float|null $cpu_percent cpu_percent
     *
     * @return self
     */
    public function setCpuPercent($cpu_percent)
    {

        if (is_null($cpu_percent)) {
            throw new \InvalidArgumentException('non-nullable cpu_percent cannot be null');
        }

        $this->container['cpu_percent'] = $cpu_percent;

        return $this;
    }

    /**
     * Gets mem_percent
     *
     * @return float|null
     */
    public function getMemPercent()
    {
        return $this->container['mem_percent'];
    }

    /**
     * Sets mem_percent
     *
     * @param float|null $mem_percent mem_percent
     *
     * @return self
     */
    public function setMemPercent($mem_percent)
    {

        if (is_null($mem_percent)) {
            throw new \InvalidArgumentException('non-nullable mem_percent cannot be null');
        }

        $this->container['mem_percent'] = $mem_percent;

        return $this;
    }

    /**
     * Gets time_running
     *
     * @return float|null
     */
    public function getTimeRunning()
    {
        return $this->container['time_running'];
    }

    /**
     * Sets time_running
     *
     * @param float|null $time_running time_running
     *
     * @return self
     */
    public function setTimeRunning($time_running)
    {

        if (is_null($time_running)) {
            throw new \InvalidArgumentException('non-nullable time_running cannot be null');
        }

        $this->container['time_running'] = $time_running;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user user
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

