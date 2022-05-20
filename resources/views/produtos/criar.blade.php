@extends('templates/layout')

@section('titulo', 'Produtos - Criar')

@section('corpo')

    <h1>Produtos - Criar</h1>

    <form action="{{route('produto.criar')}}" method="post">
    
        @csrf

        <p><input type="text" name="nome" placeholder="Nome do produto"></p>
        <p><input type="number" name="preco" placeholder="Preço do produto"></p>
        <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do produto"></textarea>
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection