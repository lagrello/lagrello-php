<?php
/**
 * ImagesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lagrello API
 *
 * API specification for Lagrello, a simple to use authentication service
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@lagrello.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ImagesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImagesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation imagesTotp
     *
     * Returns a generated QR code
     *
     * @param  string $tenant_name The company name you your users to see in their TOTP application (optional)
     * @param  string $user_id The userId of the user you want to create the TOTP QR image for (optional)
     * @param  string $user_secret The TOTP secret for the specified user (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject|\OpenAPI\Client\Model\Error
     */
    public function imagesTotp($tenant_name = null, $user_id = null, $user_secret = null)
    {
        list($response) = $this->imagesTotpWithHttpInfo($tenant_name, $user_id, $user_secret);
        return $response;
    }

    /**
     * Operation imagesTotpWithHttpInfo
     *
     * Returns a generated QR code
     *
     * @param  string $tenant_name The company name you your users to see in their TOTP application (optional)
     * @param  string $user_id The userId of the user you want to create the TOTP QR image for (optional)
     * @param  string $user_secret The TOTP secret for the specified user (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject|\OpenAPI\Client\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function imagesTotpWithHttpInfo($tenant_name = null, $user_id = null, $user_secret = null)
    {
        $request = $this->imagesTotpRequest($tenant_name, $user_id, $user_secret);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation imagesTotpAsync
     *
     * Returns a generated QR code
     *
     * @param  string $tenant_name The company name you your users to see in their TOTP application (optional)
     * @param  string $user_id The userId of the user you want to create the TOTP QR image for (optional)
     * @param  string $user_secret The TOTP secret for the specified user (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imagesTotpAsync($tenant_name = null, $user_id = null, $user_secret = null)
    {
        return $this->imagesTotpAsyncWithHttpInfo($tenant_name, $user_id, $user_secret)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation imagesTotpAsyncWithHttpInfo
     *
     * Returns a generated QR code
     *
     * @param  string $tenant_name The company name you your users to see in their TOTP application (optional)
     * @param  string $user_id The userId of the user you want to create the TOTP QR image for (optional)
     * @param  string $user_secret The TOTP secret for the specified user (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function imagesTotpAsyncWithHttpInfo($tenant_name = null, $user_id = null, $user_secret = null)
    {
        $returnType = '\SplFileObject';
        $request = $this->imagesTotpRequest($tenant_name, $user_id, $user_secret);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'imagesTotp'
     *
     * @param  string $tenant_name The company name you your users to see in their TOTP application (optional)
     * @param  string $user_id The userId of the user you want to create the TOTP QR image for (optional)
     * @param  string $user_secret The TOTP secret for the specified user (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function imagesTotpRequest($tenant_name = null, $user_id = null, $user_secret = null)
    {
        if ($tenant_name !== null && $tenant_name > 40) {
            throw new \InvalidArgumentException('invalid value for "$tenant_name" when calling ImagesApi.imagesTotp, must be smaller than or equal to 40.');
        }
        if ($tenant_name !== null && $tenant_name < 1) {
            throw new \InvalidArgumentException('invalid value for "$tenant_name" when calling ImagesApi.imagesTotp, must be bigger than or equal to 1.');
        }

        if ($user_id !== null && $user_id > 128) {
            throw new \InvalidArgumentException('invalid value for "$user_id" when calling ImagesApi.imagesTotp, must be smaller than or equal to 128.');
        }
        if ($user_id !== null && $user_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$user_id" when calling ImagesApi.imagesTotp, must be bigger than or equal to 1.');
        }

        if ($user_secret !== null && $user_secret > 128) {
            throw new \InvalidArgumentException('invalid value for "$user_secret" when calling ImagesApi.imagesTotp, must be smaller than or equal to 128.');
        }
        if ($user_secret !== null && $user_secret < 1) {
            throw new \InvalidArgumentException('invalid value for "$user_secret" when calling ImagesApi.imagesTotp, must be bigger than or equal to 1.');
        }


        $resourcePath = '/v1/images/totp';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($tenant_name)) {
            $tenant_name = ObjectSerializer::serializeCollection($tenant_name, '', true);
        }
        if ($tenant_name !== null) {
            $queryParams['tenantName'] = $tenant_name;
        }
        // query params
        if (is_array($user_id)) {
            $user_id = ObjectSerializer::serializeCollection($user_id, '', true);
        }
        if ($user_id !== null) {
            $queryParams['userId'] = $user_id;
        }
        // query params
        if (is_array($user_secret)) {
            $user_secret = ObjectSerializer::serializeCollection($user_secret, '', true);
        }
        if ($user_secret !== null) {
            $queryParams['userSecret'] = $user_secret;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}