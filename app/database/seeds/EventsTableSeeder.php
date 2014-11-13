<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$Events=array(['nom_evento'=>'Post bien chido','lugar'=>'Detroy','desc_evento'=>'Está bien chido',
			'created_at'=> new DateTime,'updated_at'=> new DateTime,'user_id'=>1]);

		DB::table('events')->insert($Events);
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Event::create([

			]);
		}*/
	}

}