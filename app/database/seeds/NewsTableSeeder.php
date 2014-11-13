<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		$News=array(['nom_noticia'=>'Post bien chido','desc_noticia'=>'Está bien chido','created_at'=> new DateTime,
			'updated_at'=> new DateTime,'user_id'=>1]);

		DB::table('news')->insert($News);
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			News::create([

			]);
		}*/
	}

}