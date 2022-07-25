@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>Livros - Listagem</h1>

    </br> </br>

    <a href="{{route('livro.criar')}}" class="btn btn-primary">Cadastrar Livro</a>

    <a href="{{route('area')}}" class="btn btn-primary">Cadastrar Área</a>

    </br> </br>

    <table id="livros">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Edição</th>
                <th>Área</th>
                <th>Editar Livro</th>
                <th>Excluir Livro</th>
            </tr>
        </thead>
        
        <tbody>
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
                        {{$book->area->nome}}
                    </td>

                    <td>
                        <a href="{{route('livro.editar',$book->id)}}">Editar</a>
                    </td>

                    <td>
                        <a href="{{route('livro.apagar',$book->id)}}" class="excluir">Excluir</a>
                    </td>

                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th >Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Edição</th>
                <th>Área</th>
                <th>Editar Livro</th>
                <th>Excluir Livro</th>
            </tr>
        </tfoot>
        
    </table>    

    <script>
        $(document).ready( function () {
            $('#livros').DataTable();
        } );
    </script>

@endsection