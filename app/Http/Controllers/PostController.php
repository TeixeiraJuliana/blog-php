<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Redirect;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function create()
    {
        return view('layouts.form-post');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post = $post->create($request->all());
        return Redirect::to('/')->with('msg', 'Artigo criado com sucesso criado com sucesso');
    }
    public function show($id){
        $post = new Post::findOrFail($id);
        return view('dashboard', [  'post', $post]);

    }
}
