@extends('layout')

@section ('content')
    @include('providers/_form', [
        'title' => 'Adicionar Fornecedor',
        'action' => route('providers.store'),
    ])
@endsection
