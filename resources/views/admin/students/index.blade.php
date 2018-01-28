@component('admin.layouts.elements.body')
    @slot('title')Páginas de alunos @endslot
    @slot('description') Administração de páginas de alunos @endslot
    <a href="{{route('alunos.create')}}" class="btn btn-danger">Novo aluno</a>
    <br/><br/>
    {{$students->links()}}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CPF/CNPJ</th>
            <th>E-mail.</th>
            <th>Telefone</th>
            <th>Data Nasc</th>
            <th>Sexo</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->cpf}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{\Carbon\Carbon::parse($student->date_birth)->format('d/m/Y')}}</td>
                <td>{{$student->sex}}</td>
                <td class="text-right">
                    <a href="{{route('alunos.show',$student->id)}}" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$students->links()}}
@endcomponent
