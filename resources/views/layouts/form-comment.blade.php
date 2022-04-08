@extends('layouts.main')


@section('content')
<h1>Cadastre um novo Artigo</h1>
<form action="/comments" method="POST">
    @csrf
    <div class="item">
        <label for="title">Título do artigo</label>
        <input type="text" name="title" placeholder="Informe o título do ártigo">
    </div>
    <div class="item">
        <label for="description">Conteúdo do artigo</label>
        <textarea  id="" name="description" cols="30" rows="10" placeholder="Informe o conteúdo do ártigo"></textarea>
    </div>
    <button type="submit">Salvar</button>
</form>
<button><a href="/">Voltar</a></button>
@endsection

