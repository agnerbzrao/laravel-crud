{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{ $client->name ?? '' }}" placeholder="Nome">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">E-mail</label>
    <div class="col-sm-10">
        <input type="text" name="email" id="email" class="form-control" value="{{ $client->email ?? '' }}" placeholder="E-mail">
    </div>
</div>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input type="tel" name="telefone" id="telefone" class="form-control" value="{{ $client->telefone ?? '' }}" placeholder="Telefone">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>