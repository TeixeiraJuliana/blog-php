<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Redirect;

class PostController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search){
            $posts = Post::where([
                ['title', 'like' , '%'.$search.'%']
            ])->get();
            }else{
            $posts = Post::all();
        }
        return view('welcome', [ 'posts' =>  $posts, 'search' => $search]);
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
        $post = Post::findOrFail($id);
        return view('layouts.show-post', ['post' => $post]);
    }
}
