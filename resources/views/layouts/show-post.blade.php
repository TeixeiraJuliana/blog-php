@extends('layouts.main')


@section('content')<!--como criar title-->
@section('title', $post->title)
<p>{{ $post->description}}</p>
@endsection
