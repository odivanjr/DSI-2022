@extends('templates/layoutLivros')

@section('titulo', 'Livros - Editar')

@section('corpo')

    <h1>Áreas do Conhecimento - Editar</h1>

    @if($errors->any())
        <p>Preencha o campo vazio</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('area.editar', $area->id)}}" method="post">
    
        @csrf
        @method('put')

        <p><input value="{{old('nome') ?: $area->nome}}" type="text" name="nome" placeholder="Nome da Área"></p>
                
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection