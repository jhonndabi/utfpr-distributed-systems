<?php

namespace App\Services;

abstract class AbstractDatabaseService extends AbstractService
{
    const DATABASE_API_URL = 'https://banco-de-dados.herokuapp.com/api/v1';
    const DATABASE_API_EMAIL = 'team@stark.com';
    const DATABASE_API_TOKEN = 'dfJ2wsUU9kwSRnNk5aww';

    public function __construct(string $resource)
    {
        parent::__construct($resource);

        $this->setDefaultQueryParams([
            'user_email' => self::DATABASE_API_EMAIL,
            'user_token' => self::DATABASE_API_TOKEN,
        ]);
    }

    protected function apiUrl($segment = '')
    {
        return self::DATABASE_API_URL . $segment;
    }
}
