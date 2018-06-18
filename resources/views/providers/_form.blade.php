<div class="row">
    <div class="col-sm-12">
        <h4 class="header">{{ $title }}</h4>
        @include('partials._errors')
    	<form class="col-md-6 col-md-offset-3" action="{{ $action }}" method="POST">
            <input type="hidden" name="_method" value="{{ $method or 'POST' }}">
            {{ csrf_field() }}
            <div class="form-group">
             	<label for="icon_prefix">Nome</label>
                <input id="icon_prefix" type="text" class="form-control" name="name" value="{{ $provider['name'] or '' }}">
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Email</label>
                <input id="icon_prefix" type="text" class="form-control" name="email" value="{{ $provider['email'] or '' }}">
            </div>
            <div class="form-group">
             	<label for="icon_prefix">Telefone</label>
                <input id="icon_prefix" type="text" class="form-control" name="phone" value="{{ $provider['phone'] or '' }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Enviar</button>
            </div>
      	</form>
    </div>
</div>
