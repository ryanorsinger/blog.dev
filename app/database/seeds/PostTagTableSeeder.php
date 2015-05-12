<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTagTableSeeder extends Seeder {

	public function run()
	{
        DB::table('post_tag')->delete();

		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			DB::table('post_tag')->insert([
                'post_id' => Post::all()->random()->id,
                'tag_id'  => Tag::all()->random()->id
            ]);

		}
	}

}
