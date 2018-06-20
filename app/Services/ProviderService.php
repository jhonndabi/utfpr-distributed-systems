<?php

namespace App\Services;

class ProviderService extends AbstractDatabaseService
{
    public function __construct()
    {
        parent::__construct("providers");
    }
}
