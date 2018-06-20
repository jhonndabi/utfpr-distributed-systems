<?php

namespace App\Services;

class EventService extends AbstractEventService
{
    public function __construct()
    {
        parent::__construct("events");
    }
}
