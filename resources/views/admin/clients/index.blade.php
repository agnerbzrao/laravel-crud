@component('admin.layouts.elements.body')
@slot('title')Páginas de clientes @endslot
@slot('description') Administração de páginas de clientes @endslot
<a href="{{route('clientes.create')}}" class="btn btn-danger">Novo cliente</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th class="text-right">Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->name}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->telefone}}</td>
        <td class="text-right">
            <a href="{{route('clientes.show',$client->id)}}" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
    {{$clients->links()}}
@endcomponent
