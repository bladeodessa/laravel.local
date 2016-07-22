<?php

namespace App\Providers;

use App\Comment;
use App\News;
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
        Comment::created(function ($comment) {
            News::find($comment->news_id)->increment('comments_count');
        });

        Comment::deleted(function ($comment) {
            News::find($comment->news_id)->decrement('comments_count');
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
