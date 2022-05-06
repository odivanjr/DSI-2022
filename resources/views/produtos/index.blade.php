@extends('templates/layout')

@section('titulo', 'Página de Produtos')

@section('corpo')

    <h1>Produtos - Listagem</h1>

    <p><a href="{{route('produto.criar')}}">Criar um produto</a></p>
    <p><a href="{{route('produto.ver')}}">Listar produtos</a></p>

@endsection