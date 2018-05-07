<?php

namespace App\Services;

use Guzzle\Http\Message\Response;
use App\Models\Entity;

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

    public function create(Entity $entity): Response
    {
        $request = $this->httpClient->post($this->resource);
        $request->setBody($entity->toJson());

        return $request->send();
    }

    public function update(int $id, Entity $entity): Response
    {
        $request = $this->httpClient->put("{$this->resource}/{$id}");
        $request->setBody($entity->toJson());

        return $request->send();
    }

    public function remove(int $id): Response
    {
        $request = $this->httpClient->delete("{$this->resource}/{$id}");

        return $request->send();
    }
}
