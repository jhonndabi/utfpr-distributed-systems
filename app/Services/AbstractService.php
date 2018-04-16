<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;

abstract class AbstractService implements ServiceInterface
{
    /**
     * @see http://docs.guzzlephp.org/en/stable/
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $apiEndpoint;

    /**
     * The default value to wait until timeout in seconds
     * @var int
     */
    protected $defaultTimeout = 60;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    protected function get($resource, array $options = [])
    {
        return $this->httpClient->request('GET', "{$this->apiEndpoint}/{$resource}", $options);
    }

    public function post($resource, array $options = [])
    {
        return $this->httpClient->request('POST', "{$this->apiEndpoint}/{$resource}", $options);
    }
}
