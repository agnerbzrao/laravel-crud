@component('admin.layouts.elements.body')
    @slot('title')Páginas de alunos @endslot
    @slot('description') Dados do alunos @endslot
    <h4>{{$student->name}}</h4>
    <p>
        <small>
            <p>Criado em {{$student->created_at->format('d/m/Y H:i:s')}}</p>
            <p>Atualizado em {{$student->updated_at->format('d/m/Y H:i:s')}}</p>
        </small>
    </p>
    <a href="{{route('alunos.index')}}" class="btn btn-xs btn-default">Voltar</a>
    <a href="{{route('alunos.edit',$student->id)}}" class="btn btn-xs btn-default">Editar</a>
    <form  id="form-delete" class="form-horizontal"
    method="post" style="display: inline-block"
      onclick="confirm('Deseja excluir este aluno(a)?') ? action='{{route('alunos.destroy',$student->id)}}' : event.preventDefault();">
        <input type="hidden" name="_method" value="DELETE">
        {!! csrf_field() !!}
        <input type="submit" value="Excluir" class="btn btn-xs btn-default">
    </form>

@endcomponent
