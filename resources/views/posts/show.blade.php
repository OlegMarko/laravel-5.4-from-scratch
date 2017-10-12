@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>

            @if(count($post->tags))
                <ul>
                    @foreach($post->tags as $tag)
                        <li class="btn btn-default">
                            <a href="{{ url("posts/tags/{$tag->name}") }}">
                                {{ $tag->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif

            <p>{!! $post->body !!}</p>
        </div><!-- /.blog-post -->

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }} by <a href="#">{{ $comment->user->name }}</a>
                        </strong>
                        <br>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div class="panel panel-default">
            <div class="panel-body">
                <form action="{{ url("posts/{$post->id}/comments") }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here ..." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add a comment</button>
                    </div>

                    <div class="form-group">
                        @include('layouts.errors')
                    </div>
                </form>
            </div>
        </div>

    </div><!-- /.blog-main -->

@endsection