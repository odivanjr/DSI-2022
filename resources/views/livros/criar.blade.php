@extends('templates/layoutLivros')

@section('titulo', 'Livros - Criar')

@section('corpo')

    <h1>Livros - Criar</h1>

    @if($errors->any())
        <p>Preencha os campos vazios</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('livro.criar')}}" method="post" enctype="multipart/form-data">
    
        @csrf

        <p><input value="{{old('titulo')}}" type="text" name="titulo" placeholder="Título do livro"></p>
        <p><input value="{{old('autor')}}" type="text" name="autor" placeholder="Autor"></p>
        <p><input value="{{old('editora')}}" type="text" name="editora" placeholder="Editora"></p>
        <p><input value="{{old('edicao')}}" type="number" name="edicao" placeholder="Edição"></p>
        
        <p>
            <select name="area_id">
                @foreach($areas_nome as $area)
                    <option value="{{$area->id}}" placeholder="Área do Conhecimento">{{$area->nome}}</option>
                @endforeach
            </select>
        </p>

        <p>Foto: <input type="file" name="imagem"></p>
        
        <p><input type="submit" value="Salvar"></p>

    </form>

@endsection