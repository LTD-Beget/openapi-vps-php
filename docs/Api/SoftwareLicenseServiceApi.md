# OpenAPI\Client\SoftwareLicenseServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**softwareLicenseServiceChangeLicensePlan()**](SoftwareLicenseServiceApi.md#softwareLicenseServiceChangeLicensePlan) | **PATCH** /v1/vps/software/license/{vps_id} |  |
| [**softwareLicenseServiceGetLicenseInfo()**](SoftwareLicenseServiceApi.md#softwareLicenseServiceGetLicenseInfo) | **GET** /v1/vps/software/license |  |


## `softwareLicenseServiceChangeLicensePlan()`

```php
softwareLicenseServiceChangeLicensePlan($vps_id, $software_license_change_license_plan_request): \OpenAPI\Client\Model\SoftwareLicenseChangeLicensePlanResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SoftwareLicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vps_id = 'vps_id_example'; // string
$software_license_change_license_plan_request = new \OpenAPI\Client\Model\SoftwareLicenseChangeLicensePlanRequest(); // \OpenAPI\Client\Model\SoftwareLicenseChangeLicensePlanRequest

try {
    $result = $apiInstance->softwareLicenseServiceChangeLicensePlan($vps_id, $software_license_change_license_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareLicenseServiceApi->softwareLicenseServiceChangeLicensePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vps_id** | **string**|  | |
| **software_license_change_license_plan_request** | [**\OpenAPI\Client\Model\SoftwareLicenseChangeLicensePlanRequest**](../Model/SoftwareLicenseChangeLicensePlanRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SoftwareLicenseChangeLicensePlanResponse**](../Model/SoftwareLicenseChangeLicensePlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `softwareLicenseServiceGetLicenseInfo()`

```php
softwareLicenseServiceGetLicenseInfo($license_id): \OpenAPI\Client\Model\SoftwareLicenseGetLicenseInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SoftwareLicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license_id = 56; // int

try {
    $result = $apiInstance->softwareLicenseServiceGetLicenseInfo($license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareLicenseServiceApi->softwareLicenseServiceGetLicenseInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SoftwareLicenseGetLicenseInfoResponse**](../Model/SoftwareLicenseGetLicenseInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
