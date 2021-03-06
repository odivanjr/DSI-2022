@extends('templates/layoutLivros')

@section('titulo', 'Livros - Ver')

@section('corpo')

    <h1>Livros - Visualização</h1>

    <br>

    <h2>{{$livros -> titulo}}</h2>

    {{-- uma forma de apresentação dos dados na tela (acesso de propriedade de objeto) --}}

    <p><strong>Autor: </strong>{{$livros -> autor}}</p>
    <p><strong>Editora: </strong>{{$livros -> editora}}</p>
    <p><strong>Edição: </strong>{{$livros -> edicao}}</p>
    <p><img width="30%" src="{{asset('/img/'. $livros -> img)}}"></p>

@endsection