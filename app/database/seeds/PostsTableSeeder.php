<?php

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('posts')->delete();

        $posts = new Post();
        $posts->user_id = '1';
        $posts->title = 'Posts';
        $posts->body = 'PostsTableSeeder';
        $posts->save();
	}
}