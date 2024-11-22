<?php
/**
 * ManageVpsInfo
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
 * ManageVpsInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManageVpsInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Manage_VpsInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'slug' => 'string',
        'display_name' => 'string',
        'hostname' => 'string',
        'configuration' => '\OpenAPI\Client\Model\ManageVpsConfiguration',
        'status' => 'string',
        'ssh_keys' => '\OpenAPI\Client\Model\StructuresSshKeyInfo[]',
        'has_password' => 'bool',
        'manage_enabled' => 'bool',
        'description' => 'string',
        'date_create' => 'string',
        'ip_address' => 'string',
        'rescue_mode' => 'bool',
        'migrating' => 'bool',
        'host_unavailable' => 'bool',
        'unblocking' => 'bool',
        'restoring' => 'bool',
        'disk_used' => 'string',
        'disk_left' => 'string',
        'additional_ip_address' => 'string[]',
        'beget_ssh_access_allowed' => 'bool',
        'archived' => 'bool',
        'unarchiving' => 'bool',
        'private_network' => '\OpenAPI\Client\Model\StructuresAttachedPrivateNetwork[]',
        'technical_domain' => 'string',
        'software_domain' => 'string',
        'software' => '\OpenAPI\Client\Model\StructuresInstalledSoftwareInfo',
        'link_slug' => 'string',
        'region' => 'string'
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
        'slug' => null,
        'display_name' => null,
        'hostname' => null,
        'configuration' => null,
        'status' => 'enum',
        'ssh_keys' => null,
        'has_password' => null,
        'manage_enabled' => null,
        'description' => null,
        'date_create' => null,
        'ip_address' => null,
        'rescue_mode' => null,
        'migrating' => null,
        'host_unavailable' => null,
        'unblocking' => null,
        'restoring' => null,
        'disk_used' => null,
        'disk_left' => null,
        'additional_ip_address' => null,
        'beget_ssh_access_allowed' => null,
        'archived' => null,
        'unarchiving' => null,
        'private_network' => null,
        'technical_domain' => null,
        'software_domain' => null,
        'software' => null,
        'link_slug' => null,
        'region' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'slug' => false,
		'display_name' => false,
		'hostname' => false,
		'configuration' => false,
		'status' => false,
		'ssh_keys' => false,
		'has_password' => false,
		'manage_enabled' => false,
		'description' => false,
		'date_create' => false,
		'ip_address' => false,
		'rescue_mode' => false,
		'migrating' => false,
		'host_unavailable' => false,
		'unblocking' => false,
		'restoring' => false,
		'disk_used' => false,
		'disk_left' => false,
		'additional_ip_address' => false,
		'beget_ssh_access_allowed' => false,
		'archived' => false,
		'unarchiving' => false,
		'private_network' => false,
		'technical_domain' => false,
		'software_domain' => false,
		'software' => false,
		'link_slug' => false,
		'region' => false
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
        'slug' => 'slug',
        'display_name' => 'display_name',
        'hostname' => 'hostname',
        'configuration' => 'configuration',
        'status' => 'status',
        'ssh_keys' => 'ssh_keys',
        'has_password' => 'has_password',
        'manage_enabled' => 'manage_enabled',
        'description' => 'description',
        'date_create' => 'date_create',
        'ip_address' => 'ip_address',
        'rescue_mode' => 'rescue_mode',
        'migrating' => 'migrating',
        'host_unavailable' => 'host_unavailable',
        'unblocking' => 'unblocking',
        'restoring' => 'restoring',
        'disk_used' => 'disk_used',
        'disk_left' => 'disk_left',
        'additional_ip_address' => 'additional_ip_address',
        'beget_ssh_access_allowed' => 'beget_ssh_access_allowed',
        'archived' => 'archived',
        'unarchiving' => 'unarchiving',
        'private_network' => 'private_network',
        'technical_domain' => 'technical_domain',
        'software_domain' => 'software_domain',
        'software' => 'software',
        'link_slug' => 'link_slug',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'slug' => 'setSlug',
        'display_name' => 'setDisplayName',
        'hostname' => 'setHostname',
        'configuration' => 'setConfiguration',
        'status' => 'setStatus',
        'ssh_keys' => 'setSshKeys',
        'has_password' => 'setHasPassword',
        'manage_enabled' => 'setManageEnabled',
        'description' => 'setDescription',
        'date_create' => 'setDateCreate',
        'ip_address' => 'setIpAddress',
        'rescue_mode' => 'setRescueMode',
        'migrating' => 'setMigrating',
        'host_unavailable' => 'setHostUnavailable',
        'unblocking' => 'setUnblocking',
        'restoring' => 'setRestoring',
        'disk_used' => 'setDiskUsed',
        'disk_left' => 'setDiskLeft',
        'additional_ip_address' => 'setAdditionalIpAddress',
        'beget_ssh_access_allowed' => 'setBegetSshAccessAllowed',
        'archived' => 'setArchived',
        'unarchiving' => 'setUnarchiving',
        'private_network' => 'setPrivateNetwork',
        'technical_domain' => 'setTechnicalDomain',
        'software_domain' => 'setSoftwareDomain',
        'software' => 'setSoftware',
        'link_slug' => 'setLinkSlug',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'slug' => 'getSlug',
        'display_name' => 'getDisplayName',
        'hostname' => 'getHostname',
        'configuration' => 'getConfiguration',
        'status' => 'getStatus',
        'ssh_keys' => 'getSshKeys',
        'has_password' => 'getHasPassword',
        'manage_enabled' => 'getManageEnabled',
        'description' => 'getDescription',
        'date_create' => 'getDateCreate',
        'ip_address' => 'getIpAddress',
        'rescue_mode' => 'getRescueMode',
        'migrating' => 'getMigrating',
        'host_unavailable' => 'getHostUnavailable',
        'unblocking' => 'getUnblocking',
        'restoring' => 'getRestoring',
        'disk_used' => 'getDiskUsed',
        'disk_left' => 'getDiskLeft',
        'additional_ip_address' => 'getAdditionalIpAddress',
        'beget_ssh_access_allowed' => 'getBegetSshAccessAllowed',
        'archived' => 'getArchived',
        'unarchiving' => 'getUnarchiving',
        'private_network' => 'getPrivateNetwork',
        'technical_domain' => 'getTechnicalDomain',
        'software_domain' => 'getSoftwareDomain',
        'software' => 'getSoftware',
        'link_slug' => 'getLinkSlug',
        'region' => 'getRegion'
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

    public const STATUS_UNKNOWN = 'UNKNOWN';
    public const STATUS_CREATING = 'CREATING';
    public const STATUS_RUNNING = 'RUNNING';
    public const STATUS_STOPPING = 'STOPPING';
    public const STATUS_RESTARTING = 'RESTARTING';
    public const STATUS_REMOVING = 'REMOVING';
    public const STATUS_REMOVED = 'REMOVED';
    public const STATUS_STOPPED = 'STOPPED';
    public const STATUS_STARTING = 'STARTING';
    public const STATUS_RECONFIGURING = 'RECONFIGURING';
    public const STATUS_REINSTALLING = 'REINSTALLING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNKNOWN,
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_STOPPING,
            self::STATUS_RESTARTING,
            self::STATUS_REMOVING,
            self::STATUS_REMOVED,
            self::STATUS_STOPPED,
            self::STATUS_STARTING,
            self::STATUS_RECONFIGURING,
            self::STATUS_REINSTALLING,
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
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('ssh_keys', $data ?? [], null);
        $this->setIfExists('has_password', $data ?? [], null);
        $this->setIfExists('manage_enabled', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('date_create', $data ?? [], null);
        $this->setIfExists('ip_address', $data ?? [], null);
        $this->setIfExists('rescue_mode', $data ?? [], null);
        $this->setIfExists('migrating', $data ?? [], null);
        $this->setIfExists('host_unavailable', $data ?? [], null);
        $this->setIfExists('unblocking', $data ?? [], null);
        $this->setIfExists('restoring', $data ?? [], null);
        $this->setIfExists('disk_used', $data ?? [], null);
        $this->setIfExists('disk_left', $data ?? [], null);
        $this->setIfExists('additional_ip_address', $data ?? [], null);
        $this->setIfExists('beget_ssh_access_allowed', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('unarchiving', $data ?? [], null);
        $this->setIfExists('private_network', $data ?? [], null);
        $this->setIfExists('technical_domain', $data ?? [], null);
        $this->setIfExists('software_domain', $data ?? [], null);
        $this->setIfExists('software', $data ?? [], null);
        $this->setIfExists('link_slug', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
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
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {

        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }

        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \OpenAPI\Client\Model\ManageVpsConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \OpenAPI\Client\Model\ManageVpsConfiguration|null $configuration configuration
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
     * Gets ssh_keys
     *
     * @return \OpenAPI\Client\Model\StructuresSshKeyInfo[]|null
     */
    public function getSshKeys()
    {
        return $this->container['ssh_keys'];
    }

    /**
     * Sets ssh_keys
     *
     * @param \OpenAPI\Client\Model\StructuresSshKeyInfo[]|null $ssh_keys ssh_keys
     *
     * @return self
     */
    public function setSshKeys($ssh_keys)
    {

        if (is_null($ssh_keys)) {
            throw new \InvalidArgumentException('non-nullable ssh_keys cannot be null');
        }

        $this->container['ssh_keys'] = $ssh_keys;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool|null
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool|null $has_password has_password
     *
     * @return self
     */
    public function setHasPassword($has_password)
    {

        if (is_null($has_password)) {
            throw new \InvalidArgumentException('non-nullable has_password cannot be null');
        }

        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets manage_enabled
     *
     * @return bool|null
     */
    public function getManageEnabled()
    {
        return $this->container['manage_enabled'];
    }

    /**
     * Sets manage_enabled
     *
     * @param bool|null $manage_enabled manage_enabled
     *
     * @return self
     */
    public function setManageEnabled($manage_enabled)
    {

        if (is_null($manage_enabled)) {
            throw new \InvalidArgumentException('non-nullable manage_enabled cannot be null');
        }

        $this->container['manage_enabled'] = $manage_enabled;

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
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address ip_address
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {

        if (is_null($ip_address)) {
            throw new \InvalidArgumentException('non-nullable ip_address cannot be null');
        }

        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets rescue_mode
     *
     * @return bool|null
     */
    public function getRescueMode()
    {
        return $this->container['rescue_mode'];
    }

    /**
     * Sets rescue_mode
     *
     * @param bool|null $rescue_mode rescue_mode
     *
     * @return self
     */
    public function setRescueMode($rescue_mode)
    {

        if (is_null($rescue_mode)) {
            throw new \InvalidArgumentException('non-nullable rescue_mode cannot be null');
        }

        $this->container['rescue_mode'] = $rescue_mode;

        return $this;
    }

    /**
     * Gets migrating
     *
     * @return bool|null
     */
    public function getMigrating()
    {
        return $this->container['migrating'];
    }

    /**
     * Sets migrating
     *
     * @param bool|null $migrating migrating
     *
     * @return self
     */
    public function setMigrating($migrating)
    {

        if (is_null($migrating)) {
            throw new \InvalidArgumentException('non-nullable migrating cannot be null');
        }

        $this->container['migrating'] = $migrating;

        return $this;
    }

    /**
     * Gets host_unavailable
     *
     * @return bool|null
     */
    public function getHostUnavailable()
    {
        return $this->container['host_unavailable'];
    }

    /**
     * Sets host_unavailable
     *
     * @param bool|null $host_unavailable host_unavailable
     *
     * @return self
     */
    public function setHostUnavailable($host_unavailable)
    {

        if (is_null($host_unavailable)) {
            throw new \InvalidArgumentException('non-nullable host_unavailable cannot be null');
        }

        $this->container['host_unavailable'] = $host_unavailable;

        return $this;
    }

    /**
     * Gets unblocking
     *
     * @return bool|null
     */
    public function getUnblocking()
    {
        return $this->container['unblocking'];
    }

    /**
     * Sets unblocking
     *
     * @param bool|null $unblocking unblocking
     *
     * @return self
     */
    public function setUnblocking($unblocking)
    {

        if (is_null($unblocking)) {
            throw new \InvalidArgumentException('non-nullable unblocking cannot be null');
        }

        $this->container['unblocking'] = $unblocking;

        return $this;
    }

    /**
     * Gets restoring
     *
     * @return bool|null
     */
    public function getRestoring()
    {
        return $this->container['restoring'];
    }

    /**
     * Sets restoring
     *
     * @param bool|null $restoring restoring
     *
     * @return self
     */
    public function setRestoring($restoring)
    {

        if (is_null($restoring)) {
            throw new \InvalidArgumentException('non-nullable restoring cannot be null');
        }

        $this->container['restoring'] = $restoring;

        return $this;
    }

    /**
     * Gets disk_used
     *
     * @return string|null
     */
    public function getDiskUsed()
    {
        return $this->container['disk_used'];
    }

    /**
     * Sets disk_used
     *
     * @param string|null $disk_used disk_used
     *
     * @return self
     */
    public function setDiskUsed($disk_used)
    {

        if (is_null($disk_used)) {
            throw new \InvalidArgumentException('non-nullable disk_used cannot be null');
        }

        $this->container['disk_used'] = $disk_used;

        return $this;
    }

    /**
     * Gets disk_left
     *
     * @return string|null
     */
    public function getDiskLeft()
    {
        return $this->container['disk_left'];
    }

    /**
     * Sets disk_left
     *
     * @param string|null $disk_left disk_left
     *
     * @return self
     */
    public function setDiskLeft($disk_left)
    {

        if (is_null($disk_left)) {
            throw new \InvalidArgumentException('non-nullable disk_left cannot be null');
        }

        $this->container['disk_left'] = $disk_left;

        return $this;
    }

    /**
     * Gets additional_ip_address
     *
     * @return string[]|null
     */
    public function getAdditionalIpAddress()
    {
        return $this->container['additional_ip_address'];
    }

    /**
     * Sets additional_ip_address
     *
     * @param string[]|null $additional_ip_address additional_ip_address
     *
     * @return self
     */
    public function setAdditionalIpAddress($additional_ip_address)
    {

        if (is_null($additional_ip_address)) {
            throw new \InvalidArgumentException('non-nullable additional_ip_address cannot be null');
        }

        $this->container['additional_ip_address'] = $additional_ip_address;

        return $this;
    }

    /**
     * Gets beget_ssh_access_allowed
     *
     * @return bool|null
     */
    public function getBegetSshAccessAllowed()
    {
        return $this->container['beget_ssh_access_allowed'];
    }

    /**
     * Sets beget_ssh_access_allowed
     *
     * @param bool|null $beget_ssh_access_allowed beget_ssh_access_allowed
     *
     * @return self
     */
    public function setBegetSshAccessAllowed($beget_ssh_access_allowed)
    {

        if (is_null($beget_ssh_access_allowed)) {
            throw new \InvalidArgumentException('non-nullable beget_ssh_access_allowed cannot be null');
        }

        $this->container['beget_ssh_access_allowed'] = $beget_ssh_access_allowed;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {

        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }

        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets unarchiving
     *
     * @return bool|null
     */
    public function getUnarchiving()
    {
        return $this->container['unarchiving'];
    }

    /**
     * Sets unarchiving
     *
     * @param bool|null $unarchiving unarchiving
     *
     * @return self
     */
    public function setUnarchiving($unarchiving)
    {

        if (is_null($unarchiving)) {
            throw new \InvalidArgumentException('non-nullable unarchiving cannot be null');
        }

        $this->container['unarchiving'] = $unarchiving;

        return $this;
    }

    /**
     * Gets private_network
     *
     * @return \OpenAPI\Client\Model\StructuresAttachedPrivateNetwork[]|null
     */
    public function getPrivateNetwork()
    {
        return $this->container['private_network'];
    }

    /**
     * Sets private_network
     *
     * @param \OpenAPI\Client\Model\StructuresAttachedPrivateNetwork[]|null $private_network private_network
     *
     * @return self
     */
    public function setPrivateNetwork($private_network)
    {

        if (is_null($private_network)) {
            throw new \InvalidArgumentException('non-nullable private_network cannot be null');
        }

        $this->container['private_network'] = $private_network;

        return $this;
    }

    /**
     * Gets technical_domain
     *
     * @return string|null
     */
    public function getTechnicalDomain()
    {
        return $this->container['technical_domain'];
    }

    /**
     * Sets technical_domain
     *
     * @param string|null $technical_domain technical_domain
     *
     * @return self
     */
    public function setTechnicalDomain($technical_domain)
    {

        if (is_null($technical_domain)) {
            throw new \InvalidArgumentException('non-nullable technical_domain cannot be null');
        }

        $this->container['technical_domain'] = $technical_domain;

        return $this;
    }

    /**
     * Gets software_domain
     *
     * @return string|null
     */
    public function getSoftwareDomain()
    {
        return $this->container['software_domain'];
    }

    /**
     * Sets software_domain
     *
     * @param string|null $software_domain software_domain
     *
     * @return self
     */
    public function setSoftwareDomain($software_domain)
    {

        if (is_null($software_domain)) {
            throw new \InvalidArgumentException('non-nullable software_domain cannot be null');
        }

        $this->container['software_domain'] = $software_domain;

        return $this;
    }

    /**
     * Gets software
     *
     * @return \OpenAPI\Client\Model\StructuresInstalledSoftwareInfo|null
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \OpenAPI\Client\Model\StructuresInstalledSoftwareInfo|null $software software
     *
     * @return self
     */
    public function setSoftware($software)
    {

        if (is_null($software)) {
            throw new \InvalidArgumentException('non-nullable software cannot be null');
        }

        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets link_slug
     *
     * @return string|null
     */
    public function getLinkSlug()
    {
        return $this->container['link_slug'];
    }

    /**
     * Sets link_slug
     *
     * @param string|null $link_slug link_slug
     *
     * @return self
     */
    public function setLinkSlug($link_slug)
    {

        if (is_null($link_slug)) {
            throw new \InvalidArgumentException('non-nullable link_slug cannot be null');
        }

        $this->container['link_slug'] = $link_slug;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {

        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }

        $this->container['region'] = $region;

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


