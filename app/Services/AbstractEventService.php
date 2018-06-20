<?php

namespace App\Services;

abstract class AbstractEventService extends AbstractService
{
    const API_URL = 'http://139.59.42.23/api';

    protected function apiUrl($segment = '')
    {
        return self::API_URL . $segment;
    }
}
