@extends('layout')

@section ('content')
    @include('providers/_form', [
        'title' => 'Editar Fornecedor',
        'action' => url("/providers/{$provider['id']}"),
        'method' => 'PUT',
    ])
@endsection
