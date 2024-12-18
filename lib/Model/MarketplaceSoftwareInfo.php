<?php
/**
 * MarketplaceSoftwareInfo
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
 * The version of the OpenAPI document: v1.6.1
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
 * MarketplaceSoftwareInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketplaceSoftwareInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketplace_SoftwareInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'display_name' => 'string',
        'version' => 'string',
        'description' => 'string',
        'description_en' => 'string',
        'metadata' => '\OpenAPI\Client\Model\StructuresSoftwareMetadata',
        'field_data' => '\OpenAPI\Client\Model\MarketplaceFieldDesc[]',
        'requirements' => '\OpenAPI\Client\Model\MarketplaceSoftwareInfoRequirements',
        'category' => '\OpenAPI\Client\Model\StructuresSoftwareCategory[]',
        'slug' => 'string',
        'documentation_slug' => 'string',
        'unattended_install_available' => 'bool',
        'license' => '\OpenAPI\Client\Model\StructuresSoftwareLicense[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uint32',
        'name' => null,
        'display_name' => null,
        'version' => null,
        'description' => null,
        'description_en' => null,
        'metadata' => null,
        'field_data' => null,
        'requirements' => null,
        'category' => null,
        'slug' => null,
        'documentation_slug' => null,
        'unattended_install_available' => null,
        'license' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'display_name' => false,
		'version' => false,
		'description' => false,
		'description_en' => false,
		'metadata' => false,
		'field_data' => false,
		'requirements' => false,
		'category' => false,
		'slug' => false,
		'documentation_slug' => false,
		'unattended_install_available' => false,
		'license' => false
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
        'name' => 'name',
        'display_name' => 'display_name',
        'version' => 'version',
        'description' => 'description',
        'description_en' => 'description_en',
        'metadata' => 'metadata',
        'field_data' => 'field_data',
        'requirements' => 'requirements',
        'category' => 'category',
        'slug' => 'slug',
        'documentation_slug' => 'documentation_slug',
        'unattended_install_available' => 'unattended_install_available',
        'license' => 'license'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'version' => 'setVersion',
        'description' => 'setDescription',
        'description_en' => 'setDescriptionEn',
        'metadata' => 'setMetadata',
        'field_data' => 'setFieldData',
        'requirements' => 'setRequirements',
        'category' => 'setCategory',
        'slug' => 'setSlug',
        'documentation_slug' => 'setDocumentationSlug',
        'unattended_install_available' => 'setUnattendedInstallAvailable',
        'license' => 'setLicense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'version' => 'getVersion',
        'description' => 'getDescription',
        'description_en' => 'getDescriptionEn',
        'metadata' => 'getMetadata',
        'field_data' => 'getFieldData',
        'requirements' => 'getRequirements',
        'category' => 'getCategory',
        'slug' => 'getSlug',
        'documentation_slug' => 'getDocumentationSlug',
        'unattended_install_available' => 'getUnattendedInstallAvailable',
        'license' => 'getLicense'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_en', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('field_data', $data ?? [], null);
        $this->setIfExists('requirements', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('documentation_slug', $data ?? [], null);
        $this->setIfExists('unattended_install_available', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets field_data
     *
     * @return \OpenAPI\Client\Model\MarketplaceFieldDesc[]|null
     */
    public function getFieldData()
    {
        return $this->container['field_data'];
    }

    /**
     * Sets field_data
     *
     * @param \OpenAPI\Client\Model\MarketplaceFieldDesc[]|null $field_data field_data
     *
     * @return self
     */
    public function setFieldData($field_data)
    {

        if (is_null($field_data)) {
            throw new \InvalidArgumentException('non-nullable field_data cannot be null');
        }

        $this->container['field_data'] = $field_data;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \OpenAPI\Client\Model\MarketplaceSoftwareInfoRequirements|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \OpenAPI\Client\Model\MarketplaceSoftwareInfoRequirements|null $requirements requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {

        if (is_null($requirements)) {
            throw new \InvalidArgumentException('non-nullable requirements cannot be null');
        }

        $this->container['requirements'] = $requirements;

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
     * Gets documentation_slug
     *
     * @return string|null
     */
    public function getDocumentationSlug()
    {
        return $this->container['documentation_slug'];
    }

    /**
     * Sets documentation_slug
     *
     * @param string|null $documentation_slug documentation_slug
     *
     * @return self
     */
    public function setDocumentationSlug($documentation_slug)
    {

        if (is_null($documentation_slug)) {
            throw new \InvalidArgumentException('non-nullable documentation_slug cannot be null');
        }

        $this->container['documentation_slug'] = $documentation_slug;

        return $this;
    }

    /**
     * Gets unattended_install_available
     *
     * @return bool|null
     */
    public function getUnattendedInstallAvailable()
    {
        return $this->container['unattended_install_available'];
    }

    /**
     * Sets unattended_install_available
     *
     * @param bool|null $unattended_install_available unattended_install_available
     *
     * @return self
     */
    public function setUnattendedInstallAvailable($unattended_install_available)
    {

        if (is_null($unattended_install_available)) {
            throw new \InvalidArgumentException('non-nullable unattended_install_available cannot be null');
        }

        $this->container['unattended_install_available'] = $unattended_install_available;

        return $this;
    }

    /**
     * Gets license
     *
     * @return \OpenAPI\Client\Model\StructuresSoftwareLicense[]|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param \OpenAPI\Client\Model\StructuresSoftwareLicense[]|null $license license
     *
     * @return self
     */
    public function setLicense($license)
    {

        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }

        $this->container['license'] = $license;

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


