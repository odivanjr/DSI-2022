@extends('templates/layoutLivros')

@section('titulo', 'Biblioteca')

@section('corpo')

    <h1>Áreas do Conhecimento - Listagem</h1>

    <p><a href="{{route('area.criar')}}">Cadastrar Área</a></p>

    <table border="1">
        <tr>
            <th width="25%">Nome</th>
            <th width="8%">Editar</th>
            <th width="8%">Excluir</th>
        </tr>

        @foreach($areas as $area)
            <tr>
                
                <td width="25%">
                    {{$area->nome}}
                </td>
                
                <td width="8%">
                    <a href="{{route('area.editar',$area->id)}}" class="editar">Editar</a>
                </td>

                <td width="8%">
                    <a href="{{route('area.apagar',$area->id)}}" class="apagar">Excluir</a>
                </td>

            </tr>
        @endforeach
    </table>    

@endsection