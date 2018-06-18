<div class="row">
    <div class="col-sm-12">
        <h4 class="header">{{ $title }}</h4>
        @include('partials._errors')
    	<form class="col-md-6 col-md-offset-3" action="{{ $action }}" method="POST">
            <input type="hidden" name="_method" value="{{ $method or 'POST' }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="provider">Fornecedor</label>
                <select class="form-control" name="provider_id" id="provider">
                    @foreach ($providers as $provider)
                        <option value="{{ $provider['id'] }}" @if (isset($service) && $service['provider_id'] === $provider['id']) {{ 'selected' }} @endif>
                            {{ $provider['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Nome</label>
                <input id="icon_prefix" type="text" class="form-control" name="name" value="{{ $service['name'] or '' }}">
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Preço</label>
                <input id="icon_prefix" type="text" class="form-control" name="price" value="{{ $service['price'] or '' }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Enviar</button>
            </div>
      	</form>
    </div>
</div>
