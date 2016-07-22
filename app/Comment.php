<?php

namespace App;
use App\Observers\CommentObserver;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public static function boot()
    {
        parent::boot();
        Comment::observe(new CommentObserver);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
