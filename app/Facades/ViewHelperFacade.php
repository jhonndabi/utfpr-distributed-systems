<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Helpers\ViewHelper;

class ViewHelperFacade extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ViewHelper::class;
    }
}
