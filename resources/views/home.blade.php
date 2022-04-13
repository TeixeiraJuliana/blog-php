
@extends('layouts.main')
@section('content')
@section('title', 'Dashboard')
<div class="container-dash m-flex">
    <div class="container-dash-body  m-flex">
        <div class="left-box m-flex">
            <h1>Ferramentas</h1>
            <div class="box-item dash-data">
                <div class="conteiner-box">
                    <div class="box-item">
                        <div class="flex-colum">
                            <h2>Artigos Cadastrados:</h2>
                            <div class="item-number m-flex"><p>{{$posts->count()}}</p></div>
                            <img src="./assets/image/pessoa.jpg" alt="">
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="flex-colum">
                            <h2>Usuários Cadastrados:</h2>
                            <div class="item-number m-flex"><p>{{$user->count()}}</p></div>
                            <img src="./assets/image/pessoas.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-item dash-data">
                <h1>Artigos mais acessados</h1>
                @foreach ($posts as  $post)
                    @if ($post->visits > 5)
                    <div class="flex-colum">
                    <p> {{$post->title}}</p>
                    <strong>{{$post->visits}} acessos</strong>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="box-item dash-data">
                <h1>Todos os usuários cadastrados</h1>
                @foreach ($user as $usuario)
                <div class="flex-colum">
                {{$usuario->name}}
                </div>
                @endforeach
            </div>
        </div>
        <div class="right-box m-flex">

            <div class="head-dash">
                <form class="search m-flex" action="/" method="GET">
                    <div class="search-item m-flex">
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
            <div class="conteiner-box">
                @foreach ($posts as  $post)
                <div class="box-item">
                    <div class="text-card ">
                        <p>
                            {{$post->title}}
                        </p>
                    </div>
                    <div class="m-icons-up-del m-flex">
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
                @endforeach
                @if ((count($posts) == 0 && $search))
                <p> Nenhum resultado para: <strong>{{$search}}</strong></p>
                @elseif (count($posts) == 0)
                <p>Não há artigos cadastrados   </p>
                @endif
            </div>
            <button class="btn big"><a href="/">Voltar</a></button>
        </div>
    </div>
</div>
@endsection
