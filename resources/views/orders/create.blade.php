@extends('layout')

@section ('content')
    @include('orders/_form', [
        'title' => 'Adicionar ordem de serviço',
        'action' => route('orders.store'),
    ])
@endsection
