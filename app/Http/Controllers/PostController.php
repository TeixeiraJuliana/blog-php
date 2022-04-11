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
        return view('home', [ 'posts' =>  $posts, 'search' => $search]);
    }
    public function create()
    {
        return view('post.form-post');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;

        $user = auth()->user();
        $post->user_id = $user->id;

        $post->save();
        return Redirect::to('/')->with('msg', 'Artigo criado com sucesso criado com sucesso');
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('post.show-post', ['post' => $post]);
    }
    public function delete($id){
        Post::findOrFail($id)->delete();
        return back();
    }
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('post.form-edit-post', ['post' => $post]);
    }
    public function update(Request $request){
        Post::findOrFail($request->id)->update($request->all());
        return back();
    }
}
