@extends('layouts.main')


@section('content')<!--como criar title-->
@section('title', $post->title)
<p>{{ $post->description}}</p>
<h1>Comentários</h1>
<ul>
    @forelse ( $post->comments as $comment)
    <li>{{ $comment->message}} - Autor: {{ $comment->user->name}}</li>
    @if (auth()->check() && auth()->user()->id == $comment->user->id)
    <form action="/comments/{{ $comment->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit"><img src="" alt="">Deletar</button>
    </form>
    @endif
    @empty
    <p>Não existem comentários cadastrados</p>
    @endforelse
</ul>
<form action="/comments"  method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">

    <div class="item">
        <label for="message">Adicione um comentário</label>
        <textarea  id="" name="message" cols="30" rows="10" placeholder="Informe o conteúdo do ártigo"></textarea>
    </div>
    <button type="submit">Salvar</button>
</form>
<button><a href="/">Voltar</a></button>

@endsection
