<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\OrderService;
use App\Services\EventService;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @var OrderService
     */
    private $orderService;

    /**
     * @var EventService
     */
    private $eventService;

    /**
     * @var ServiceService
     */
    private $serviceService;

    public function __construct(
        OrderService $orderService,
        EventService $eventService,
        ServiceService $serviceService
    ) {
        $this->orderService   = $orderService;
        $this->eventService   = $eventService;
        $this->serviceService = $serviceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderService->findAll();

        return view('orders.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = $this->eventService->findAll();
        $services = $this->serviceService->findAll();

        return view('orders.create', compact('events', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->fromArray($request->all());

        $this->orderService->create($order->toArray());

        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('orders');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = $this->eventService->findAll();
        $services = $this->serviceService->findAll();

        $order = $this->orderService->find($id);

        return view('orders.edit', compact('order', 'events', 'services'));
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
        $data = $this->orderService->find($id);
        $data = array_merge($data, $request->all());

        $order = new Order;
        $order->fromArray($data);

        $this->orderService->update($id, $order->toArray());

        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->orderService->delete($id);

        return redirect('orders');
    }
}
