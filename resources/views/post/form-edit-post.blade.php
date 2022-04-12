@extends('layouts.main')

@section('content')
<div class="form-box">
    <h1>Editar {{ $post->title}}</h1>
    <form action="posts/update/{{ $post->id }}"method="POST">
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
        <div class="footer-form-box">
            <button class="btn big"><a href="/">Voltar</a></button>
            <button class="btn big" type="submit">Salvar</button>
        </div>
    </form>
</div>
@endsection
