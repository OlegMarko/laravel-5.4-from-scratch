<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function($user) {
            factory(Post::class, mt_rand(1, 5))->create(['user_id' => $user->id,])
                ->each(function ($post) use ($user) {

                    if ($user->id > 1)
                        factory(Comment::class)->create([
                            'user_id' => $user->id - 1,
                            'post_id' => $post->id
                        ]);

                    factory(Comment::class)->create([
                        'user_id' => $user->id,
                        'post_id' => $post->id
                    ]);
                });
        });
    }
}
