@extends('layouts.main')


@section('content')
@section('title', $post->title)
<div class="big-text m-flex">
    <p>{{ $post->content}}</p>
</div>
<h3>Comentários</h3>
<ul class="content-coments m-flex">

    @forelse ( $post->comments as $comment)
    <div class="coment-info m-flex">
        <p>{{ $comment->user->name}} disse: {{ $comment->message}}</p>
        @if (auth()->check() && auth()->user()->id == $comment->user->id)
        <form  action="/comments/{{ $comment->id}}" method="post">
            @csrf
            @method('delete')
            <button  class="btn" type="submit"><img src="" alt=""><img src="../assets/image/trash.svg" alt=""></button>
        </form>
        @endif
    </div>
        @empty
        <p>Não existem comentários cadastrados</p>
    @endforelse
</ul>
<div class="form-box  small">
    <form action="/comments"  method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">

        <div class="item">
            <textarea  id="" name="message" cols="30" rows="10" placeholder="Adicione um comentário"></textarea>
        </div>
        <div class="footer-form-box m-flex">
            <button class="btn big"><a href="/">Voltar</a></button>
            <button class="btn big" type="submit">Salvar</button>
        </div>
    </form>
</div>
@endsection
