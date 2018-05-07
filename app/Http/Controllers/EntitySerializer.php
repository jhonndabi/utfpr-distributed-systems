<?php

namespace App\Controllers;

use App\Serializers\EntitySerializer;

trait EntitySerializer
{
    private $serializer;

    private function getHydrator(): EntitySerializer
    {
        if (null !== $this->serializer) {
            $this->serializer = new EntitySerializer;
        }

        return $this->serializer;
    }

    public function hydrateEntity(array $data, Entity $entity): Entity
    {
        return $this->serializer->hydrate($data, $entity);
    }

    public function entityToArray(Entity $entity): array
    {
        return $this->serializer->toArray($entity);
    }

    public function entityToJson(): string
    {
        return $this->serializer->toJson($entity);
    }
}
