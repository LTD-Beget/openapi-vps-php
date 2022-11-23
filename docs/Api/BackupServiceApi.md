# OpenAPI\Client\BackupServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backupServiceGetAvailableCopies()**](BackupServiceApi.md#backupServiceGetAvailableCopies) | **GET** /v1/vps/backup |  |
| [**backupServiceGetBackupFileList()**](BackupServiceApi.md#backupServiceGetBackupFileList) | **GET** /v1/vps/{id}/backup/{copy_id} |  |
| [**backupServiceGetOrders()**](BackupServiceApi.md#backupServiceGetOrders) | **GET** /v1/vps/backup/orders |  |
| [**backupServiceRestoreFile()**](BackupServiceApi.md#backupServiceRestoreFile) | **POST** /v1/vps/{id}/backup/{copy_id}/file |  |
| [**backupServiceRestoreServer()**](BackupServiceApi.md#backupServiceRestoreServer) | **POST** /v1/vps/{id}/backup/{copy_id}/server |  |


## `backupServiceGetAvailableCopies()`

```php
backupServiceGetAvailableCopies(): \OpenAPI\Client\Model\BackupGetAvailableCopiesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->backupServiceGetAvailableCopies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupServiceApi->backupServiceGetAvailableCopies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BackupGetAvailableCopiesResponse**](../Model/BackupGetAvailableCopiesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupServiceGetBackupFileList()`

```php
backupServiceGetBackupFileList($id, $copy_id, $path): \OpenAPI\Client\Model\BackupGetBackupFileListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$copy_id = 'copy_id_example'; // string
$path = 'path_example'; // string

try {
    $result = $apiInstance->backupServiceGetBackupFileList($id, $copy_id, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupServiceApi->backupServiceGetBackupFileList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **copy_id** | **string**|  | |
| **path** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupGetBackupFileListResponse**](../Model/BackupGetBackupFileListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupServiceGetOrders()`

```php
backupServiceGetOrders($limit, $offset): \OpenAPI\Client\Model\BackupGetOrdersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->backupServiceGetOrders($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupServiceApi->backupServiceGetOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupGetOrdersResponse**](../Model/BackupGetOrdersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupServiceRestoreFile()`

```php
backupServiceRestoreFile($id, $copy_id, $backup_restore_file_request): \OpenAPI\Client\Model\BackupRestoreFileResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$copy_id = 'copy_id_example'; // string
$backup_restore_file_request = new \OpenAPI\Client\Model\BackupRestoreFileRequest(); // \OpenAPI\Client\Model\BackupRestoreFileRequest

try {
    $result = $apiInstance->backupServiceRestoreFile($id, $copy_id, $backup_restore_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupServiceApi->backupServiceRestoreFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **copy_id** | **string**|  | |
| **backup_restore_file_request** | [**\OpenAPI\Client\Model\BackupRestoreFileRequest**](../Model/BackupRestoreFileRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BackupRestoreFileResponse**](../Model/BackupRestoreFileResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backupServiceRestoreServer()`

```php
backupServiceRestoreServer($id, $copy_id, $backup_restore_server_request): \OpenAPI\Client\Model\BackupRestoreServerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$copy_id = 'copy_id_example'; // string
$backup_restore_server_request = new \OpenAPI\Client\Model\BackupRestoreServerRequest(); // \OpenAPI\Client\Model\BackupRestoreServerRequest

try {
    $result = $apiInstance->backupServiceRestoreServer($id, $copy_id, $backup_restore_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupServiceApi->backupServiceRestoreServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **copy_id** | **string**|  | |
| **backup_restore_server_request** | [**\OpenAPI\Client\Model\BackupRestoreServerRequest**](../Model/BackupRestoreServerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BackupRestoreServerResponse**](../Model/BackupRestoreServerResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
