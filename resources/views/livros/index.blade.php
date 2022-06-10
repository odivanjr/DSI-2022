@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>Livros - Listagem</h1>

    <p><a href="{{route('livro.criar')}}">Cadastrar livro</a></p>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Edição</th>
        </tr>

        @foreach($books as $book)
            <tr>
                <td>
                    <a href="{{route('livro.ver',$book->id)}}">
                        {{$book->titulo}}
                    </a>                    
                </td>

                <td>
                    {{$book->autor}}
                </td>

                <td>
                    {{$book->editora}}
                </td>

                <td>
                    {{$book->edicao}}
                </td>

                <td>
                    <a href="{{route('livro.editar',$book->id)}}">Editar</a>
                </td>

            </tr>
        @endforeach
    </table>    

@endsection