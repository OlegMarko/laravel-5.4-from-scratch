<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Tag;
use App\Post;
use App\PostTag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max_tags = 15;

        Tag::truncate();
        PostTag::truncate();

        factory(Tag::class, $max_tags)->create();

        $count_posts = Post::max('id');

        for ($i = 0; $i < $count_posts; $i++) {
            PostTag::insert([
                'post_id' => $i + 1,
                'tag_id' => mt_rand(1, $max_tags)
            ]);
        }
    }
}
