<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\RequestOptions;

abstract class AbstractService
{
    use Crud;

    /**
     * @see http://docs.guzzlephp.org/en/stable/
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * The default value to wait until timeout in seconds
     * @var int
     */
    protected $defaultTimeout = 60;

    /**
     * The default resource url
     * @var string
     */
    protected $resource;

    /**
     * The default url to request
     * @var string
     */
    protected $defaultHeaders = [
        'Content-Type' => 'application/json',
        'Accept'       => 'application/json',
    ];

    public function __construct(string $resource)
    {
        // use IoC
        $this->httpClient = new HttpClient([
            'base_uri' => env('API_ENDPOINT', false),
            'defaults' => [
                'headers' => $this->defaultHeaders,
                RequestOptions::TIMEOUT => $this->defaultTimeout
            ]
        ]);

        $this->resource = $resource;
    }
}
