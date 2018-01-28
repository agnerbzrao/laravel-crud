@component('admin.layouts.elements.body')
    @slot('title')Edição de cliente @endslot
    @slot('description') Edite os dados do cliente @endslot
    <form action="{{route('clientes.update',$client->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.clients.form')
    </form>
    <a href="{{route('clientes.show', $client->id)}}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent
