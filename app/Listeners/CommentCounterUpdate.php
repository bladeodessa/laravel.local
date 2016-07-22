<?php

namespace App\Listeners;

use App\Events\CommentAdd;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentCounterUpdate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CommentAdd  $event
     * @return void
     */
    public function handle(CommentAdd $event)
    {
        //
    }
}
