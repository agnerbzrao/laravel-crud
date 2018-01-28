@component('admin.layouts.elements.body')
    @slot('title')Adicionar alunos @endslot
    @slot('description') Adicione um aluno  @endslot
    <form action="{{route('alunos.store')}}" class="form-horizontal" method="post">
        @include('admin.students.form')
    </form>
    <a href="{{route('alunos.index')}}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent
