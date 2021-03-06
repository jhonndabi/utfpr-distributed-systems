@extends('layout')

@section('title', 'Ordens de Serviço')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h4 class="header left">Ordens de Serviço</h4>
        <a class="btn btn-primary pull-right" href="{{ route('orders.create') }}">
            Adicionar
        </a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order['id'] }}</th>
                    <td>{{ ViewHelper::getEventName($order['event_id']) }}</td>
                    <td>{{ ViewHelper::getServiceName($order['service_id']) }}</td>
                    <td>{{ $order['quantity'] }}</td>
                    <td>{{ $order['price'] }}</td>
                    <td>{{ ViewHelper::getOrderStatusName($order['status']) }}</td>
                    <td>
                        <a class="btn btn-small btn-action" href="{{ route('orders.edit', ['order' => $order['id']]) }}" title="Editar">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>

                        @include('partials/_delete-form', [
                            'action' => route('orders.destroy', ['order' => $order['id']]),
                            'id' => $order['id'],
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
