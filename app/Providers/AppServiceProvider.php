<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['archives'] = Post::archives();
        $data['tags'] = Tag::has('posts')
            ->inRandomOrder()
            ->limit(3)
            ->pluck('name');

        view()->composer('layouts.sidebar', function ($view) use ($data) {
            $view->with($data);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
