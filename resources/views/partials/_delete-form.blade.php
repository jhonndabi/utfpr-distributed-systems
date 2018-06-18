<form style="display: inline;" id="destroy-resource-{{ $id }}" action="{{ $action }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}

    <a class="btn btn-small btn-action red" href="#" title="{{ $title or 'Excluir'}}"
        onclick="event.preventDefault();
            document.getElementById('destroy-resource-{{ $id }}').submit();">
        <i class="fa fa-times" aria-hidden="true"></i>
    </a>
</form>
