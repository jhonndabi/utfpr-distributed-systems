<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\ProviderService;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @var ServiceService
     */
    private $serviceService;

    /**
     * @var ProviderService
     */
    private $providerService;

    public function __construct(
        ServiceService $serviceService,
        ProviderService $providerService
    ) {
        $this->serviceService = $serviceService;
        $this->providerService = $providerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->serviceService->findAll();

        return view('services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = $this->providerService->findAll();

        return view('services.create', compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->fromArray($request->all());

        $this->serviceService->create($service->toArray());

        return redirect('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('services');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = $this->serviceService->find($id);
        $providers = $this->providerService->findAll();

        return view('services.edit', compact('service', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->serviceService->find($id);
        $data = array_merge($data, $request->all());

        $service = new Service;
        $service->fromArray($data);

        $this->serviceService->update($id, $service->toArray());

        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->serviceService->delete($id);

        return redirect('services');
    }
}
