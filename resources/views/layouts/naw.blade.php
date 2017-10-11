<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link {{ (request()->path() == '/' || request()->path() == 'posts') ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
            <a class="nav-link {{ (request()->path() == 'posts/create') ? 'active' : ''}}" href="{{ url('posts/create') }}">New post</a>
            <a class="nav-link" href="#">About</a>
        </nav>
    </div>
</div>