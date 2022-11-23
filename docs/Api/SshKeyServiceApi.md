# OpenAPI\Client\SshKeyServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sshKeyServiceAdd()**](SshKeyServiceApi.md#sshKeyServiceAdd) | **POST** /v1/vps/sshKey |  |
| [**sshKeyServiceGetAll()**](SshKeyServiceApi.md#sshKeyServiceGetAll) | **GET** /v1/vps/sshKey |  |
| [**sshKeyServiceRemove()**](SshKeyServiceApi.md#sshKeyServiceRemove) | **DELETE** /v1/vps/sshKey/{id} |  |


## `sshKeyServiceAdd()`

```php
sshKeyServiceAdd($ssh_key_add_request): \OpenAPI\Client\Model\SshKeyAddResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_add_request = new \OpenAPI\Client\Model\SshKeyAddRequest(); // \OpenAPI\Client\Model\SshKeyAddRequest

try {
    $result = $apiInstance->sshKeyServiceAdd($ssh_key_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssh_key_add_request** | [**\OpenAPI\Client\Model\SshKeyAddRequest**](../Model/SshKeyAddRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SshKeyAddResponse**](../Model/SshKeyAddResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshKeyServiceGetAll()`

```php
sshKeyServiceGetAll(): \OpenAPI\Client\Model\SshKeyGetAllResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sshKeyServiceGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SshKeyGetAllResponse**](../Model/SshKeyGetAllResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshKeyServiceRemove()`

```php
sshKeyServiceRemove($id, $force): \OpenAPI\Client\Model\SshKeyRemoveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$force = True; // bool

try {
    $result = $apiInstance->sshKeyServiceRemove($id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **force** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SshKeyRemoveResponse**](../Model/SshKeyRemoveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
