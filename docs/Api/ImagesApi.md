# OpenAPI\Client\ImagesApi

All URIs are relative to https://api.lagrello.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**imagesTotp()**](ImagesApi.md#imagesTotp) | **GET** /v1/images/totp | Returns a generated QR code


## `imagesTotp()`

```php
imagesTotp($tenant_name, $user_id, $user_secret): \SplFileObject
```

Returns a generated QR code

This endpoint does not do any lookups of any sort. It will just generate a QR code from the parameters supplied to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_name = 'tenant_name_example'; // string | The company name you your users to see in their TOTP application
$user_id = 'user_id_example'; // string | The userId of the user you want to create the TOTP QR image for
$user_secret = 'user_secret_example'; // string | The TOTP secret for the specified user

try {
    $result = $apiInstance->imagesTotp($tenant_name, $user_id, $user_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesTotp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**| The company name you your users to see in their TOTP application | [optional]
 **user_id** | **string**| The userId of the user you want to create the TOTP QR image for | [optional]
 **user_secret** | **string**| The TOTP secret for the specified user | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
