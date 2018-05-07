<?php

namespace App\Services;

use Guzzle\Http\Message\Response;

trait Crud
{
    public function find($id): Response
    {
        $request = $this->httpClient->get("{$this->resource}/{$id}");

        return $request->send();
    }

    public function findAll(): Response
    {
        $request = $this->httpClient->get($this->resource);

        return $request->send();
    }

    public function create(string $body): Response
    {
        $request = $this->httpClient->post($this->resource);
        $request->setBody($body);

        return $request->send();
    }

    public function update(int $id, string $body): Response
    {
        $request = $this->httpClient->put("{$this->resource}/{$id}");
        $request->setBody($body);

        return $request->send();
    }

    public function remove(int $id): Response
    {
        $request = $this->httpClient->delete("{$this->resource}/{$id}");

        return $request->send();
    }
}
