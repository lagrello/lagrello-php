# lagrello

API specification for Lagrello, a simple to use authentication service


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/lagrello/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.lagrello.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**usersEmailAuth**](docs/Api/AuthApi.md#usersemailauth) | **GET** /v1/users/email | Gives back user data for the magic link token
*AuthApi* | [**usersEmailSend**](docs/Api/AuthApi.md#usersemailsend) | **POST** /v1/users/{userId}/email | This endpoint will be used when you want to send a magic login link to specified user
*AuthApi* | [**usersTotpAuth**](docs/Api/AuthApi.md#userstotpauth) | **GET** /v1/users/{userId}/totp | Verify users TOTP token
*AuthApi* | [**usersTotpToggle**](docs/Api/AuthApi.md#userstotptoggle) | **POST** /v1/users/{userId}/totp | Enables or disables Time-based One-Time Password authentication method for specified user
*ImagesApi* | [**imagesTotp**](docs/Api/ImagesApi.md#imagestotp) | **GET** /v1/images/totp | Returns a generated QR code
*InternalApi* | [**tenantsCardtoken**](docs/Api/InternalApi.md#tenantscardtoken) | **GET** /v1/tenant/cardtoken | Returns token that is used by stripe to save card number.
*TenantsApi* | [**tenantUpdate**](docs/Api/TenantsApi.md#tenantupdate) | **PATCH** /v1/tenant | Updates tenant information
*TenantsApi* | [**tenantsActivate**](docs/Api/TenantsApi.md#tenantsactivate) | **POST** /v1/tenant/activate | Activates the tenant, checks that all necessary information to activate a tenant is included
*TenantsApi* | [**tenantsCreate**](docs/Api/TenantsApi.md#tenantscreate) | **POST** /v1/tenant | Creates new tenant
*TenantsApi* | [**tenantsCreate_0**](docs/Api/TenantsApi.md#tenantscreate_0) | **DELETE** /v1/tenant | Deletes tenant caller is part of, will send verification email before deleting tenant
*TenantsApi* | [**tenantsGet**](docs/Api/TenantsApi.md#tenantsget) | **GET** /v1/tenant | Returns the tenant information the caller is part of
*TokensApi* | [**tokensCreate**](docs/Api/TokensApi.md#tokenscreate) | **POST** /v1/tokens | Creates new token
*TokensApi* | [**tokensDelete**](docs/Api/TokensApi.md#tokensdelete) | **DELETE** /v1/tokens/{id} | Deletes specifed access token
*TokensApi* | [**tokensList**](docs/Api/TokensApi.md#tokenslist) | **GET** /v1/tokens | Returns a list of all active tokens in tenant
*UsersApi* | [**usersCreate**](docs/Api/UsersApi.md#userscreate) | **POST** /v1/users | Creates a user in tenant, tenant is determined from the token
*UsersApi* | [**usersDelete**](docs/Api/UsersApi.md#usersdelete) | **DELETE** /v1/users/{userId} | Deletes specified user
*UsersApi* | [**usersGet**](docs/Api/UsersApi.md#usersget) | **GET** /v1/users/{userId} | Returns specified user
*UsersApi* | [**usersUpdate**](docs/Api/UsersApi.md#usersupdate) | **PATCH** /v1/users/{userId} | Updates specified user

## Models

- [ActivateTenantRequest](docs/Model/ActivateTenantRequest.md)
- [CreateTenantRequest](docs/Model/CreateTenantRequest.md)
- [CreateTokenRequest](docs/Model/CreateTokenRequest.md)
- [CreateUserRequest](docs/Model/CreateUserRequest.md)
- [Error](docs/Model/Error.md)
- [Paging](docs/Model/Paging.md)
- [Tenant](docs/Model/Tenant.md)
- [TenantCompanyInfo](docs/Model/TenantCompanyInfo.md)
- [Token](docs/Model/Token.md)
- [TokenList](docs/Model/TokenList.md)
- [TotpEnableRequest](docs/Model/TotpEnableRequest.md)
- [TotpEnableResponse](docs/Model/TotpEnableResponse.md)
- [UpdateTenantRequest](docs/Model/UpdateTenantRequest.md)
- [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
- [User](docs/Model/User.md)

## Authorization

### token

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@lagrello.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
