{{csrf_field()}}
<div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
    <label for="name" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
    <input class="form-control" id="name" name="name" value="{{old('name',$student->name ?? '')}}" required autofocus>
    @if ($errors->has('name'))
        <span class="alert-danger">
        <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group" {{ $errors->has('cpf') ? ' has-error' : '' }}>
    <label for="document_number" class="control-label col-sm-2">CPF</label>
    <div class="col-sm-10">
    <input class="form-control" id="cpf" name="cpf"
           value="{{old('cpf',$student->cpf ?? '')}}" required autofocus>
        @if ($errors->has('cpf'))
            <span class="alert-danger">
        <strong>{{ $errors->first('cpf') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
    <label for="email" class="control-label col-sm-2">E-mail</label>
    <div class="col-sm-10">
    <input class="form-control" id="email" name="email" type="email"
           value="{{old('email',$student->email ?? '')}}" required autofocus>
        @if ($errors->has('email'))
            <span class="alert-danger">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group" {{ $errors->has('phone') ? ' has-error' : '' }}>
    <label for="phone" class="control-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
    <input class="form-control" id="phone" name="phone" value="{{old('phone',$student->phone ?? '')}}" required autofocus>
        @if ($errors->has('phone'))
            <span class="alert-danger">
        <strong>{{ $errors->first('phone' ?? '') }}</strong>
        </span>
        @endif

    </div>
</div>

@php
    isset($student) ? $maritalStatus = $student->marital_status : $maritalStatus = '';
@endphp
<div class="form-group" {{ $errors->has('marital_status') ? ' has-error' : '' }}>
    <label for="marital_status" class="control-label col-sm-2">Estado Civil</label>
    <div class="col-sm-10">
    <select class="form-control" name="marital_status" id="marital_status" value="{{$maritalStatus}}" required autofocus>
        <option value="">Selecione o estado civil</option>
        <option value="1" {{old('marital_status',$maritalStatus) == 1 ?'selected="selected"': ''}}>Solteiro</option>
        <option value="2" {{old('marital_status',$maritalStatus) == 2 ?'selected="selected"': ''}}>Casado</option>
        <option value="3" {{old('marital_status',$maritalStatus) == 3 ?'selected="selected"': ''}}>Divorciado
        </option>
    </select>
        @if ($errors->has('marital_status'))
            <span class="alert-danger">
        <strong>{{ $errors->first('marital_status') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group" {{ $errors->has('date_birth') ? ' has-error' : '' }}>
    <label for="date_birth" class="control-label col-sm-2">Data Nasc.</label>
    <div class="col-sm-10">
    <input class="form-control" id="date_birth" name="date_birth" type="date"
           value="{{old('date_birth',$student->date_birth ?? '')}}" required autofocus>
        @if ($errors->has('date_birth'))
            <span class="alert-danger">
        <strong>{{ $errors->first('date_birth') }}</strong>
        </span>
        @endif
    </div>


</div>

@php
    isset($student) ? $sex = $student->sex : $sex = '';
@endphp

<div class="radio" {{ $errors->has('sex') ? ' has-error' : '' }}>
    <label for="sex" class="control-label col-sm-2">Genero</label>
    <label for="sex" class="control-label col-sm-2">
        <input type="radio" name="sex" value="m" {{old('sex',$sex) == 'm'?'checked="checked"': ''}} required autofocus> Masculino
    </label>
    <label for="sex" class="control-label col-sm-2">
        <input type="radio" name="sex" value="f" {{old('sex',$sex) == 'f'?'checked="checked"': ''}}> Feminino
    </label>
    <label for="sex" class="control-label col-sm-2">
        @if ($errors->has('sex'))
            <span class="alert-danger">
        <strong>{{ $errors->first('sex') }}</strong>
        </span>
        @endif
    </label>


</div>

<br/>
<br/>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>