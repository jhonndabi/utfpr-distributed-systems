<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

abstract class AbstractService
{
    const DATABASE_API_VERSION = '/api/v1';
    const DATABASE_API_EMAIL = 'team@stark.com';
    const DATABASE_API_TOKEN = 'dfJ2wsUU9kwSRnNk5aww';

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
        $this->httpClient = new HttpClient();
        $this->resource = $resource;
    }

    public function find($id): Response
    {
        $request = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}/{$id}"));

        return $request->send();
    }

    public function findAll()
    {
        $options = $this->defaultOptions();
        $response = $this->httpClient->get($this->databaseApiUrl("/{$this->resource}"), $options);

        return $this->parseResponseToJson($response);
    }

    public function create(string $body)
    {
        $response = $this->httpClient->post($this->databaseApiUrl("/{$this->resource}"), [
            'body' => json_encode($body)
        ]);

        return $this->parseResponseToJson($response);
    }

    public function update(int $id, string $body): Response
    {
        $request = $this->httpClient->put(self::DATABASE_API_VERSION  . "/{$this->resource}/{$id}");
        $request->setBody($body);

        return $request->send();
    }

    public function remove(int $id): Response
    {
        $request = $this->httpClient->delete(self::DATABASE_API_VERSION  . "/{$this->resource}/{$id}");

        return $request->send();
    }

    private function parseResponseToJson(Response $response)
    {
        $data = $response->getBody()->getContents();
        return json_decode($data, true);
    }

    private function defaultOptions() {
        return [
            'query' => [
                'user_email' => self::DATABASE_API_EMAIL,
                'user_token' => self::DATABASE_API_TOKEN,
            ],
            'headers' => $this->defaultHeaders,
            RequestOptions::TIMEOUT => $this->defaultTimeout
        ];
    }

    private function databaseApiUrl($segment = '') {
        return env('API_ENDPOINT') . self::DATABASE_API_VERSION . $segment;
    }
}
