<?php

namespace App\Models;

class Service
{
    public $id;
    public $name;
    public $price;
    public $provider_id;

    public function fromArray(array $data)
    {
        $this->id          = $data['id'] ?? null;
        $this->name        = $data['name'] ?? null;
        $this->price       = $data['price'] ?? null;
        $this->provider_id = $data['provider_id'] ?? null;
    }

    public function toArray()
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'price'       => $this->price,
            'provider_id' => $this->provider_id,
        ];
    }
}
