<?php

namespace App\Serializers;

use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;

class EntitySerializer
{
    private $hydrator;

    public function __construct()
    {
        $this->hydrator = new ClassMethodsHydrator;
    }

    public function hydrate(array $data, &$object)
    {
        $this->hydrator->hydrate($data, $object);
    }

    public function toArray($object)
    {
        return $this->hydrator->extract($object);
    }

    public function toJson($object)
    {
        return json_encode($this->toArray($object), true);
    }
}
