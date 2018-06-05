<?php

namespace App\Models;

class Order
{
    public $event_id;
    public $provider_id;
    public $quantity;
    public $price;
    public $status;

    public function fromArray(array $data)
    {
        $this->event_id    = $data['event_id'] ?? null;
        $this->provider_id = $data['provider_id'] ?? null;
        $this->quantity    = $data['quantity'] ?? null;
        $this->price       = $data['price'] ?? null;
        $this->status      = $data['status'] ?? null;
    }

    public function toArray()
    {
        return [
            'event_id'    => $this->event_id;
            'provider_id' => $this->provider_id;
            'quantity'    => $this->quantity;
            'price'       => $this->price;
            'status'      => $this->status;
        ];
    }
}
