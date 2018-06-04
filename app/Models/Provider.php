<?php

namespace App\Models;

class Provider
{
    public $id;
    public $name;
    public $email;
    public $phone;

    public function fromArray(array $data)
    {
        $this->id    = $data['id'] ?? null;
        $this->name  = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
    }

    public function toArray()
    {
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
