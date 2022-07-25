@extends('templates/layoutLivros')

@section('titulo', 'Livros - Ver')

@section('corpo')

    <h1>Livros - Visualização</h1>

    <br>

    <h2>{{$livros -> titulo}}</h2>

    </br>

    <div class="row">
        <div class="col-2">
            <p><img src="{{asset('/img/'.$livros -> img)}}" class="img-fluid"></p>            
        </div>
        <div class="col">
            <p><strong>Autor: </strong>{{$livros -> autor}}</p>
            <p><strong>Editora: </strong>{{$livros -> editora}}</p>
            <p><strong>Edição: </strong>{{$livros -> edicao}}</p>
        </div>
    </div>
        
    
    </br></br>
    <a href="{{route('livro.apresentar')}}" class="btn btn-primary">Voltar</a>

@endsection