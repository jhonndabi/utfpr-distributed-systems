<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProviderService;

class ApiTestController extends Controller
{
    /**
     * @var ProviderService
     */
    private $providerService;

    public function __construct(ProviderService $providerService)
    {
        $this->providerService = $providerService;
    }

    public function index(Request $request)
    {
        $providers = $this->providerService->findAll();

        return $providers;
    }
}
