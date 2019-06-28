@extends('layouts.app')

@section('content')
    

<h1>Listar Posts</h1>

@forelse ($posts as $post)
    {{$post->title}}
    <hr>
@empty
    <p>Nenhum registro encontrado!</p>
@endforelse

{!! $posts->links() !!}

@endsection