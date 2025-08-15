# OpenAPI\Client\ConfiguratorServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**configuratorServiceGetCalculation()**](ConfiguratorServiceApi.md#configuratorServiceGetCalculation) | **GET** /v1/vps/configurator/calculation |  |
| [**configuratorServiceGetConfiguratorInfo()**](ConfiguratorServiceApi.md#configuratorServiceGetConfiguratorInfo) | **GET** /v1/vps/configurator/info |  |


## `configuratorServiceGetCalculation()`

```php
configuratorServiceGetCalculation($params_cpu_count, $params_disk_size, $params_memory, $region, $vps_id, $software_id, $snapshot_id, $image_id, $configuration_group): \OpenAPI\Client\Model\ConfiguratorGetCalculationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params_cpu_count = 56; // int
$params_disk_size = 56; // int
$params_memory = 56; // int
$region = 'region_example'; // string
$vps_id = 'vps_id_example'; // string
$software_id = 56; // int
$snapshot_id = 'snapshot_id_example'; // string
$image_id = 'image_id_example'; // string
$configuration_group = 'configuration_group_example'; // string

try {
    $result = $apiInstance->configuratorServiceGetCalculation($params_cpu_count, $params_disk_size, $params_memory, $region, $vps_id, $software_id, $snapshot_id, $image_id, $configuration_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorServiceApi->configuratorServiceGetCalculation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params_cpu_count** | **int**|  | [optional] |
| **params_disk_size** | **int**|  | [optional] |
| **params_memory** | **int**|  | [optional] |
| **region** | **string**|  | [optional] |
| **vps_id** | **string**|  | [optional] |
| **software_id** | **int**|  | [optional] |
| **snapshot_id** | **string**|  | [optional] |
| **image_id** | **string**|  | [optional] |
| **configuration_group** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse**](../Model/ConfiguratorGetCalculationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configuratorServiceGetConfiguratorInfo()`

```php
configuratorServiceGetConfiguratorInfo($region, $configuration_group): \OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = 'region_example'; // string
$configuration_group = 'configuration_group_example'; // string

try {
    $result = $apiInstance->configuratorServiceGetConfiguratorInfo($region, $configuration_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorServiceApi->configuratorServiceGetConfiguratorInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region** | **string**|  | [optional] |
| **configuration_group** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse**](../Model/ConfiguratorGetConfiguratorInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
