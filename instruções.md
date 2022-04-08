
Funcionou com erro mas enviou dado

$post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return Redirect::to('/');


Posts:


https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG

  <div class="m-icons-up-del">
     <a href="posts/{{ $post->id }}"></a>
 </div>
