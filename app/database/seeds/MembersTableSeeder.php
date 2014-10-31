<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MembersTableSeeder extends Seeder {
	
	public function run()
	{
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Member::create([

			]);
		}
		*/
		DB::table('members')->delete();

		DB:: table('members')->insert(array()
			array('firstname'=>'Jhonnathan','lastname'=>'Gutierrez','email'=>'jgutierrez@fakemail.com'),
			array('firstname'=>'Andres','lastname'=>'De la Ossa','email'=>'adelaossa@fakemail.com'),
			array('firstname'=>'Jorge','lastname'=>'Madero','email'=>'jmadero@fakemail.com'),
			);
	}

}