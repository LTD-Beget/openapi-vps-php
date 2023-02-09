<?php
/**
 * StructuresFileInfo
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
 * The version of the OpenAPI document: v1.4.0
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
 * StructuresFileInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StructuresFileInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Structures_FileInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_link' => 'bool',
        'is_dir' => 'bool',
        'name' => 'string',
        'ext' => 'string',
        'path' => 'string',
        'owner' => 'string',
        'group' => 'string',
        'size' => 'string',
        'mtime' => 'float',
        'mtime_str' => 'string',
        'mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_link' => null,
        'is_dir' => null,
        'name' => 'bytes',
        'ext' => 'bytes',
        'path' => 'bytes',
        'owner' => null,
        'group' => null,
        'size' => null,
        'mtime' => 'double',
        'mtime_str' => null,
        'mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_link' => false,
		'is_dir' => false,
		'name' => false,
		'ext' => false,
		'path' => false,
		'owner' => false,
		'group' => false,
		'size' => false,
		'mtime' => false,
		'mtime_str' => false,
		'mode' => false
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
        'is_link' => 'is_link',
        'is_dir' => 'is_dir',
        'name' => 'name',
        'ext' => 'ext',
        'path' => 'path',
        'owner' => 'owner',
        'group' => 'group',
        'size' => 'size',
        'mtime' => 'mtime',
        'mtime_str' => 'mtime_str',
        'mode' => 'mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_link' => 'setIsLink',
        'is_dir' => 'setIsDir',
        'name' => 'setName',
        'ext' => 'setExt',
        'path' => 'setPath',
        'owner' => 'setOwner',
        'group' => 'setGroup',
        'size' => 'setSize',
        'mtime' => 'setMtime',
        'mtime_str' => 'setMtimeStr',
        'mode' => 'setMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_link' => 'getIsLink',
        'is_dir' => 'getIsDir',
        'name' => 'getName',
        'ext' => 'getExt',
        'path' => 'getPath',
        'owner' => 'getOwner',
        'group' => 'getGroup',
        'size' => 'getSize',
        'mtime' => 'getMtime',
        'mtime_str' => 'getMtimeStr',
        'mode' => 'getMode'
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
        $this->setIfExists('is_link', $data ?? [], null);
        $this->setIfExists('is_dir', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('ext', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('mtime', $data ?? [], null);
        $this->setIfExists('mtime_str', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
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
     * Gets is_link
     *
     * @return bool|null
     */
    public function getIsLink()
    {
        return $this->container['is_link'];
    }

    /**
     * Sets is_link
     *
     * @param bool|null $is_link is_link
     *
     * @return self
     */
    public function setIsLink($is_link)
    {

        if (is_null($is_link)) {
            throw new \InvalidArgumentException('non-nullable is_link cannot be null');
        }

        $this->container['is_link'] = $is_link;

        return $this;
    }

    /**
     * Gets is_dir
     *
     * @return bool|null
     */
    public function getIsDir()
    {
        return $this->container['is_dir'];
    }

    /**
     * Sets is_dir
     *
     * @param bool|null $is_dir is_dir
     *
     * @return self
     */
    public function setIsDir($is_dir)
    {

        if (is_null($is_dir)) {
            throw new \InvalidArgumentException('non-nullable is_dir cannot be null');
        }

        $this->container['is_dir'] = $is_dir;

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
     * Gets ext
     *
     * @return string|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string|null $ext ext
     *
     * @return self
     */
    public function setExt($ext)
    {

        if (is_null($ext)) {
            throw new \InvalidArgumentException('non-nullable ext cannot be null');
        }

        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
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
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {

        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }

        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {

        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }

        $this->container['group'] = $group;

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
     * Gets mtime
     *
     * @return float|null
     */
    public function getMtime()
    {
        return $this->container['mtime'];
    }

    /**
     * Sets mtime
     *
     * @param float|null $mtime mtime
     *
     * @return self
     */
    public function setMtime($mtime)
    {

        if (is_null($mtime)) {
            throw new \InvalidArgumentException('non-nullable mtime cannot be null');
        }

        $this->container['mtime'] = $mtime;

        return $this;
    }

    /**
     * Gets mtime_str
     *
     * @return string|null
     */
    public function getMtimeStr()
    {
        return $this->container['mtime_str'];
    }

    /**
     * Sets mtime_str
     *
     * @param string|null $mtime_str mtime_str
     *
     * @return self
     */
    public function setMtimeStr($mtime_str)
    {

        if (is_null($mtime_str)) {
            throw new \InvalidArgumentException('non-nullable mtime_str cannot be null');
        }

        $this->container['mtime_str'] = $mtime_str;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {

        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }

        $this->container['mode'] = $mode;

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


