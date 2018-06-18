@extends('layout')

@section('title', 'Serviços')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h4 class="header left">Serviços</h4>
        <a class="btn btn-primary pull-right" href="/services/create">
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
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service['id'] }}</th>
                    <td>{{ $service['name'] }}</td>
                    <td>{{ $service['price'] }}</td>
                    <td>
                        <a class="btn btn-small btn-action" href="{{ route('services.edit', ['service' => $service['id']]) }}" title="Editar">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>

                        @include('partials/_delete-form', [
                            'action' => route('services.destroy', ['service' => $service['id']]),
                            'id' => $service['id'],
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
