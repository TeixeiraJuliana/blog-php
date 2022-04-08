
Batist
https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG

coments 
https://www.youtube.com/watch?v=V66VbP4p0Wc&list=PLVSNL1PHDWvSOFpHtRi1-oZjBll69lehn&index=4








Funcionou com erro mas enviou dado

$post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return Redirect::to('/');




  <div class="m-icons-up-del">
     <a href="posts/{{ $post->id }}"></a>
 </div>


composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan migrate:status
npm install
npm run dev

php artisan make:migration add_user_id_to_posts_table
