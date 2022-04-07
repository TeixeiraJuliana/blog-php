
@extends('layouts.main')


@section('content')
<h1>dash</h1>
<div class="m-theme-table">
    <div class="header-table"><h1>Listas cadastradas</h1></div>
    <div id="m-table-theme-heading">
        <div>Titulo</div>
        <div>descrição</div>
        <div>Ações</div>
    </div>
    <div  class="m-theme-table-rows">
        @foreach ($  as $)
        <div  class="m-theme-table-row m-flx-g">
            <div id="m-row-title">{{$->title}}</div>
            <div>{{$->description}}</div>
            <div class="m-icons-up-del">
                <a href="posts/{{ $post->id }}"></a>
            </div>
        </div>
    </div>
</div>
@endsection
