<?php
/**
 * StructuresSoftwareMetadata
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
 * StructuresSoftwareMetadata Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StructuresSoftwareMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Structures_SoftwareMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_new' => 'bool',
        'is_pinned' => 'bool',
        'icon' => 'string',
        'icon2x' => 'string',
        'logo' => 'string',
        'logo2x' => 'string',
        'primary_color' => 'string',
        'secondary_color' => 'string',
        'weight' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_new' => null,
        'is_pinned' => null,
        'icon' => null,
        'icon2x' => null,
        'logo' => null,
        'logo2x' => null,
        'primary_color' => null,
        'secondary_color' => null,
        'weight' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_new' => false,
		'is_pinned' => false,
		'icon' => false,
		'icon2x' => false,
		'logo' => false,
		'logo2x' => false,
		'primary_color' => false,
		'secondary_color' => false,
		'weight' => false
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
        'is_new' => 'is_new',
        'is_pinned' => 'is_pinned',
        'icon' => 'icon',
        'icon2x' => 'icon2x',
        'logo' => 'logo',
        'logo2x' => 'logo2x',
        'primary_color' => 'primary_color',
        'secondary_color' => 'secondary_color',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_new' => 'setIsNew',
        'is_pinned' => 'setIsPinned',
        'icon' => 'setIcon',
        'icon2x' => 'setIcon2x',
        'logo' => 'setLogo',
        'logo2x' => 'setLogo2x',
        'primary_color' => 'setPrimaryColor',
        'secondary_color' => 'setSecondaryColor',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_new' => 'getIsNew',
        'is_pinned' => 'getIsPinned',
        'icon' => 'getIcon',
        'icon2x' => 'getIcon2x',
        'logo' => 'getLogo',
        'logo2x' => 'getLogo2x',
        'primary_color' => 'getPrimaryColor',
        'secondary_color' => 'getSecondaryColor',
        'weight' => 'getWeight'
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
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('is_pinned', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('icon2x', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('logo2x', $data ?? [], null);
        $this->setIfExists('primary_color', $data ?? [], null);
        $this->setIfExists('secondary_color', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
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
     * Gets is_new
     *
     * @return bool|null
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool|null $is_new is_new
     *
     * @return self
     */
    public function setIsNew($is_new)
    {

        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }

        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets is_pinned
     *
     * @return bool|null
     */
    public function getIsPinned()
    {
        return $this->container['is_pinned'];
    }

    /**
     * Sets is_pinned
     *
     * @param bool|null $is_pinned is_pinned
     *
     * @return self
     */
    public function setIsPinned($is_pinned)
    {

        if (is_null($is_pinned)) {
            throw new \InvalidArgumentException('non-nullable is_pinned cannot be null');
        }

        $this->container['is_pinned'] = $is_pinned;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {

        if (is_null($icon)) {
            throw new \InvalidArgumentException('non-nullable icon cannot be null');
        }

        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets icon2x
     *
     * @return string|null
     */
    public function getIcon2x()
    {
        return $this->container['icon2x'];
    }

    /**
     * Sets icon2x
     *
     * @param string|null $icon2x icon2x
     *
     * @return self
     */
    public function setIcon2x($icon2x)
    {

        if (is_null($icon2x)) {
            throw new \InvalidArgumentException('non-nullable icon2x cannot be null');
        }

        $this->container['icon2x'] = $icon2x;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {

        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }

        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets logo2x
     *
     * @return string|null
     */
    public function getLogo2x()
    {
        return $this->container['logo2x'];
    }

    /**
     * Sets logo2x
     *
     * @param string|null $logo2x logo2x
     *
     * @return self
     */
    public function setLogo2x($logo2x)
    {

        if (is_null($logo2x)) {
            throw new \InvalidArgumentException('non-nullable logo2x cannot be null');
        }

        $this->container['logo2x'] = $logo2x;

        return $this;
    }

    /**
     * Gets primary_color
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primary_color'];
    }

    /**
     * Sets primary_color
     *
     * @param string|null $primary_color primary_color
     *
     * @return self
     */
    public function setPrimaryColor($primary_color)
    {

        if (is_null($primary_color)) {
            throw new \InvalidArgumentException('non-nullable primary_color cannot be null');
        }

        $this->container['primary_color'] = $primary_color;

        return $this;
    }

    /**
     * Gets secondary_color
     *
     * @return string|null
     */
    public function getSecondaryColor()
    {
        return $this->container['secondary_color'];
    }

    /**
     * Sets secondary_color
     *
     * @param string|null $secondary_color secondary_color
     *
     * @return self
     */
    public function setSecondaryColor($secondary_color)
    {

        if (is_null($secondary_color)) {
            throw new \InvalidArgumentException('non-nullable secondary_color cannot be null');
        }

        $this->container['secondary_color'] = $secondary_color;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {

        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }

        $this->container['weight'] = $weight;

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


