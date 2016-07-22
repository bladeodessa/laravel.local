<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        DB::table('news')->insert([
            'title' => 'First News',
            'slug' => 'first-news',
            'excerpt' => 'First News body',
            'content' => 'Content First News body',
            'user_id' => 1,
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('news')->insert([
            'title' => 'Second News',
            'slug' => 'second-news',
            'excerpt' => 'Second News body',
            'content' => 'Content Second News body',
            'user_id' => 1,
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('news')->insert([
            'title' => 'Third News',
            'slug' => 'third-news',
            'excerpt' => 'Third News body',
            'content' => 'Content Third News body',
            'user_id' => 1,
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
