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
        factory(Post::class, 10)->create()
            ->each(function ($post) {

                factory(Comment::class, mt_rand(1, 3))->create([
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'post_id' => $post->id
                ]);
            });
    }
}
