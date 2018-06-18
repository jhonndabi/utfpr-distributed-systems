@extends('layout')

@section ('content')
    @include('services/_form', [
        'title' => 'Editar Serviço',
        'action' => url("/services/{$service['id']}"),
        'method' => 'PUT',
    ])
@endsection
