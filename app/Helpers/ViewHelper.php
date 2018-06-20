<?php

namespace App\Helpers;

use App\Services\EventService;
use App\Services\ServiceService;

class ViewHelper
{
    public function __construct(
        EventService $eventService,
        ServiceService $serviceService
    ) {
        $this->eventService = $eventService;
        $this->serviceService = $serviceService;
    }

    public function getServiceName(int $serviceId)
    {
        $service = $this->serviceService->find($serviceId);

        return $service['name'];
    }

    public function getEventName(int $eventId)
    {
        $event = $this->eventService->find($eventId);

        return $event['name'];
    }

    public function getOrderStatusName($orderStatus)
    {
        $orderStatuses = [
            1 => 'Em espera',
            2 => 'Aprovado',
        ];

        return $orderStatuses[$orderStatus] ?? '';
    }
}
