@component('admin.layouts.elements.body')
    @slot('title')Páginas de clientes @endslot
    @slot('description')  @endslot
    <h4>{{$client->name}}</h4>
    <p>
        <small>
            <p>Criado em {{$client->created_at->format('d/m/Y H:i:s')}}</p>
            <p>Atualizado em {{$client->updated_at->format('d/m/Y H:i:s')}}</p>
        </small>
    </p>
    <a href="{{route('clientes.index')}}" class="btn btn-xs btn-default">Voltar</a>
    <a href="{{route('clientes.edit',$client->id)}}" class="btn btn-xs btn-default">Editar</a>
    <form action="{{route('clientes.destroy',$client->id)}}" class="form-horizontal" method="post" style="display: inline-block">
        <input type="hidden" name="_method" value="DELETE">
        {!! csrf_field() !!}
        <input type="submit" value="Excluir" class="btn btn-xs btn-default">
    </form>
@endcomponent
