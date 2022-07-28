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

    <form action="{{route('livro.editar', $book->id)}}" method="post" enctype="multipart/form-data">
    
        @csrf
        @method('put')

        <p>Título: <input value="{{old('titulo') ?: $book->titulo}}" type="text" name="titulo" placeholder="Título do livro"></p>
        <p>Autor: <input value="{{old('autor') ?: $book->autor}}" type="text" name="autor" placeholder="Autor"></p>
        <p>Editora: <input value="{{old('editora') ?: $book->editora}}" type="text" name="editora" placeholder="Editora"></p>
        <p>Edição: <input value="{{old('edicao') ?: $book->edicao}}" type="number" name="edicao" placeholder="Edição"></p>
        
        <select name="area_id">
                @foreach($areas_nome as $area)                    
                    <option value="{{$area->id}}" @if ($area->id==$book->area_id) selected @endif>{{$area->nome}}</option>
                @endforeach
        </select>

        <br>

        <p>Foto: <input value="{{old('imagem') ?: $book->imagem}}" type="file" name="imagem" placeholder="Imagem"></p>
        
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection