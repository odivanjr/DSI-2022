@extends('templates/layout')

@section('titulo', 'Página Inicial')

@section('corpo')
    <h1>Página inicial</h1>    
    <p><a href="{{route('produto')}}">Página de Produtos</a></p>
@endsection