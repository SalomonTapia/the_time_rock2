<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users=array(['usuario'=>'Alfonso','password'=>123,'conf_pass'=>123,'created_at' => new DateTime,'updated_at' => new DateTime]);
		DB::table('users')->insert($users);
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([

			]);
		}*/
	}

}