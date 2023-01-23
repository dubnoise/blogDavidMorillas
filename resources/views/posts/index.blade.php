@extends('layout')

@section('titulo', 'Listado de posts')

@section('contenido')
    <h1>Listado de Posts</h1> <br>
    @forelse ($posts as $post)
    <ul>
        <li>{{$post->title}}</li><br>
    </ul>
    @empty
        No hay posts.
    @endforelse

    <div class="paginas">
        {{$posts->links()}}
    </div>

@endsection

