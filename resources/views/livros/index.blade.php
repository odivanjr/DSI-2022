@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>Livros - Listagem</h1>

    </br> </br>

    <p><a href="{{route('livro.criar')}}">Cadastrar Livro</a></p>

    <p><a href="{{route('area')}}">Cadastrar Área</a></p>

    <table border="1">
        <tr>
            <th width="25%">Título</th>
            <th width="15%">Autor</th>
            <th width="10%">Editora</th>
            <th width="5%">Edição</th>
            <th width="10%">Área</th>
            <th width="8%">Editar Livro</th>
            <th width="8%">Excluir Livro</th>
        </tr>

        @foreach($books as $book)
            <tr>
                <td width="25%">
                    <a href="{{route('livro.ver',$book->id)}}">
                        {{$book->titulo}}
                    </a>                    
                </td>

                <td width="15%">
                    {{$book->autor}}
                </td>

                <td width="10%">
                    {{$book->editora}}
                </td>

                <td width="5%">
                    {{$book->edicao}}
                </td>

                <td width="10%" >
                    {{$book->area->nome}}
                </td>

                <td width="8%">
                    <a href="{{route('livro.editar',$book->id)}}">Editar</a>
                </td>

                <td width="8%">
                    <a href="{{route('livro.apagar',$book->id)}}" class="excluir">Excluir</a>
                </td>

            </tr>
        @endforeach
    </table>    

@endsection