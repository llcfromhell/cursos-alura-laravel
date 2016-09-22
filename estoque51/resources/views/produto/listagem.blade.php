@extends('layout.principal')

@section('conteudo')



@if(empty($produtos))

<div class="alert alert-danger">
  Você não tem nenhum produto cadastrado.
</div>

@else

<div class="container-fluid">

<<<<<<< HEAD
  <h1>Listagem de produtos</h1>
  <table class="table table-striped table-bordered table-hover">
  
  @foreach ($produtos as $p)
  <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->quantidade }}</td>
      <td>
          <a href="/produtos/mostra/{{ $p->id }}">
              <span class="glyphicon glyphicon-search"></span>
          </a>
      </td>
  
  </tr>
  @endforeach
  
  </table>
  
  <h4>
    <span class="label label-danger pull-right">
      Um ou menos itens no estoque
    </span>
  </h4>
    
</div>

  @if ( old('nome') )
  
    <div class="container-fluid">
  
      <div class="alert alert-success">
  
        O produto <strong> {{ old('nome') }} </strong> foi adicionado com sucesso!
  
      </div>
      
    </div>
  
  @endif

=======
    <h1>Listagem de produtos</h1>
    
    <table class="table table-striped table-bordered table-hover">

    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>
            <a href="/produtos/mostra/{{ $p->id }}">
                <span class="glyphicon glyphicon-search"></span>
            </a>
        </td>

    </tr>
    @endforeach

    </table>

</div>

<div class="container-fluid">
  <h4>
  <span class="label label-danger pull-right">
    Um ou menos itens no estoque
  </span>
  </h4>
</div>

    @if ( old('nome') )
    <div class="container-fluid">
        <div class="alert alert-success">
            Produto {{ old('nome') }} foi adicionado com sucesso!
        </div>
    </div>
    @endif
>>>>>>> 72eb0f49846aeb7ea7cde0fd6c37fe0140d2d795

@endif

@stop