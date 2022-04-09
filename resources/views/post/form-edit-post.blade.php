@extends('layouts.main')

@section('content')
<h1>Editar {{ $post->title}}</h1>
<form action="posts/update/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="item">
        <label for="title">Título do artigo</label>
        <input type="text" name="title" placeholder="Informe o título do ártigo" value="{{$post->title}}">
    </div>
    <div class="item">
        <label for="content">Conteúdo do artigo</label>
        <textarea  id="" name="content" cols="30" rows="10"  value="{{$post->content}}"></textarea>
    </div>
    <button type="submit">Salvar</button>
</form>
<button><a href="/">Voltar</a></button>
@endsection
