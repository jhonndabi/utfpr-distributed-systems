<?php

namespace App\Services;

class OrderService extends AbstractDatabaseService
{
    public function __construct()
    {
        parent::__construct("event_has_services");
    }
}
