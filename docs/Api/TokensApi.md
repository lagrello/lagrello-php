# OpenAPI\Client\TokensApi

All URIs are relative to https://api.lagrello.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokensCreate()**](TokensApi.md#tokensCreate) | **POST** /v1/tokens | Creates new token
[**tokensDelete()**](TokensApi.md#tokensDelete) | **DELETE** /v1/tokens/{id} | Deletes specifed access token
[**tokensList()**](TokensApi.md#tokensList) | **GET** /v1/tokens | Returns a list of all active tokens in tenant


## `tokensCreate()`

```php
tokensCreate($create_token_request): \OpenAPI\Client\Model\Token
```

Creates new token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_token_request = new \OpenAPI\Client\Model\CreateTokenRequest(); // \OpenAPI\Client\Model\CreateTokenRequest

try {
    $result = $apiInstance->tokensCreate($create_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_token_request** | [**\OpenAPI\Client\Model\CreateTokenRequest**](../Model/CreateTokenRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensDelete()`

```php
tokensDelete($token_id)
```

Deletes specifed access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = ffd12fb4-da5b-4751-a9f6-d3214b418139; // string | Id of the token you want to delete

try {
    $apiInstance->tokensDelete($token_id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| Id of the token you want to delete |

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

## `tokensList()`

```php
tokensList($size, $page): \OpenAPI\Client\Model\TokenList
```

Returns a list of all active tokens in tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size = 56; // int | Maximum of results per page
$page = 56; // int | The page you want to see

try {
    $result = $apiInstance->tokensList($size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| Maximum of results per page | [optional]
 **page** | **int**| The page you want to see | [optional]

### Return type

[**\OpenAPI\Client\Model\TokenList**](../Model/TokenList.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
