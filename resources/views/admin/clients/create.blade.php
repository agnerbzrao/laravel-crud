@component('admin.layouts.elements.body')
    @slot('title')Adicionar clientes @endslot
    @slot('description') Adicione um cliente  @endslot
    <form action="{{route('clientes.store')}}" class="form-horizontal" method="post">
        @include('admin.clients.form')
    </form>
    <a href="{{route('clientes.index')}}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent
