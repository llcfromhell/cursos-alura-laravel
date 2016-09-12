@extends('layout.principal')

@section('conteudo')

<form action="/produtos/adicionar" method="POST">

    <input name="_token" type="hidden" value="{{ csrf_token() }}" >

    <div class="form-group">
        <label for="nome">Nome</label>
        <input name="nome" class="form-control" id="nome" type="text">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input name="valor" class="form-control" id="valor" type="text">
    </div>

    <!-- quantidade -->
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" class="form-control" id="quantidade" type="text">
    </div>
    
    <!-- descricao -->
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input name="descricao" class="form-control" id="descricao" type="text">
    </div>
    
    <button type="submit" class="btn btn-primary btn-outline">Adicionar</button>

</form>

@stop