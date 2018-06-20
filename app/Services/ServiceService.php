<?php

namespace App\Services;

class ServiceService extends AbstractDatabaseService
{
    public function __construct()
    {
        parent::__construct("services");
    }
}
