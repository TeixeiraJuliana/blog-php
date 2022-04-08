
@extends('layouts.main')


@section('content')
@section('title', 'Artigos cadastrados')
@foreach ($posts as  $post)
<div>{{$post->title}}</div>
<div>{{$post->description}}</div>
<div class="m-icons-up-del">
    <a href="posts/{{ $post->id }}">Abrir</a>
</div>
@endforeach
@endsection
