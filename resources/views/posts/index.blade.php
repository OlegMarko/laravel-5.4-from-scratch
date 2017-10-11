@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)
            <div class="blog-post">
                <a href="{{ url("/posts/{$post->id}") }}">
                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                </a>
                <p class="blog-post-meta">
                    {{ $post->created_at->diffForHumans() }} by
                    <a href="#">{{ $post->user->name }}</a>
                </p>

                <p>{!! $post->body !!}</p>
            </div><!-- /.blog-post -->
        @endforeach

        {{ $posts->links() }}

    </div><!-- /.blog-main -->

@endsection