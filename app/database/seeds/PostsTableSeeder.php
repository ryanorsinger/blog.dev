<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('posts')->delete();

		$faker = Faker::create();

        for($i=1; $i<=10; $i++)
        {
            $post = new Post();
            $post->title = $faker->catchPhrase;
            $post->body  = $faker->realText;
            $post->user_id = mt_rand(1, 23);
            $post->slug = $faker->slug;
            $post->save();
        }
	}

}
