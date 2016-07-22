<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;

class DeleteComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news-comment:delete
                            {commentID : ID комментария}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete comment by ID';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $commentID = $this->argument('commentID');
        if ($comment = Comment::find($commentID)) {
            $comment->delete();
            $this->info("Comment deleted!");
        } else {
            $this->error("CommentID: $commentID does not exists!");
        }
    }
}
