<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Comment;
use App\News;

class SendComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news-comment:create
                            {newsID : Comment ID}
                            {--comment= : Comment body}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a comment to news';

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
        $newsID = $this->argument('newsID');
        if (News::find($newsID)) {
            $commentOption = $this->option('comment');
            $userID = 1;   // Uprostil zadachu, priderjivayas TZ
            $comment = new Comment;
            $comment->news_id = $newsID;
            $comment->user_id = $userID;
            $comment->content = $commentOption;
            $comment->save();
            $insertedId = $comment->id;
            $this->info("Comment added! ID: $insertedId");
        } else {
            $this->error("NewsID: $newsID does not exists!");
        }
    }
}
