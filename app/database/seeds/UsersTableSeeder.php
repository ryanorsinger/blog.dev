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
            $user->email =      $faker->email;
            $user->username =   $faker->userName;
            $user->password =   $faker->password;
            $user->first_name = $faker->firstName;
            $user->last_name =  $faker->lastName;
            $user->save();
        }

    }

    protected function addDeveloperAsUser()
    {
        $user = new User();
        $user->username = $_ENV['DEFAULT_USER']['USERNAME'];
        $user->email = $_ENV['DEFAULT_USER']['EMAIL'];
        $user->password = $_ENV['DEFAULT_USER']['PASSWORD'];
        $user->first_name = $_ENV['DEFAULT_USER']['FIRSTNAME'];
        $user->last_name = $_ENV['DEFAULT_USER']['LASTNAME'];
        $user->save();
    }

}

