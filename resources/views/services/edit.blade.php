@extends('layout')

@section ('content')
    @include('services/_form', [
        'title' => 'Editar Serviço',
        'action' => route('services.update', ['service' => $service['id']]),
        'method' => 'PUT',
    ])
@endsection
