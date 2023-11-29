# OpenAPI\Client\MarketplaceServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceServiceGetSoftwareInfo()**](MarketplaceServiceApi.md#marketplaceServiceGetSoftwareInfo) | **GET** /v1/vps/marketplace/software/{name}/{version} |  |
| [**marketplaceServiceGetSoftwareList()**](MarketplaceServiceApi.md#marketplaceServiceGetSoftwareList) | **GET** /v1/vps/marketplace/software/list |  |


## `marketplaceServiceGetSoftwareInfo()`

```php
marketplaceServiceGetSoftwareInfo($name, $version): \OpenAPI\Client\Model\MarketplaceGetSoftwareInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketplaceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->marketplaceServiceGetSoftwareInfo($name, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceServiceApi->marketplaceServiceGetSoftwareInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **version** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceGetSoftwareInfoResponse**](../Model/MarketplaceGetSoftwareInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceServiceGetSoftwareList()`

```php
marketplaceServiceGetSoftwareList($category_name, $display_name, $is_pinned): \OpenAPI\Client\Model\MarketplaceGetSoftwareListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MarketplaceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_name = 'category_name_example'; // string
$display_name = 'display_name_example'; // string
$is_pinned = True; // bool

try {
    $result = $apiInstance->marketplaceServiceGetSoftwareList($category_name, $display_name, $is_pinned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceServiceApi->marketplaceServiceGetSoftwareList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_name** | **string**|  | [optional] |
| **display_name** | **string**|  | [optional] |
| **is_pinned** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketplaceGetSoftwareListResponse**](../Model/MarketplaceGetSoftwareListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
