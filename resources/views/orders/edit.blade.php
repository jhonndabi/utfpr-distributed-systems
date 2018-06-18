@extends('layout')

@section ('content')
    @include('orders/_form', [
        'title' => 'Editar ordem de serviço',
        'action' => route('orders.update', ['order' => $order['id']]),
        'method' => 'PUT',
    ])
@endsection
