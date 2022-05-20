@extends('templates/layout')

@section('titulo', 'Produtos - Ver')

@section('corpo')

    <h1>Produtos - Visualização</h1>

    <h2>{{$produto -> nome}}</h2>

    {{-- uma forma de apresentação dos dados na tela (acesso de propriedade de objeto) --}}

    <p><strong>Descrição: </strong>{{$produto -> descricao}}</p>

    {{-- outra forma de apresentação dos dados na tela (acesso de índice de array) --}}

    <p><strong>Preço (R$): </strong>{{number_format($produto ['preco'],2)}}</p>

@endsection