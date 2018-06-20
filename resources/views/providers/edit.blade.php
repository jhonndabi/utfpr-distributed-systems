@extends('layout')

@section ('content')
    @include('providers/_form', [
        'title' => 'Editar Fornecedor',
        'action' => route('providers.update', ['provider' => $provider['id']]),
        'method' => 'PUT',
    ])
@endsection
