# OpenAPI\Client\NetworkServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkServiceCreatePrivateNetwork()**](NetworkServiceApi.md#networkServiceCreatePrivateNetwork) | **POST** /v1/vps/private-network |  |
| [**networkServiceGetNetworkInfo()**](NetworkServiceApi.md#networkServiceGetNetworkInfo) | **GET** /v1/vps/network |  |
| [**networkServiceOrderIpAddress()**](NetworkServiceApi.md#networkServiceOrderIpAddress) | **POST** /v1/vps/network |  |
| [**networkServiceRemoveIpAddress()**](NetworkServiceApi.md#networkServiceRemoveIpAddress) | **DELETE** /v1/vps/network/{ip_address} |  |
| [**networkServiceRemovePrivateNetwork()**](NetworkServiceApi.md#networkServiceRemovePrivateNetwork) | **DELETE** /v1/vps/private-network/{network_id} |  |
| [**networkServiceSuggestPrivateAddress()**](NetworkServiceApi.md#networkServiceSuggestPrivateAddress) | **POST** /v1/vps/private-network/{network_id}/suggested-address |  |


## `networkServiceCreatePrivateNetwork()`

```php
networkServiceCreatePrivateNetwork($network_create_private_network_request): \OpenAPI\Client\Model\NetworkCreatePrivateNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_create_private_network_request = new \OpenAPI\Client\Model\NetworkCreatePrivateNetworkRequest(); // \OpenAPI\Client\Model\NetworkCreatePrivateNetworkRequest

try {
    $result = $apiInstance->networkServiceCreatePrivateNetwork($network_create_private_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceCreatePrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_create_private_network_request** | [**\OpenAPI\Client\Model\NetworkCreatePrivateNetworkRequest**](../Model/NetworkCreatePrivateNetworkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkCreatePrivateNetworkResponse**](../Model/NetworkCreatePrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkServiceGetNetworkInfo()`

```php
networkServiceGetNetworkInfo($filter): \OpenAPI\Client\Model\NetworkGetNetworkInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->networkServiceGetNetworkInfo($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceGetNetworkInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NetworkGetNetworkInfoResponse**](../Model/NetworkGetNetworkInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkServiceOrderIpAddress()`

```php
networkServiceOrderIpAddress($network_order_ip_address_request): \OpenAPI\Client\Model\NetworkOrderIpAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_order_ip_address_request = new \OpenAPI\Client\Model\NetworkOrderIpAddressRequest(); // \OpenAPI\Client\Model\NetworkOrderIpAddressRequest

try {
    $result = $apiInstance->networkServiceOrderIpAddress($network_order_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceOrderIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_order_ip_address_request** | [**\OpenAPI\Client\Model\NetworkOrderIpAddressRequest**](../Model/NetworkOrderIpAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkOrderIpAddressResponse**](../Model/NetworkOrderIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkServiceRemoveIpAddress()`

```php
networkServiceRemoveIpAddress($ip_address): \OpenAPI\Client\Model\NetworkRemoveIpAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address = 'ip_address_example'; // string

try {
    $result = $apiInstance->networkServiceRemoveIpAddress($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceRemoveIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkRemoveIpAddressResponse**](../Model/NetworkRemoveIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkServiceRemovePrivateNetwork()`

```php
networkServiceRemovePrivateNetwork($network_id): \OpenAPI\Client\Model\NetworkRemovePrivateNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string

try {
    $result = $apiInstance->networkServiceRemovePrivateNetwork($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceRemovePrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkRemovePrivateNetworkResponse**](../Model/NetworkRemovePrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkServiceSuggestPrivateAddress()`

```php
networkServiceSuggestPrivateAddress($network_id, $network_suggest_private_address_request): \OpenAPI\Client\Model\NetworkSuggestPrivateAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = 'network_id_example'; // string
$network_suggest_private_address_request = new \OpenAPI\Client\Model\NetworkSuggestPrivateAddressRequest(); // \OpenAPI\Client\Model\NetworkSuggestPrivateAddressRequest

try {
    $result = $apiInstance->networkServiceSuggestPrivateAddress($network_id, $network_suggest_private_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkServiceApi->networkServiceSuggestPrivateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_id** | **string**|  | |
| **network_suggest_private_address_request** | [**\OpenAPI\Client\Model\NetworkSuggestPrivateAddressRequest**](../Model/NetworkSuggestPrivateAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkSuggestPrivateAddressResponse**](../Model/NetworkSuggestPrivateAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
