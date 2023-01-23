@extends('layout')
@section('inicio', 'Inicio - David Morillas')
@section('contenido')
    <h1>Ficha del post {{$id}}</h1><br>
    <a href="{{ route('editarPost', $id) }}">Editar Post</a>

@endsection
