<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
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

        $user = User::all(['name']);
        return view('home',
        [ 'posts' =>  $posts, 'search' => $search], [ 'user' => $user]);
    }

    public function getAllPosts()
    {

        $posts = Post::all();

        $users = User::all(['name']);

        return response()->json([
            "status" => 201,
            "message" => "Sucesso",
            "payload" => [
                "users_Name" => $users,
                "posts" =>  $posts

            ]
        ]);
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
        return view('post.form-post', ['post' => $post]);
    }
    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return Redirect::to('/')->with('msg', 'Artigo criado com sucesso criado com sucesso');
    }
    public function dashboard(){
        return Redirect::to('dashboard');
    }
}
