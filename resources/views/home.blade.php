
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
<div class="conteiner-box">
    <div class="box-item">
        @foreach ($posts as  $post)
        <span>{{$post->title}}</span>
        <div class="m-icons-up-del">
            <button><a href="posts/{{ $post->id }}"><img src="./assets/image/options.png" alt=""></a></button>
        </div>
        <form action="/posts/{{ $post->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit"><img src="./assets/image/trash.png" alt=""></button>
        </form>
        <button><a href="posts/edit/{{ $post->id }}"></a><img src="./assets/image/update.png" alt=""></button>
        @endforeach
    </div>
</div>

<li><a href="/post/create">Cadastrar artigo</a></li>
@if ((count($posts) == 0 && $search))
<p> Nenhum resultado para: {{$search}}</p>
@elseif (count($posts) == 0)
<p>Não há artigos cadastrados   </p>
@endif
@endsection
