@extends('layouts.main')
@section('content')
@section('title', $post->title)
<div class="container">
    <div class="card neutrall shadow-cont">
        <span>{{ $post->content}}</span>
    </div>
    <h1>Comentários</h1>
    <div class="message">
        @forelse ( $post->comments as $comment)
        <div class="itens-column">
            <div class="text-column">
                <h4>{{ $comment->user->name}}:</h4>
                <p>{{ $comment->message}}</p>
                <div>
                    @if (auth()->check() && auth()->user()->id == $comment->user->id)
                    <form  action="/comments/{{ $comment->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button  class="btn" type="submit"><img src="" alt=""><img src="../assets/image/trash.svg" alt=""></button>
                    </form>
                    @endif
                </div>
            </div>
        @empty
        </div>
    </div>
    <div class="message">
        <p>Não existem comentários cadastrados</p>
    </div>
    @endforelse
    <div class="show" >
        <form action="/comments"  method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">

            <div class="item-form">
                <textarea  id="" name="message" cols="30" rows="10" placeholder="Adicione um comentário"></textarea>
            </div>
            <div class="card-form-footer">
                <button class="btn big"><a href="/">Voltar</a></button>
                <button class="btn big" type="submit">Salvar</button>
            </div>
        </form>
    </div>
</div>
@endsection
