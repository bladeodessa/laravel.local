<?php

namespace App\Observers;

use App\News;

class CommentObserver
{
    public function created($model)
    {
        News::find($model->news_id)->increment('comments_count');
    }

    public function deleted($model)
    {
        News::find($model->news_id)->decrement('comments_count');
    }
}