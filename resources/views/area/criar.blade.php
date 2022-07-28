@extends('templates/layoutLivros')

@section('titulo', 'Áreas do Conhecimento')

@section('corpo')

    <h1>Áreas do Conhecimento - Criar</h1>

    <br><br>

    @if($errors->any())
        <p>Preencha o campo vazio.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('area.criar')}}" method="post">
    
        @csrf

        <p><input value="{{old('nome')}}" type="text" name="nome" placeholder="Nome da Área"></p>
        
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection