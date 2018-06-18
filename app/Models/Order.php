<?php

namespace App\Models;

class Order
{
    public $event_id;
    public $service_id;
    public $quantity;
    public $price;
    public $status;

    public function fromArray(array $data)
    {
        $this->event_id   = $data['event_id'] ?? null;
        $this->service_id = $data['service_id'] ?? null;
        $this->quantity   = $data['quantity'] ?? null;
        $this->price      = $data['price'] ?? null;
        $this->status     = $data['status'] ?? null;
    }

    public function toArray()
    {
        return [
            'event_id'   => $this->event_id;
            'service_id' => $this->service_id;
            'quantity'   => $this->quantity;
            'price'      => $this->price;
            'status'     => $this->status;
        ];
    }
}
