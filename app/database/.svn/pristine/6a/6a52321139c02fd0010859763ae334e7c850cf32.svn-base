<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$admons =[
			[
				"first_name" => "Carlos",
				"last_name"	=> "Haas",
				"email"		=> "chaas@denacom.com"
			],
			[
				"first_name" => "Roberto",
				"last_name"	=> "Barcenas",
				"email"		=> "rbarcenas@denacom.com"
			],
			[
				"first_name" => "Patricia",
				"last_name"	=> "Ortega",
				"email"		=> "portega@denacom.com"
			],
			[
				"first_name" => "Miguel",
				"last_name"	=> "Martinez",
				"email"		=> "mmartinez@denacom.com"
			],
		];

		foreach ($admons as $user) {

            Users::create([
                'first_name'    => $user["first_name"],
                'last_name'     => $user["last_name"],
                'sex'           => $faker->randomElement(['Male','Female']),
                'email'         => $user["email"],
                'id_roles'		=> 2,
                'password'      => "123456"
			]);
			# code...
		}

		foreach(range(1, 100) as $index)
		{

            Users::create([
                'first_name'    => $faker->name,
                'last_name'     => $faker->lastName,
                'sex'           => $faker->randomElement(['Male','Female']),
                'email'         => $faker->email,
                'id_roles'		=> 1,
                'password'      => "123456",
			]);
		}
	}

}