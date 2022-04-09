
@extends('layouts.main')


@section('content')
@section('title', 'Artigos')
<form action="/" method="GET">
    <h2>Encontre</h2>
    <input type="text" name="search" >
    <button type="submit">search</button>
</form>
@if ($search)
<h1>Buscando por:  {{$search}}</h1>
@else
<h1>Últimos artigos cadastrados</h1>
@endif
@foreach ($posts as  $post)
<span>{{$post->title}}</span>
<div class="m-icons-up-del">
    <a href="posts/{{ $post->id }}">Abrir</a>
</div>
<form action="/posts/{{ $post->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit"><img src="" alt="">Deletar</button>
</form>
<div><a href="posts/edit/{{ $post->id }}">Editar</a></div>
@endforeach

<li><a href="/post/create">Cadastrar artigo</a></li>
@if ((count($posts) == 0 && $search))
<p> Nenhum resultado para: {{$search}}</p>
@elseif (count($posts) == 0)
<p>Não há artigos cadastrados   </p>
@endif
@endsection
