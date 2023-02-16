<?php
/**
 * MarketplaceFieldDesc
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
 * MarketplaceFieldDesc Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketplaceFieldDesc implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketplace_FieldDesc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'password_field' => '\OpenAPI\Client\Model\MarketplacePasswordField',
        'domain_field' => '\OpenAPI\Client\Model\MarketplaceDomainField',
        'text_field' => '\OpenAPI\Client\Model\MarketplaceTextField',
        'email_field' => '\OpenAPI\Client\Model\MarketplaceEmailField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'password_field' => null,
        'domain_field' => null,
        'text_field' => null,
        'email_field' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'password_field' => false,
		'domain_field' => false,
		'text_field' => false,
		'email_field' => false
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
        'password_field' => 'password_field',
        'domain_field' => 'domain_field',
        'text_field' => 'text_field',
        'email_field' => 'email_field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password_field' => 'setPasswordField',
        'domain_field' => 'setDomainField',
        'text_field' => 'setTextField',
        'email_field' => 'setEmailField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password_field' => 'getPasswordField',
        'domain_field' => 'getDomainField',
        'text_field' => 'getTextField',
        'email_field' => 'getEmailField'
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
        $this->setIfExists('password_field', $data ?? [], null);
        $this->setIfExists('domain_field', $data ?? [], null);
        $this->setIfExists('text_field', $data ?? [], null);
        $this->setIfExists('email_field', $data ?? [], null);
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
     * Gets password_field
     *
     * @return \OpenAPI\Client\Model\MarketplacePasswordField|null
     */
    public function getPasswordField()
    {
        return $this->container['password_field'];
    }

    /**
     * Sets password_field
     *
     * @param \OpenAPI\Client\Model\MarketplacePasswordField|null $password_field password_field
     *
     * @return self
     */
    public function setPasswordField($password_field)
    {

        if (is_null($password_field)) {
            throw new \InvalidArgumentException('non-nullable password_field cannot be null');
        }

        $this->container['password_field'] = $password_field;

        return $this;
    }

    /**
     * Gets domain_field
     *
     * @return \OpenAPI\Client\Model\MarketplaceDomainField|null
     */
    public function getDomainField()
    {
        return $this->container['domain_field'];
    }

    /**
     * Sets domain_field
     *
     * @param \OpenAPI\Client\Model\MarketplaceDomainField|null $domain_field domain_field
     *
     * @return self
     */
    public function setDomainField($domain_field)
    {

        if (is_null($domain_field)) {
            throw new \InvalidArgumentException('non-nullable domain_field cannot be null');
        }

        $this->container['domain_field'] = $domain_field;

        return $this;
    }

    /**
     * Gets text_field
     *
     * @return \OpenAPI\Client\Model\MarketplaceTextField|null
     */
    public function getTextField()
    {
        return $this->container['text_field'];
    }

    /**
     * Sets text_field
     *
     * @param \OpenAPI\Client\Model\MarketplaceTextField|null $text_field text_field
     *
     * @return self
     */
    public function setTextField($text_field)
    {

        if (is_null($text_field)) {
            throw new \InvalidArgumentException('non-nullable text_field cannot be null');
        }

        $this->container['text_field'] = $text_field;

        return $this;
    }

    /**
     * Gets email_field
     *
     * @return \OpenAPI\Client\Model\MarketplaceEmailField|null
     */
    public function getEmailField()
    {
        return $this->container['email_field'];
    }

    /**
     * Sets email_field
     *
     * @param \OpenAPI\Client\Model\MarketplaceEmailField|null $email_field email_field
     *
     * @return self
     */
    public function setEmailField($email_field)
    {

        if (is_null($email_field)) {
            throw new \InvalidArgumentException('non-nullable email_field cannot be null');
        }

        $this->container['email_field'] = $email_field;

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


