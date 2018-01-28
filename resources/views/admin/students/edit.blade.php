@component('admin.layouts.elements.body')
    @slot('title')Edição de alunos @endslot
    @slot('description') Edite os dados do alunos @endslot
    <form action="{{route('alunos.update',$student->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.students.form')
    </form>
    <a href="{{route('alunos.show', $student->id)}}" class="btn btn-xs btn-default">Voltar</a>
@endcomponent
