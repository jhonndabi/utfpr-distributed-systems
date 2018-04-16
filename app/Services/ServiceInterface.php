<?php

namespace App\Services;

interface ServiceInterface
{
    protected function get($resource, array $options = []);
    protected function post($resource, array $options = []);
}
