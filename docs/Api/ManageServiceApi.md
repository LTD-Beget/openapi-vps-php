# OpenAPI\Client\ManageServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**manageServiceAttachIpAddress()**](ManageServiceApi.md#manageServiceAttachIpAddress) | **POST** /v1/vps/{id}/network/{ip_address} |  |
| [**manageServiceAttachSshKey()**](ManageServiceApi.md#manageServiceAttachSshKey) | **POST** /v1/vps/{id}/sshKey/{ssh_key_id} |  |
| [**manageServiceAttachToPrivateNetwork()**](ManageServiceApi.md#manageServiceAttachToPrivateNetwork) | **POST** /v1/vps/{id}/private-network/{network_id} |  |
| [**manageServiceChangeConfiguration()**](ManageServiceApi.md#manageServiceChangeConfiguration) | **PUT** /v1/vps/server/{id}/configuration |  |
| [**manageServiceChangeSshAccess()**](ManageServiceApi.md#manageServiceChangeSshAccess) | **PUT** /v1/vps/{id}/ssh/access |  |
| [**manageServiceCheckSoftwareRequirements()**](ManageServiceApi.md#manageServiceCheckSoftwareRequirements) | **POST** /v1/vps/software/requirements |  |
| [**manageServiceCreateVps()**](ManageServiceApi.md#manageServiceCreateVps) | **POST** /v1/vps/server |  |
| [**manageServiceDetachFromPrivateNetwork()**](ManageServiceApi.md#manageServiceDetachFromPrivateNetwork) | **DELETE** /v1/vps/{id}/private-network/{network_id} |  |
| [**manageServiceDetachIpAddress()**](ManageServiceApi.md#manageServiceDetachIpAddress) | **DELETE** /v1/vps/network/detach/{ip_address} |  |
| [**manageServiceDetachSshKey()**](ManageServiceApi.md#manageServiceDetachSshKey) | **DELETE** /v1/vps/{id}/sshKey/{ssh_key_id} |  |
| [**manageServiceDisablePostInstallAlert()**](ManageServiceApi.md#manageServiceDisablePostInstallAlert) | **DELETE** /v1/vps/{id}/software/post-install-alert |  |
| [**manageServiceGetAvailableConfiguration()**](ManageServiceApi.md#manageServiceGetAvailableConfiguration) | **GET** /v1/vps/configuration |  |
| [**manageServiceGetFileManagerSettings()**](ManageServiceApi.md#manageServiceGetFileManagerSettings) | **POST** /v1/vps/{id}/fm |  |
| [**manageServiceGetHistory()**](ManageServiceApi.md#manageServiceGetHistory) | **GET** /v1/vps/{id}/history |  |
| [**manageServiceGetInfo()**](ManageServiceApi.md#manageServiceGetInfo) | **GET** /v1/vps/server/{id} |  |
| [**manageServiceGetInstalledSoftware()**](ManageServiceApi.md#manageServiceGetInstalledSoftware) | **GET** /v1/vps/{id}/software |  |
| [**manageServiceGetList()**](ManageServiceApi.md#manageServiceGetList) | **GET** /v1/vps/server/list |  |
| [**manageServiceGetRegionList()**](ManageServiceApi.md#manageServiceGetRegionList) | **GET** /v1/vps/region |  |
| [**manageServiceGetStatuses()**](ManageServiceApi.md#manageServiceGetStatuses) | **GET** /v1/vps/server/statuses |  |
| [**manageServiceRebootVps()**](ManageServiceApi.md#manageServiceRebootVps) | **POST** /v1/vps/server/{id}/reboot |  |
| [**manageServiceReinstall()**](ManageServiceApi.md#manageServiceReinstall) | **POST** /v1/vps/server/{id}/reinstall |  |
| [**manageServiceRemoveVps()**](ManageServiceApi.md#manageServiceRemoveVps) | **POST** /v1/vps/server/{id}/remove |  |
| [**manageServiceReserveVpsSubdomain()**](ManageServiceApi.md#manageServiceReserveVpsSubdomain) | **GET** /v1/vps/subdomain/reserve |  |
| [**manageServiceResetPassword()**](ManageServiceApi.md#manageServiceResetPassword) | **PUT** /v1/vps/{id}/password |  |
| [**manageServiceResetVps()**](ManageServiceApi.md#manageServiceResetVps) | **POST** /v1/vps/server/{id}/reset |  |
| [**manageServiceStartRescue()**](ManageServiceApi.md#manageServiceStartRescue) | **POST** /v1/vps/server/{id}/rescue |  |
| [**manageServiceStartVps()**](ManageServiceApi.md#manageServiceStartVps) | **POST** /v1/vps/server/{id}/start |  |
| [**manageServiceStopRescue()**](ManageServiceApi.md#manageServiceStopRescue) | **DELETE** /v1/vps/server/{id}/rescue |  |
| [**manageServiceStopVps()**](ManageServiceApi.md#manageServiceStopVps) | **POST** /v1/vps/server/{id}/stop |  |
| [**manageServiceUnarchive()**](ManageServiceApi.md#manageServiceUnarchive) | **DELETE** /v1/vps/archive/{id} |  |
| [**manageServiceUpdateInfo()**](ManageServiceApi.md#manageServiceUpdateInfo) | **PUT** /v1/vps/server/{id}/info |  |


## `manageServiceAttachIpAddress()`

```php
manageServiceAttachIpAddress($id, $ip_address, $manage_attach_ip_address_request): \OpenAPI\Client\Model\ManageAttachIpAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ip_address = 'ip_address_example'; // string
$manage_attach_ip_address_request = new \OpenAPI\Client\Model\ManageAttachIpAddressRequest(); // \OpenAPI\Client\Model\ManageAttachIpAddressRequest

try {
    $result = $apiInstance->manageServiceAttachIpAddress($id, $ip_address, $manage_attach_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ip_address** | **string**|  | |
| **manage_attach_ip_address_request** | [**\OpenAPI\Client\Model\ManageAttachIpAddressRequest**](../Model/ManageAttachIpAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageAttachIpAddressResponse**](../Model/ManageAttachIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceAttachSshKey()`

```php
manageServiceAttachSshKey($id, $ssh_key_id): \OpenAPI\Client\Model\ManageAttachSshKeyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ssh_key_id = 56; // int

try {
    $result = $apiInstance->manageServiceAttachSshKey($id, $ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ssh_key_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageAttachSshKeyResponse**](../Model/ManageAttachSshKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceAttachToPrivateNetwork()`

```php
manageServiceAttachToPrivateNetwork($id, $network_id, $manage_attach_to_private_network_request): \OpenAPI\Client\Model\ManageAttachToPrivateNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$network_id = 'network_id_example'; // string
$manage_attach_to_private_network_request = new \OpenAPI\Client\Model\ManageAttachToPrivateNetworkRequest(); // \OpenAPI\Client\Model\ManageAttachToPrivateNetworkRequest

try {
    $result = $apiInstance->manageServiceAttachToPrivateNetwork($id, $network_id, $manage_attach_to_private_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachToPrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **network_id** | **string**|  | |
| **manage_attach_to_private_network_request** | [**\OpenAPI\Client\Model\ManageAttachToPrivateNetworkRequest**](../Model/ManageAttachToPrivateNetworkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageAttachToPrivateNetworkResponse**](../Model/ManageAttachToPrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceChangeConfiguration()`

```php
manageServiceChangeConfiguration($id, $manage_change_configuration_request): \OpenAPI\Client\Model\ManageChangeConfigurationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_change_configuration_request = new \OpenAPI\Client\Model\ManageChangeConfigurationRequest(); // \OpenAPI\Client\Model\ManageChangeConfigurationRequest

try {
    $result = $apiInstance->manageServiceChangeConfiguration($id, $manage_change_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceChangeConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **manage_change_configuration_request** | [**\OpenAPI\Client\Model\ManageChangeConfigurationRequest**](../Model/ManageChangeConfigurationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageChangeConfigurationResponse**](../Model/ManageChangeConfigurationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceChangeSshAccess()`

```php
manageServiceChangeSshAccess($id, $manage_change_ssh_access_request): \OpenAPI\Client\Model\ManageChangeSshAccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_change_ssh_access_request = new \OpenAPI\Client\Model\ManageChangeSshAccessRequest(); // \OpenAPI\Client\Model\ManageChangeSshAccessRequest

try {
    $result = $apiInstance->manageServiceChangeSshAccess($id, $manage_change_ssh_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceChangeSshAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **manage_change_ssh_access_request** | [**\OpenAPI\Client\Model\ManageChangeSshAccessRequest**](../Model/ManageChangeSshAccessRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageChangeSshAccessResponse**](../Model/ManageChangeSshAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceCheckSoftwareRequirements()`

```php
manageServiceCheckSoftwareRequirements($manage_check_software_requirements_request): \OpenAPI\Client\Model\ManageCheckSoftwareRequirementsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_check_software_requirements_request = new \OpenAPI\Client\Model\ManageCheckSoftwareRequirementsRequest(); // \OpenAPI\Client\Model\ManageCheckSoftwareRequirementsRequest

try {
    $result = $apiInstance->manageServiceCheckSoftwareRequirements($manage_check_software_requirements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceCheckSoftwareRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manage_check_software_requirements_request** | [**\OpenAPI\Client\Model\ManageCheckSoftwareRequirementsRequest**](../Model/ManageCheckSoftwareRequirementsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageCheckSoftwareRequirementsResponse**](../Model/ManageCheckSoftwareRequirementsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceCreateVps()`

```php
manageServiceCreateVps($manage_create_vps_request): \OpenAPI\Client\Model\ManageCreateVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_create_vps_request = new \OpenAPI\Client\Model\ManageCreateVpsRequest(); // \OpenAPI\Client\Model\ManageCreateVpsRequest

try {
    $result = $apiInstance->manageServiceCreateVps($manage_create_vps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceCreateVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manage_create_vps_request** | [**\OpenAPI\Client\Model\ManageCreateVpsRequest**](../Model/ManageCreateVpsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageCreateVpsResponse**](../Model/ManageCreateVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachFromPrivateNetwork()`

```php
manageServiceDetachFromPrivateNetwork($id, $network_id): \OpenAPI\Client\Model\ManageDetachFromPrivateNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$network_id = 'network_id_example'; // string

try {
    $result = $apiInstance->manageServiceDetachFromPrivateNetwork($id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachFromPrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **network_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageDetachFromPrivateNetworkResponse**](../Model/ManageDetachFromPrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachIpAddress()`

```php
manageServiceDetachIpAddress($ip_address): \OpenAPI\Client\Model\ManageDetachIpAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address = 'ip_address_example'; // string

try {
    $result = $apiInstance->manageServiceDetachIpAddress($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageDetachIpAddressResponse**](../Model/ManageDetachIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachSshKey()`

```php
manageServiceDetachSshKey($id, $ssh_key_id): \OpenAPI\Client\Model\ManageDetachSshKeyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ssh_key_id = 56; // int

try {
    $result = $apiInstance->manageServiceDetachSshKey($id, $ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ssh_key_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageDetachSshKeyResponse**](../Model/ManageDetachSshKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDisablePostInstallAlert()`

```php
manageServiceDisablePostInstallAlert($id): \OpenAPI\Client\Model\ManageDisablePostInstallAlertResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceDisablePostInstallAlert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDisablePostInstallAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageDisablePostInstallAlertResponse**](../Model/ManageDisablePostInstallAlertResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetAvailableConfiguration()`

```php
manageServiceGetAvailableConfiguration(): \OpenAPI\Client\Model\ManageGetAvailableConfigurationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetAvailableConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetAvailableConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManageGetAvailableConfigurationResponse**](../Model/ManageGetAvailableConfigurationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetFileManagerSettings()`

```php
manageServiceGetFileManagerSettings($id): \OpenAPI\Client\Model\ManageGetFileManagerSettingsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetFileManagerSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetFileManagerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageGetFileManagerSettingsResponse**](../Model/ManageGetFileManagerSettingsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetHistory()`

```php
manageServiceGetHistory($id): \OpenAPI\Client\Model\ManageGetHistoryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetHistory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageGetHistoryResponse**](../Model/ManageGetHistoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetInfo()`

```php
manageServiceGetInfo($id): \OpenAPI\Client\Model\ManageGetInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageGetInfoResponse**](../Model/ManageGetInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetInstalledSoftware()`

```php
manageServiceGetInstalledSoftware($id): \OpenAPI\Client\Model\ManageGetInstalledSoftwareResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetInstalledSoftware($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetInstalledSoftware: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageGetInstalledSoftwareResponse**](../Model/ManageGetInstalledSoftwareResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetList()`

```php
manageServiceGetList(): \OpenAPI\Client\Model\ManageGetListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManageGetListResponse**](../Model/ManageGetListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetRegionList()`

```php
manageServiceGetRegionList(): \OpenAPI\Client\Model\ManageGetRegionListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetRegionList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetRegionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManageGetRegionListResponse**](../Model/ManageGetRegionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetStatuses()`

```php
manageServiceGetStatuses(): \OpenAPI\Client\Model\ManageGetStatusesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManageGetStatusesResponse**](../Model/ManageGetStatusesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceRebootVps()`

```php
manageServiceRebootVps($id): \OpenAPI\Client\Model\ManageRebootVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceRebootVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceRebootVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageRebootVpsResponse**](../Model/ManageRebootVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceReinstall()`

```php
manageServiceReinstall($id, $manage_reinstall_request): \OpenAPI\Client\Model\ManageReinstallResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_reinstall_request = new \OpenAPI\Client\Model\ManageReinstallRequest(); // \OpenAPI\Client\Model\ManageReinstallRequest

try {
    $result = $apiInstance->manageServiceReinstall($id, $manage_reinstall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceReinstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **manage_reinstall_request** | [**\OpenAPI\Client\Model\ManageReinstallRequest**](../Model/ManageReinstallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageReinstallResponse**](../Model/ManageReinstallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceRemoveVps()`

```php
manageServiceRemoveVps($id): \OpenAPI\Client\Model\ManageRemoveVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceRemoveVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceRemoveVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageRemoveVpsResponse**](../Model/ManageRemoveVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceReserveVpsSubdomain()`

```php
manageServiceReserveVpsSubdomain(): \OpenAPI\Client\Model\ManageReserveVpsSubdomainResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceReserveVpsSubdomain();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceReserveVpsSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManageReserveVpsSubdomainResponse**](../Model/ManageReserveVpsSubdomainResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceResetPassword()`

```php
manageServiceResetPassword($id): \OpenAPI\Client\Model\ManageResetPasswordResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceResetPassword($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageResetPasswordResponse**](../Model/ManageResetPasswordResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceResetVps()`

```php
manageServiceResetVps($id): \OpenAPI\Client\Model\ManageResetVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceResetVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceResetVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageResetVpsResponse**](../Model/ManageResetVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStartRescue()`

```php
manageServiceStartRescue($id): \OpenAPI\Client\Model\ManageStartRescueResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStartRescue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStartRescue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageStartRescueResponse**](../Model/ManageStartRescueResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStartVps()`

```php
manageServiceStartVps($id): \OpenAPI\Client\Model\ManageStartVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStartVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStartVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageStartVpsResponse**](../Model/ManageStartVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStopRescue()`

```php
manageServiceStopRescue($id): \OpenAPI\Client\Model\ManageStopRescueResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStopRescue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStopRescue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageStopRescueResponse**](../Model/ManageStopRescueResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStopVps()`

```php
manageServiceStopVps($id): \OpenAPI\Client\Model\ManageStopVpsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStopVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStopVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageStopVpsResponse**](../Model/ManageStopVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceUnarchive()`

```php
manageServiceUnarchive($id): \OpenAPI\Client\Model\ManageUnarchiveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceUnarchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ManageUnarchiveResponse**](../Model/ManageUnarchiveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceUpdateInfo()`

```php
manageServiceUpdateInfo($id, $manage_update_info_request): \OpenAPI\Client\Model\ManageUpdateInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_update_info_request = new \OpenAPI\Client\Model\ManageUpdateInfoRequest(); // \OpenAPI\Client\Model\ManageUpdateInfoRequest

try {
    $result = $apiInstance->manageServiceUpdateInfo($id, $manage_update_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceUpdateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **manage_update_info_request** | [**\OpenAPI\Client\Model\ManageUpdateInfoRequest**](../Model/ManageUpdateInfoRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ManageUpdateInfoResponse**](../Model/ManageUpdateInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
