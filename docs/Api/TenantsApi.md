# OpenAPI\Client\TenantsApi

All URIs are relative to https://api.lagrello.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tenantUpdate()**](TenantsApi.md#tenantUpdate) | **PATCH** /v1/tenant | Updates tenant information
[**tenantsActivate()**](TenantsApi.md#tenantsActivate) | **POST** /v1/tenant/activate | Activates the tenant, checks that all necessary information to activate a tenant is included
[**tenantsCreate()**](TenantsApi.md#tenantsCreate) | **POST** /v1/tenant | Creates new tenant
[**tenantsCreate_0()**](TenantsApi.md#tenantsCreate_0) | **DELETE** /v1/tenant | Deletes tenant caller is part of, will send verification email before deleting tenant
[**tenantsGet()**](TenantsApi.md#tenantsGet) | **GET** /v1/tenant | Returns the tenant information the caller is part of


## `tenantUpdate()`

```php
tenantUpdate($update_tenant_request): \OpenAPI\Client\Model\Tenant
```

Updates tenant information

This endpoint is used to update certain information about your tenant. For example if you want to update your tenant's callback URL you will do that here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_tenant_request = new \OpenAPI\Client\Model\UpdateTenantRequest(); // \OpenAPI\Client\Model\UpdateTenantRequest

try {
    $result = $apiInstance->tenantUpdate($update_tenant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_tenant_request** | [**\OpenAPI\Client\Model\UpdateTenantRequest**](../Model/UpdateTenantRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantsActivate()`

```php
tenantsActivate($activate_tenant_request): \OpenAPI\Client\Model\Tenant
```

Activates the tenant, checks that all necessary information to activate a tenant is included

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activate_tenant_request = new \OpenAPI\Client\Model\ActivateTenantRequest(); // \OpenAPI\Client\Model\ActivateTenantRequest

try {
    $result = $apiInstance->tenantsActivate($activate_tenant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantsActivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activate_tenant_request** | [**\OpenAPI\Client\Model\ActivateTenantRequest**](../Model/ActivateTenantRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantsCreate()`

```php
tenantsCreate($create_tenant_request): \OpenAPI\Client\Model\Tenant
```

Creates new tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_tenant_request = new \OpenAPI\Client\Model\CreateTenantRequest(); // \OpenAPI\Client\Model\CreateTenantRequest

try {
    $result = $apiInstance->tenantsCreate($create_tenant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_tenant_request** | [**\OpenAPI\Client\Model\CreateTenantRequest**](../Model/CreateTenantRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantsCreate_0()`

```php
tenantsCreate_0(): \OpenAPI\Client\Model\Tenant
```

Deletes tenant caller is part of, will send verification email before deleting tenant

This endpoint will delete your tenant. Will send an email to the admin email address of the tenant confirming that you want to delete your tenant before deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantsCreate_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantsCreate_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantsGet()`

```php
tenantsGet(): \OpenAPI\Client\Model\Tenant
```

Returns the tenant information the caller is part of

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
