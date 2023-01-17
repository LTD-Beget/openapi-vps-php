<?php
/**
 * MarketplaceFieldCommon
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
 * The version of the OpenAPI document: v1.3.0
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
 * MarketplaceFieldCommon Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketplaceFieldCommon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketplace_FieldCommon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variable' => 'string',
        'label' => 'string',
        'label_en' => 'string',
        'description' => 'string',
        'description_en' => 'string',
        'default_value' => 'string',
        'is_additional' => 'bool',
        'is_required' => 'bool',
        'is_custom' => 'bool',
        'validation_regex' => 'string',
        'validation_error_text' => 'string',
        'validation_error_text_en' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'variable' => null,
        'label' => null,
        'label_en' => null,
        'description' => null,
        'description_en' => null,
        'default_value' => null,
        'is_additional' => null,
        'is_required' => null,
        'is_custom' => null,
        'validation_regex' => null,
        'validation_error_text' => null,
        'validation_error_text_en' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'variable' => false,
		'label' => false,
		'label_en' => false,
		'description' => false,
		'description_en' => false,
		'default_value' => false,
		'is_additional' => false,
		'is_required' => false,
		'is_custom' => false,
		'validation_regex' => false,
		'validation_error_text' => false,
		'validation_error_text_en' => false
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
        'variable' => 'variable',
        'label' => 'label',
        'label_en' => 'label_en',
        'description' => 'description',
        'description_en' => 'description_en',
        'default_value' => 'default_value',
        'is_additional' => 'is_additional',
        'is_required' => 'is_required',
        'is_custom' => 'is_custom',
        'validation_regex' => 'validation_regex',
        'validation_error_text' => 'validation_error_text',
        'validation_error_text_en' => 'validation_error_text_en'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variable' => 'setVariable',
        'label' => 'setLabel',
        'label_en' => 'setLabelEn',
        'description' => 'setDescription',
        'description_en' => 'setDescriptionEn',
        'default_value' => 'setDefaultValue',
        'is_additional' => 'setIsAdditional',
        'is_required' => 'setIsRequired',
        'is_custom' => 'setIsCustom',
        'validation_regex' => 'setValidationRegex',
        'validation_error_text' => 'setValidationErrorText',
        'validation_error_text_en' => 'setValidationErrorTextEn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variable' => 'getVariable',
        'label' => 'getLabel',
        'label_en' => 'getLabelEn',
        'description' => 'getDescription',
        'description_en' => 'getDescriptionEn',
        'default_value' => 'getDefaultValue',
        'is_additional' => 'getIsAdditional',
        'is_required' => 'getIsRequired',
        'is_custom' => 'getIsCustom',
        'validation_regex' => 'getValidationRegex',
        'validation_error_text' => 'getValidationErrorText',
        'validation_error_text_en' => 'getValidationErrorTextEn'
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
        $this->setIfExists('variable', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('label_en', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_en', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('is_additional', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('is_custom', $data ?? [], null);
        $this->setIfExists('validation_regex', $data ?? [], null);
        $this->setIfExists('validation_error_text', $data ?? [], null);
        $this->setIfExists('validation_error_text_en', $data ?? [], null);
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
     * Gets variable
     *
     * @return string|null
     */
    public function getVariable()
    {
        return $this->container['variable'];
    }

    /**
     * Sets variable
     *
     * @param string|null $variable variable
     *
     * @return self
     */
    public function setVariable($variable)
    {

        if (is_null($variable)) {
            throw new \InvalidArgumentException('non-nullable variable cannot be null');
        }

        $this->container['variable'] = $variable;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {

        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_en
     *
     * @return string|null
     */
    public function getLabelEn()
    {
        return $this->container['label_en'];
    }

    /**
     * Sets label_en
     *
     * @param string|null $label_en label_en
     *
     * @return self
     */
    public function setLabelEn($label_en)
    {

        if (is_null($label_en)) {
            throw new \InvalidArgumentException('non-nullable label_en cannot be null');
        }

        $this->container['label_en'] = $label_en;

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
     * Gets default_value
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value default_value
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {

        if (is_null($default_value)) {
            throw new \InvalidArgumentException('non-nullable default_value cannot be null');
        }

        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets is_additional
     *
     * @return bool|null
     */
    public function getIsAdditional()
    {
        return $this->container['is_additional'];
    }

    /**
     * Sets is_additional
     *
     * @param bool|null $is_additional is_additional
     *
     * @return self
     */
    public function setIsAdditional($is_additional)
    {

        if (is_null($is_additional)) {
            throw new \InvalidArgumentException('non-nullable is_additional cannot be null');
        }

        $this->container['is_additional'] = $is_additional;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required is_required
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {

        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }

        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_custom
     *
     * @return bool|null
     */
    public function getIsCustom()
    {
        return $this->container['is_custom'];
    }

    /**
     * Sets is_custom
     *
     * @param bool|null $is_custom is_custom
     *
     * @return self
     */
    public function setIsCustom($is_custom)
    {

        if (is_null($is_custom)) {
            throw new \InvalidArgumentException('non-nullable is_custom cannot be null');
        }

        $this->container['is_custom'] = $is_custom;

        return $this;
    }

    /**
     * Gets validation_regex
     *
     * @return string|null
     */
    public function getValidationRegex()
    {
        return $this->container['validation_regex'];
    }

    /**
     * Sets validation_regex
     *
     * @param string|null $validation_regex validation_regex
     *
     * @return self
     */
    public function setValidationRegex($validation_regex)
    {

        if (is_null($validation_regex)) {
            throw new \InvalidArgumentException('non-nullable validation_regex cannot be null');
        }

        $this->container['validation_regex'] = $validation_regex;

        return $this;
    }

    /**
     * Gets validation_error_text
     *
     * @return string|null
     */
    public function getValidationErrorText()
    {
        return $this->container['validation_error_text'];
    }

    /**
     * Sets validation_error_text
     *
     * @param string|null $validation_error_text validation_error_text
     *
     * @return self
     */
    public function setValidationErrorText($validation_error_text)
    {

        if (is_null($validation_error_text)) {
            throw new \InvalidArgumentException('non-nullable validation_error_text cannot be null');
        }

        $this->container['validation_error_text'] = $validation_error_text;

        return $this;
    }

    /**
     * Gets validation_error_text_en
     *
     * @return string|null
     */
    public function getValidationErrorTextEn()
    {
        return $this->container['validation_error_text_en'];
    }

    /**
     * Sets validation_error_text_en
     *
     * @param string|null $validation_error_text_en validation_error_text_en
     *
     * @return self
     */
    public function setValidationErrorTextEn($validation_error_text_en)
    {

        if (is_null($validation_error_text_en)) {
            throw new \InvalidArgumentException('non-nullable validation_error_text_en cannot be null');
        }

        $this->container['validation_error_text_en'] = $validation_error_text_en;

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


