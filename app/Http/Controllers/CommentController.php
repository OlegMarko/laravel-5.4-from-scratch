<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

use App\Post;

class CommentController extends Controller
{
    public function store(CommentRequest $request, Post $post)
    {
        $post->addComment($request->body);

        return back();
    }
}
