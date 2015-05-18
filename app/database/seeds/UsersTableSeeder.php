<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
        $this->addDeveloperAsUser();
        $this->addRandomUsers();
	}

    protected function addRandomUsers()
    {
        $faker = Faker::create();

        for($i=0; $i<=23; $i++)
        {
            $user = new User();
            $user->email                = $faker->email;
            $user->username             = $faker->userName;
            $user->password             = $faker->password;
            $user->first_name           = $faker->firstName;
            $user->last_name            = $faker->lastName;
            $user->save();
        }

    }

    protected function addDeveloperAsUser()
    {
        $user = new User();
        $user->email                = $_ENV['DEFAULT_USER_EMAIL'];
        $user->username             = $_ENV['DEFAULT_USER_USERNAME'];
        $user->password             = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->first_name           = $_ENV['DEFAULT_USER_FIRSTNAME'];
        $user->last_name            = $_ENV['DEFAULT_USER_LASTNAME'];
        $user->save();
    }

}

