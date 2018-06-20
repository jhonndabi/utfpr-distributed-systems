@extends('layout')

@section ('content')
    @include('services/_form', [
        'title' => 'Adicionar Serviço',
        'action' => route('services.store'),
    ])
@endsection
