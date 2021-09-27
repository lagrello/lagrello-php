# OpenAPI\Client\AuthApi

All URIs are relative to https://api.lagrello.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersEmailAuth()**](AuthApi.md#usersEmailAuth) | **GET** /v1/users/email | Gives back user data for the magic link token
[**usersEmailSend()**](AuthApi.md#usersEmailSend) | **POST** /v1/users/{userId}/email | This endpoint will be used when you want to send a magic login link to specified user
[**usersTotpAuth()**](AuthApi.md#usersTotpAuth) | **GET** /v1/users/{userId}/totp | Verify users TOTP token
[**usersTotpToggle()**](AuthApi.md#usersTotpToggle) | **POST** /v1/users/{userId}/totp | Enables or disables Time-based One-Time Password authentication method for specified user


## `usersEmailAuth()`

```php
usersEmailAuth($payload): \OpenAPI\Client\Model\User
```

Gives back user data for the magic link token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = 'payload_example'; // string | The magic link token the user sent

try {
    $result = $apiInstance->usersEmailAuth($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersEmailAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | **string**| The magic link token the user sent |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersEmailSend()`

```php
usersEmailSend($user_id)
```

This endpoint will be used when you want to send a magic login link to specified user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Id of the user you want to send magic link to

try {
    $apiInstance->usersEmailSend($user_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersEmailSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user you want to send magic link to |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTotpAuth()`

```php
usersTotpAuth($user_id, $payload): \OpenAPI\Client\Model\User
```

Verify users TOTP token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Id of the user you want to verify TOTP code for
$payload = 'payload_example'; // string | The totp token the user sent

try {
    $result = $apiInstance->usersTotpAuth($user_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersTotpAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user you want to verify TOTP code for |
 **payload** | **string**| The totp token the user sent |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTotpToggle()`

```php
usersTotpToggle($user_id, $totp_enable_request): \OpenAPI\Client\Model\TotpEnableResponse
```

Enables or disables Time-based One-Time Password authentication method for specified user

When you want your users to be able to use TOTP authentication you need to send enable set to true as payload to this endpoint. To turn off TOTP set enable to false. When enabling you will recieve the secret key and a QR code link. The QR code you need to show your user for them to scan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Id of the user you want to enable TOTP for
$totp_enable_request = new \OpenAPI\Client\Model\TotpEnableRequest(); // \OpenAPI\Client\Model\TotpEnableRequest

try {
    $result = $apiInstance->usersTotpToggle($user_id, $totp_enable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersTotpToggle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user you want to enable TOTP for |
 **totp_enable_request** | [**\OpenAPI\Client\Model\TotpEnableRequest**](../Model/TotpEnableRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TotpEnableResponse**](../Model/TotpEnableResponse.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
