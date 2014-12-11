<?php

use cmsNico\Entities\User;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{

			User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password'  => \Hash::make(123456),
                'full_name'	 => $faker->name,
                'type'      => 'register',

			]);
		}
        User::create([
            'username' => 'nicolasvelah',
            'email' => 'nicolasvelah@gmail.com',
            'password'  => \Hash::make(123456),
            'full_name'	 => 'Nicolás Vela',
            'type'      => 'admin',

        ]);
	}

}