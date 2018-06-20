<div class="row">
    <div class="col-sm-12">
        <h4 class="header">{{ $title }}</h4>
        @include('partials._errors')
    	<form class="col-md-6 col-md-offset-3" action="{{ $action }}" method="POST">
            <input type="hidden" name="_method" value="{{ $method or 'POST' }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="provider">Evento</label>
                <select class="form-control" name="event_id" id="provider">
                    @foreach ($events as $event)
                        <option value="{{ $event['id'] }}" @if (isset($order) && $order['event_id'] === $event['id']) {{ 'selected' }} @endif>
                            {{ $event['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="provider">Serviço</label>
                <select class="form-control" name="service_id" id="provider">
                    @foreach ($services as $service)
                        <option value="{{ $service['id'] }}" @if (isset($order) && $order['service_id'] === $service['id']) {{ 'selected' }} @endif>
                            {{ $service['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Quantidade</label>
                <input id="icon_prefix" type="text" class="form-control" name="quantity" value="{{ $order['quantity'] or '' }}">
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Preço</label>
                <input id="icon_prefix" type="text" class="form-control" name="price" value="{{ $order['price'] or '' }}">
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Status</label>
                <select class="form-control" name="status" id="provider">
                    <option value="1" @if (isset($order) && $order['status'] === 1) {{ 'selected' }} @endif>
                        Em espera
                    </option>
                    <option value="2" @if (isset($order) && $order['status'] === 2) {{ 'selected' }} @endif>
                        Aprovado
                    </option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Enviar</button>
            </div>
      	</form>
    </div>
</div>
