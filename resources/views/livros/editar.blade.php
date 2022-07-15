@extends('templates/layoutLivros')

@section('titulo', 'Livros - Editar')

@section('corpo')

    <h1>Livros - Editar</h1>

    @if($errors->any())
        <p>Preencha os campos vazios</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('livro.editar', $book->id)}}" method="post">
    
        @csrf
        @method('put')

        <p><input value="{{old('titulo') ?: $book->titulo}}" type="text" name="titulo" placeholder="Título do livro"></p>
        <p><input value="{{old('autor') ?: $book->autor}}" type="text" name="autor" placeholder="Autor"></p>
        <p><input value="{{old('editora') ?: $book->editora}}" type="text" name="editora" placeholder="Editora"></p>
        <p><input value="{{old('edicao') ?: $book->edicao}}" type="number" name="edicao" placeholder="Edição"></p>
        {{-- <p>Foto: <input value="{{old('imagem') ?: $book->imagem}}" type="file" name="imagem" placeholder="Imagem"></p> --}}
        
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection