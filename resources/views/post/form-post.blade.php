@extends('layouts.main')
@section('content')
<div class="container cad">
    <div class="card-form">
    @if (Request::is('*/edit'))
        <h1>Alterar artigo</h1>
        <form action="/post/update/{{ $post->id }}" method="POST">
            @csrf
            <div class="item-form">
                <label for="title">Título do artigo</label>
                <input type="text" name="title" placeholder="Informe o título do ártigo" value="{{$post->title}}">
            </div>
            <div class="item-form">
                <label for="content">Conteúdo do artigo</label>
                <textarea  type="text" name="content" cols="30" rows="10" placeholder="Informe o título do ártigo" value="{{$post->content}}" id="" cols="30" rows="10" ></textarea>
            </div>
            <div class="card-form-footer">
                <button class=""><a href="/">Voltar</a></button>
                <button class="" type="submit">Salvar</button>
            </div>
        </form>
    @else
        <h1>Cadastre um Artigo</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="item-form">
                <label for="title">Título do artigo</label>
                <input type="text" name="title" placeholder="Informe o título do ártigo">
            </div>
            <div class="item-form">
                <label for="content">Conteúdo do artigo</label>
                <textarea  id="" name="content" cols="30" rows="10" placeholder="Informe o conteúdo do ártigo"></textarea>
            </div>
            <div class="card-form-footer">
                <button class=""><a href="/">Voltar</a></button>
                <button class="" type="submit">Salvar</button>
            </div>
        </form>
    @endif
    </div>
</div>
@endsection


