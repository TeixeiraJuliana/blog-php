
@extends('layouts.main')
@section('content')
@section('title', 'Dashboard')
<div class="box dashboard">
    <div class="left">
        <h2>Ferramentas</h2>

    </div>
    <div class="right">
        <div class="box">
            <form class="search" action="/" method="GET">
                <div class="item-form ">
                    <input type="text" name="search" >
                    <button  type="submit"><img src="./assets/image/find.png" alt=""></button>
                </div>
            </form>
        </div>
        @if ($search)
        <h1>Buscando por:  {{$search}}</h1>
        @else
        <h1>Artigos cadastrados</h1>
        @endif
        <div>

        @if ((count($posts) == 0 && $search))
        <p> Nenhum resultado para: <strong>{{$search}}</strong></p>
        @elseif (count($posts) == 0)
        <p>Não há artigos cadastrados   </p>
        @endif
        <h2>Artigos cadastrados</h2>
        <div class="box-grid">
                @foreach ($posts as  $post)
                    <div class="card neutrall">
                        <div>
                            <div class="card-body">
                                <p>
                                    {{$post->title}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div>
                                    <button>
                                        <a href="posts/{{ $post->id }}">
                                            <img src="./assets/image/see.svg" alt="">
                                        </a>
                                    </button>
                                </div>
                                <div>
                                    <form action="/posts/{{ $post->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"><img src="./assets/image/trash.svg" alt=""></button>
                                    </form>
                                </div>
                                <div>
                                    <button>
                                        <a href="/posts/{{ $post->id }}/edit">
                                            <img src="./assets/image/update.svg" alt="">
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
