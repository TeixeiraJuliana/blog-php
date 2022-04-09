<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate(rules:[
            'message' => 'required'
        ]);

        $created = Comment::create([
            'message' => $validated['message'],
            'user_id' => auth()->user()->id,
            'post_id' => $request->input(key: 'post_id')
        ]);
        return back();
    }
    public function delete($id){
        Comment::findOrFail($id)->delete();
        return back();
    }
}
