<?php
/**
 * ManageCreateVpsResponseError
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
 * The version of the OpenAPI document: v1.2.1
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
 * ManageCreateVpsResponseError Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManageCreateVpsResponseError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Manage_CreateVpsResponse_Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'message' => 'string',
        'variable_error' => '\OpenAPI\Client\Model\ManageCreateVpsResponseErrorSoftwareVariableError',
        'insufficient_funds_error' => '\OpenAPI\Client\Model\ManageCreateVpsResponseErrorInsufficientFundsError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => 'enum',
        'message' => null,
        'variable_error' => null,
        'insufficient_funds_error' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'message' => false,
		'variable_error' => false,
		'insufficient_funds_error' => false
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
        'code' => 'code',
        'message' => 'message',
        'variable_error' => 'variable_error',
        'insufficient_funds_error' => 'insufficient_funds_error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'variable_error' => 'setVariableError',
        'insufficient_funds_error' => 'setInsufficientFundsError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'variable_error' => 'getVariableError',
        'insufficient_funds_error' => 'getInsufficientFundsError'
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

    public const CODE_INTERNAL_ERROR = 'INTERNAL_ERROR';
    public const CODE_INVALID_DISPLAY_NAME = 'INVALID_DISPLAY_NAME';
    public const CODE_INVALID_HOSTNAME = 'INVALID_HOSTNAME';
    public const CODE_INVALID_PARAMS = 'INVALID_PARAMS';
    public const CODE_INSUFFICIENT_FUNDS = 'INSUFFICIENT_FUNDS';
    public const CODE_SERVICE_DISABLED = 'SERVICE_DISABLED';
    public const CODE_INVALID_SECURITY_CONFIGURATION = 'INVALID_SECURITY_CONFIGURATION';
    public const CODE_INVALID_PASSWORD = 'INVALID_PASSWORD';
    public const CODE_TEMPORARILY_UNAVAILABLE = 'TEMPORARILY_UNAVAILABLE';
    public const CODE_SOFTWARE_INVALID_TYPE = 'SOFTWARE_INVALID_TYPE';
    public const CODE_SOFTWARE_NOT_ENOUGH_RESOURCES = 'SOFTWARE_NOT_ENOUGH_RESOURCES';
    public const CODE_SOFTWARE_VARIABLE_REQUIRED = 'SOFTWARE_VARIABLE_REQUIRED';
    public const CODE_SOFTWARE_VARIABLE_INVALID = 'SOFTWARE_VARIABLE_INVALID';
    public const CODE_SNAPSHOT_NOT_DONE = 'SNAPSHOT_NOT_DONE';
    public const CODE_SNAPSHOT_NOT_ENOUGH_CONFIGURATION = 'SNAPSHOT_NOT_ENOUGH_CONFIGURATION';
    public const CODE_INVALID_PRIVATE_NETWORK_CONFIGURATION = 'INVALID_PRIVATE_NETWORK_CONFIGURATION';
    public const CODE_INVALID_ADDRESS = 'INVALID_ADDRESS';
    public const CODE_ADDRESS_SUBNET_MISMATCH = 'ADDRESS_SUBNET_MISMATCH';
    public const CODE_ADDRESS_ALREADY_RESERVED = 'ADDRESS_ALREADY_RESERVED';
    public const CODE_ADDRESS_UNAVAILABLE = 'ADDRESS_UNAVAILABLE';
    public const CODE_BLACKLISTED_PASSWORD = 'BLACKLISTED_PASSWORD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INTERNAL_ERROR,
            self::CODE_INVALID_DISPLAY_NAME,
            self::CODE_INVALID_HOSTNAME,
            self::CODE_INVALID_PARAMS,
            self::CODE_INSUFFICIENT_FUNDS,
            self::CODE_SERVICE_DISABLED,
            self::CODE_INVALID_SECURITY_CONFIGURATION,
            self::CODE_INVALID_PASSWORD,
            self::CODE_TEMPORARILY_UNAVAILABLE,
            self::CODE_SOFTWARE_INVALID_TYPE,
            self::CODE_SOFTWARE_NOT_ENOUGH_RESOURCES,
            self::CODE_SOFTWARE_VARIABLE_REQUIRED,
            self::CODE_SOFTWARE_VARIABLE_INVALID,
            self::CODE_SNAPSHOT_NOT_DONE,
            self::CODE_SNAPSHOT_NOT_ENOUGH_CONFIGURATION,
            self::CODE_INVALID_PRIVATE_NETWORK_CONFIGURATION,
            self::CODE_INVALID_ADDRESS,
            self::CODE_ADDRESS_SUBNET_MISMATCH,
            self::CODE_ADDRESS_ALREADY_RESERVED,
            self::CODE_ADDRESS_UNAVAILABLE,
            self::CODE_BLACKLISTED_PASSWORD,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('variable_error', $data ?? [], null);
        $this->setIfExists('insufficient_funds_error', $data ?? [], null);
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

        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {

        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets variable_error
     *
     * @return \OpenAPI\Client\Model\ManageCreateVpsResponseErrorSoftwareVariableError|null
     */
    public function getVariableError()
    {
        return $this->container['variable_error'];
    }

    /**
     * Sets variable_error
     *
     * @param \OpenAPI\Client\Model\ManageCreateVpsResponseErrorSoftwareVariableError|null $variable_error variable_error
     *
     * @return self
     */
    public function setVariableError($variable_error)
    {

        if (is_null($variable_error)) {
            throw new \InvalidArgumentException('non-nullable variable_error cannot be null');
        }

        $this->container['variable_error'] = $variable_error;

        return $this;
    }

    /**
     * Gets insufficient_funds_error
     *
     * @return \OpenAPI\Client\Model\ManageCreateVpsResponseErrorInsufficientFundsError|null
     */
    public function getInsufficientFundsError()
    {
        return $this->container['insufficient_funds_error'];
    }

    /**
     * Sets insufficient_funds_error
     *
     * @param \OpenAPI\Client\Model\ManageCreateVpsResponseErrorInsufficientFundsError|null $insufficient_funds_error insufficient_funds_error
     *
     * @return self
     */
    public function setInsufficientFundsError($insufficient_funds_error)
    {

        if (is_null($insufficient_funds_error)) {
            throw new \InvalidArgumentException('non-nullable insufficient_funds_error cannot be null');
        }

        $this->container['insufficient_funds_error'] = $insufficient_funds_error;

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


