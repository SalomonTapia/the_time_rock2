<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DiscographiesTableSeeder extends Seeder {

	public function run()
	{
		$Discographies=array(['nombre'=>'Lithium','banda'=>'Nirvana','genero'=>'rock','url'=>'wwww.nirvana.com',
			'descripcion'=>'Está bien chido','imagen'=>'chida','created_at'=> new DateTime,'updated_at'=> new DateTime,
			'user_id'=>1]);

		DB::table('discographies')->insert($Discographies);
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Discography::create([

			]);
		}*/
	}

}