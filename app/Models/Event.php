<?php

namespace App\Models;

class Event
{
    public $id;
    public $name;

    public function fromArray(array $data)
    {
        $this->id   = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
    }

    public function toArray()
    {
        return [
            'id'   => $this->id;
            'name' => $this->name;
        ];
    }
}
