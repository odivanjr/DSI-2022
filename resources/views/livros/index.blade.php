@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>SisBib</h1>

    <br>

    <h3>Gerenciamento de Livros da Biblioteca</h3>

    <p>Sistema de Gerenciamento dos livros da biblioteca. Escolha uma das opções abaixo
    para cadastrar livros ou áras do conhecimento.</p>

    <br>

    <p>Total de livros cadastrados: {{$qtd}}</p>    

    @foreach($areas as $area)
        <p>{{$area->nome}}: {{count($area->livros)}}</p>
    @endforeach

    <a href="{{route('livro.apresentar')}}" class="btn btn-primary">Ver Livros</a>

    <a href="{{route('area')}}" class="btn btn-primary">Ver Áreas</a>    

@endsection