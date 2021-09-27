# OpenAPI\Client\InternalApi

All URIs are relative to https://api.lagrello.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tenantsCardtoken()**](InternalApi.md#tenantsCardtoken) | **GET** /v1/tenant/cardtoken | Returns token that is used by stripe to save card number.


## `tenantsCardtoken()`

```php
tenantsCardtoken(): string
```

Returns token that is used by stripe to save card number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantsCardtoken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->tenantsCardtoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
