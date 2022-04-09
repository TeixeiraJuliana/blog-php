
@extends('layouts.main')


@section('content')
@section('title', 'Artigos')
<form action="/" method="GET">
    <h2>Encontre</h2>
    <input type="text" name="search" >
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
@endforeach

<li><a href="/post/create">Cadastrar artigo</a></li>
@if ((count($posts) == 0 && $search))
<p> Nenhum resultado para: {{$search}}   </p>
@elseif (count($posts) == 0)
<p>Não há artigos cadastrados   </p>
@endif
@endsection
