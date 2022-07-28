@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>Áreas do Conhecimento - Listagem</h1>

    <br><br>

    <p><a href="{{route('area.criar')}}" class="btn btn-primary">Cadastrar Área</a></p>

    <table id="areas">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>    

        <tbody>
            @foreach($areas as $area)
                <tr>                
                    <td>
                        {{$area->nome}}
                    </td>
                    
                    <td>
                        <a href="{{route('area.editar',$area->id)}}" class="editar">Editar</a>
                    </td>

                    <td>
                        <a href="{{route('area.apagar',$area->id)}}" class="apagar">Excluir</a>
                    </td>

                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </tfoot>
        
    </table>

    <script>
        $(document).ready( function () {
            $('#areas').DataTable();
        } );
    </script>

@endsection