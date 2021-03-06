@extends('layout')

@section('title', 'Fornecedores')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h4 class="header left">Fornecedores</h4>
        <a class="btn btn-primary pull-right" href="{{ route('providers.create') }}">
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
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($providers as $provider)
                <tr>
                    <th scope="row">{{ $provider['id'] }}</th>
                    <td>{{ $provider['name'] }}</td>
                    <td>{{ $provider['email'] }}</td>
                    <td>{{ $provider['phone'] }}</td>
                    <td>
                        <a class="btn btn-small btn-action" href="{{ route('providers.edit', ['provider' => $provider['id']]) }}" title="Editar">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>

                        @include('partials/_delete-form', [
                            'action' => route('providers.destroy', ['provider' => $provider['id']]),
                            'id' => $provider['id'],
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
