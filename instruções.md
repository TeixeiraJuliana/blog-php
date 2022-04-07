
Funcionou com erro mas enviou dado

$post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return Redirect::to('/');


Posts:


