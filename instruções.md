
Batist
https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG

coments 
https://www.youtube.com/watch?v=V66VbP4p0Wc&list=PLVSNL1PHDWvSOFpHtRi1-oZjBll69lehn&index=4



https://pt.stackoverflow.com/questions/136163/deploy-de-projeto-laravel-pelo-git

$comment = new Comment;
        $request->user()->$comment = $comment->create($request->all());
        return Redirect::to('layouts.show-post',  $comment->post_id)->with('msg', 'Artigo criado com sucesso criado com sucesso');
        
$comment = new Comment;
        $comment->message = $request->message;
        $comment->save();
        return Redirect::to('/')->with('msg', 'Artigo criado com sucesso criado com sucesso');


Funcionou com erro mas enviou dado

$post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return Redirect::to('/');


      $post = $post->create($request->all());


        $comment =  $comment->create($request->all());
        

  <div class="m-icons-up-del">
     <a href="posts/{{ $post->id }}"></a>
 </div>


composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan migrate:status
npm install
npm run dev

php artisan make:migration add_user_id_to_posts_table

https://www.youtube.com/watch?v=gFAB9GKtxEs
