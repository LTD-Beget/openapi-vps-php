# OpenAPI\Client\MarketplaceServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceServiceGetSoftwareList()**](MarketplaceServiceApi.md#marketplaceServiceGetSoftwareList) | **GET** /v1/vps/marketplace/software/list |  |


## `marketplaceServiceGetSoftwareList()`

```php
marketplaceServiceGetSoftwareList(): \OpenAPI\Client\Model\MarketplaceGetSoftwareListResponse
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

try {
    $result = $apiInstance->marketplaceServiceGetSoftwareList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceServiceApi->marketplaceServiceGetSoftwareList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
