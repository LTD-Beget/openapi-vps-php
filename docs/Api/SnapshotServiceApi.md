# OpenAPI\Client\SnapshotServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**snapshotServiceCreate()**](SnapshotServiceApi.md#snapshotServiceCreate) | **POST** /v1/vps/snapshot |  |
| [**snapshotServiceCreateCalculator()**](SnapshotServiceApi.md#snapshotServiceCreateCalculator) | **POST** /v1/vps/snapshot/calculator |  |
| [**snapshotServiceEdit()**](SnapshotServiceApi.md#snapshotServiceEdit) | **PUT** /v1/vps/snapshot/{id} |  |
| [**snapshotServiceGetAll()**](SnapshotServiceApi.md#snapshotServiceGetAll) | **GET** /v1/vps/snapshot |  |
| [**snapshotServiceGetAllRestores()**](SnapshotServiceApi.md#snapshotServiceGetAllRestores) | **GET** /v1/vps/snapshot/restore |  |
| [**snapshotServiceRemove()**](SnapshotServiceApi.md#snapshotServiceRemove) | **DELETE** /v1/vps/snapshot/{id} |  |
| [**snapshotServiceRestore()**](SnapshotServiceApi.md#snapshotServiceRestore) | **POST** /v1/vps/snapshot/{id}/restore |  |


## `snapshotServiceCreate()`

```php
snapshotServiceCreate($snapshot_create_request): \OpenAPI\Client\Model\SnapshotCreateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snapshot_create_request = new \OpenAPI\Client\Model\SnapshotCreateRequest(); // \OpenAPI\Client\Model\SnapshotCreateRequest

try {
    $result = $apiInstance->snapshotServiceCreate($snapshot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **snapshot_create_request** | [**\OpenAPI\Client\Model\SnapshotCreateRequest**](../Model/SnapshotCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SnapshotCreateResponse**](../Model/SnapshotCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceCreateCalculator()`

```php
snapshotServiceCreateCalculator($snapshot_create_calculator_request): \OpenAPI\Client\Model\SnapshotCreateCalculatorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snapshot_create_calculator_request = new \OpenAPI\Client\Model\SnapshotCreateCalculatorRequest(); // \OpenAPI\Client\Model\SnapshotCreateCalculatorRequest

try {
    $result = $apiInstance->snapshotServiceCreateCalculator($snapshot_create_calculator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceCreateCalculator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **snapshot_create_calculator_request** | [**\OpenAPI\Client\Model\SnapshotCreateCalculatorRequest**](../Model/SnapshotCreateCalculatorRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SnapshotCreateCalculatorResponse**](../Model/SnapshotCreateCalculatorResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceEdit()`

```php
snapshotServiceEdit($id, $snapshot_edit_request): \OpenAPI\Client\Model\SnapshotEditResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$snapshot_edit_request = new \OpenAPI\Client\Model\SnapshotEditRequest(); // \OpenAPI\Client\Model\SnapshotEditRequest

try {
    $result = $apiInstance->snapshotServiceEdit($id, $snapshot_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **snapshot_edit_request** | [**\OpenAPI\Client\Model\SnapshotEditRequest**](../Model/SnapshotEditRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SnapshotEditResponse**](../Model/SnapshotEditResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceGetAll()`

```php
snapshotServiceGetAll(): \OpenAPI\Client\Model\SnapshotGetAllResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->snapshotServiceGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SnapshotGetAllResponse**](../Model/SnapshotGetAllResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceGetAllRestores()`

```php
snapshotServiceGetAllRestores($id): \OpenAPI\Client\Model\SnapshotGetAllRestoresResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->snapshotServiceGetAllRestores($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceGetAllRestores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SnapshotGetAllRestoresResponse**](../Model/SnapshotGetAllRestoresResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceRemove()`

```php
snapshotServiceRemove($id): \OpenAPI\Client\Model\SnapshotRemoveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->snapshotServiceRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SnapshotRemoveResponse**](../Model/SnapshotRemoveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceRestore()`

```php
snapshotServiceRestore($id, $snapshot_restore_request): \OpenAPI\Client\Model\SnapshotRestoreResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$snapshot_restore_request = new \OpenAPI\Client\Model\SnapshotRestoreRequest(); // \OpenAPI\Client\Model\SnapshotRestoreRequest

try {
    $result = $apiInstance->snapshotServiceRestore($id, $snapshot_restore_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **snapshot_restore_request** | [**\OpenAPI\Client\Model\SnapshotRestoreRequest**](../Model/SnapshotRestoreRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SnapshotRestoreResponse**](../Model/SnapshotRestoreResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
