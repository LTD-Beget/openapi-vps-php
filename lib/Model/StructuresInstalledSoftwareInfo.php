<?php
/**
 * StructuresInstalledSoftwareInfo
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
 * StructuresInstalledSoftwareInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StructuresInstalledSoftwareInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Structures_InstalledSoftwareInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'display_name' => 'string',
        'version' => 'string',
        'address' => 'string',
        'status' => 'string',
        'field_value' => '\OpenAPI\Client\Model\StructuresInstalledSoftwareInfoFieldValue[]',
        'metadata' => '\OpenAPI\Client\Model\StructuresSoftwareMetadata',
        'description' => 'string',
        'description_en' => 'string',
        'category' => '\OpenAPI\Client\Model\StructuresSoftwareCategory[]',
        'slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'display_name' => null,
        'version' => null,
        'address' => null,
        'status' => 'enum',
        'field_value' => null,
        'metadata' => null,
        'description' => null,
        'description_en' => null,
        'category' => null,
        'slug' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'display_name' => false,
		'version' => false,
		'address' => false,
		'status' => false,
		'field_value' => false,
		'metadata' => false,
		'description' => false,
		'description_en' => false,
		'category' => false,
		'slug' => false
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
        'name' => 'name',
        'display_name' => 'display_name',
        'version' => 'version',
        'address' => 'address',
        'status' => 'status',
        'field_value' => 'field_value',
        'metadata' => 'metadata',
        'description' => 'description',
        'description_en' => 'description_en',
        'category' => 'category',
        'slug' => 'slug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'version' => 'setVersion',
        'address' => 'setAddress',
        'status' => 'setStatus',
        'field_value' => 'setFieldValue',
        'metadata' => 'setMetadata',
        'description' => 'setDescription',
        'description_en' => 'setDescriptionEn',
        'category' => 'setCategory',
        'slug' => 'setSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'version' => 'getVersion',
        'address' => 'getAddress',
        'status' => 'getStatus',
        'field_value' => 'getFieldValue',
        'metadata' => 'getMetadata',
        'description' => 'getDescription',
        'description_en' => 'getDescriptionEn',
        'category' => 'getCategory',
        'slug' => 'getSlug'
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

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_INSTALLING = 'INSTALLING';
    public const STATUS_INSTALLED = 'INSTALLED';
    public const STATUS_ERROR = 'ERROR';
    public const STATUS_CANCEL = 'CANCEL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_INSTALLING,
            self::STATUS_INSTALLED,
            self::STATUS_ERROR,
            self::STATUS_CANCEL,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('field_value', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_en', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {

        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {

        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

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
     * Gets field_value
     *
     * @return \OpenAPI\Client\Model\StructuresInstalledSoftwareInfoFieldValue[]|null
     */
    public function getFieldValue()
    {
        return $this->container['field_value'];
    }

    /**
     * Sets field_value
     *
     * @param \OpenAPI\Client\Model\StructuresInstalledSoftwareInfoFieldValue[]|null $field_value field_value
     *
     * @return self
     */
    public function setFieldValue($field_value)
    {

        if (is_null($field_value)) {
            throw new \InvalidArgumentException('non-nullable field_value cannot be null');
        }

        $this->container['field_value'] = $field_value;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \OpenAPI\Client\Model\StructuresSoftwareMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \OpenAPI\Client\Model\StructuresSoftwareMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }

        $this->container['metadata'] = $metadata;

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
     * Gets description_en
     *
     * @return string|null
     */
    public function getDescriptionEn()
    {
        return $this->container['description_en'];
    }

    /**
     * Sets description_en
     *
     * @param string|null $description_en description_en
     *
     * @return self
     */
    public function setDescriptionEn($description_en)
    {

        if (is_null($description_en)) {
            throw new \InvalidArgumentException('non-nullable description_en cannot be null');
        }

        $this->container['description_en'] = $description_en;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \OpenAPI\Client\Model\StructuresSoftwareCategory[]|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \OpenAPI\Client\Model\StructuresSoftwareCategory[]|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {

        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }

        $this->container['slug'] = $slug;

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

