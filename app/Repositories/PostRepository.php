<?php
/**
 * Created by PhpStorm.
 * User: oleg-m
 * Date: 12.10.17
 * Time: 12:22
 */

namespace App\Repositories;


use App\Post;

class PostRepository
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::findOrFail($id);
    }
}