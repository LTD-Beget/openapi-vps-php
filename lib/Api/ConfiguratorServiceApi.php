<?php
/**
 * ConfiguratorServiceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Облачных серверов
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.4.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ConfiguratorServiceApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfiguratorServiceApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'configuratorServiceGetCalculation' => [
            'application/json',
        ],
        'configuratorServiceGetConfiguratorInfo' => [
            'application/json',
        ],
    ];

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
    public function setHostIndex($hostIndex): void
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
     * Operation configuratorServiceGetCalculation
     *
     * @param  int $params_cpu_count params_cpu_count (optional)
     * @param  int $params_disk_size params_disk_size (optional)
     * @param  int $params_memory params_memory (optional)
     * @param  string $vps_id vps_id (optional)
     * @param  int $software_id software_id (optional)
     * @param  string $snapshot_id snapshot_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetCalculation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ConfiguratorGetCalculationResponse
     */
    public function configuratorServiceGetCalculation($params_cpu_count = null, $params_disk_size = null, $params_memory = null, $vps_id = null, $software_id = null, $snapshot_id = null, string $contentType = self::contentTypes['configuratorServiceGetCalculation'][0])
    {
        list($response) = $this->configuratorServiceGetCalculationWithHttpInfo($params_cpu_count, $params_disk_size, $params_memory, $vps_id, $software_id, $snapshot_id, $contentType);
        return $response;
    }

    /**
     * Operation configuratorServiceGetCalculationWithHttpInfo
     *
     * @param  int $params_cpu_count (optional)
     * @param  int $params_disk_size (optional)
     * @param  int $params_memory (optional)
     * @param  string $vps_id (optional)
     * @param  int $software_id (optional)
     * @param  string $snapshot_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetCalculation'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ConfiguratorGetCalculationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function configuratorServiceGetCalculationWithHttpInfo($params_cpu_count = null, $params_disk_size = null, $params_memory = null, $vps_id = null, $software_id = null, $snapshot_id = null, string $contentType = self::contentTypes['configuratorServiceGetCalculation'][0])
    {
        $request = $this->configuratorServiceGetCalculationRequest($params_cpu_count, $params_disk_size, $params_memory, $vps_id, $software_id, $snapshot_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation configuratorServiceGetCalculationAsync
     *
     * @param  int $params_cpu_count (optional)
     * @param  int $params_disk_size (optional)
     * @param  int $params_memory (optional)
     * @param  string $vps_id (optional)
     * @param  int $software_id (optional)
     * @param  string $snapshot_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetCalculation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function configuratorServiceGetCalculationAsync($params_cpu_count = null, $params_disk_size = null, $params_memory = null, $vps_id = null, $software_id = null, $snapshot_id = null, string $contentType = self::contentTypes['configuratorServiceGetCalculation'][0])
    {
        return $this->configuratorServiceGetCalculationAsyncWithHttpInfo($params_cpu_count, $params_disk_size, $params_memory, $vps_id, $software_id, $snapshot_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation configuratorServiceGetCalculationAsyncWithHttpInfo
     *
     * @param  int $params_cpu_count (optional)
     * @param  int $params_disk_size (optional)
     * @param  int $params_memory (optional)
     * @param  string $vps_id (optional)
     * @param  int $software_id (optional)
     * @param  string $snapshot_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetCalculation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function configuratorServiceGetCalculationAsyncWithHttpInfo($params_cpu_count = null, $params_disk_size = null, $params_memory = null, $vps_id = null, $software_id = null, $snapshot_id = null, string $contentType = self::contentTypes['configuratorServiceGetCalculation'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ConfiguratorGetCalculationResponse';
        $request = $this->configuratorServiceGetCalculationRequest($params_cpu_count, $params_disk_size, $params_memory, $vps_id, $software_id, $snapshot_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'configuratorServiceGetCalculation'
     *
     * @param  int $params_cpu_count (optional)
     * @param  int $params_disk_size (optional)
     * @param  int $params_memory (optional)
     * @param  string $vps_id (optional)
     * @param  int $software_id (optional)
     * @param  string $snapshot_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetCalculation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function configuratorServiceGetCalculationRequest($params_cpu_count = null, $params_disk_size = null, $params_memory = null, $vps_id = null, $software_id = null, $snapshot_id = null, string $contentType = self::contentTypes['configuratorServiceGetCalculation'][0])
    {








        $resourcePath = '/v1/vps/configurator/calculation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $params_cpu_count,
            'params.cpu_count', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $params_disk_size,
            'params.disk_size', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $params_memory,
            'params.memory', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $vps_id,
            'vps_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $software_id,
            'software_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $snapshot_id,
            'snapshot_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation configuratorServiceGetConfiguratorInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetConfiguratorInfo'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse
     */
    public function configuratorServiceGetConfiguratorInfo(string $contentType = self::contentTypes['configuratorServiceGetConfiguratorInfo'][0])
    {
        list($response) = $this->configuratorServiceGetConfiguratorInfoWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation configuratorServiceGetConfiguratorInfoWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetConfiguratorInfo'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function configuratorServiceGetConfiguratorInfoWithHttpInfo(string $contentType = self::contentTypes['configuratorServiceGetConfiguratorInfo'][0])
    {
        $request = $this->configuratorServiceGetConfiguratorInfoRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation configuratorServiceGetConfiguratorInfoAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetConfiguratorInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function configuratorServiceGetConfiguratorInfoAsync(string $contentType = self::contentTypes['configuratorServiceGetConfiguratorInfo'][0])
    {
        return $this->configuratorServiceGetConfiguratorInfoAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation configuratorServiceGetConfiguratorInfoAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetConfiguratorInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function configuratorServiceGetConfiguratorInfoAsyncWithHttpInfo(string $contentType = self::contentTypes['configuratorServiceGetConfiguratorInfo'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ConfiguratorGetConfiguratorInfoResponse';
        $request = $this->configuratorServiceGetConfiguratorInfoRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'configuratorServiceGetConfiguratorInfo'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['configuratorServiceGetConfiguratorInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function configuratorServiceGetConfiguratorInfoRequest(string $contentType = self::contentTypes['configuratorServiceGetConfiguratorInfo'][0])
    {


        $resourcePath = '/v1/vps/configurator/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
