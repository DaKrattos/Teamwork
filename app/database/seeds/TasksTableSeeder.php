<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Task::create([

			]);
		}
		*/
		DB::table('tasks')->delete();

		DB:: table('tasks')->insert(array()
			array('title'=>'Analisis','description'=>'Realizar Analisis','assignedTo'=>1,'duration'=>4,'initialDate'=>'2014-10-30','finalDate'=>'2014-10-31','completed'=>1),
			array('title'=>'Diseño','description'=>'Realizar Diseño','assignedTo'=>2,'duration'=>4,'initialDate'=>'2014-10-31','finalDate'=>'2014-11-01','completed'=>0),
			array('title'=>'Planeacion','description'=>'Realizar Planeacion','assignedTo'=>1,'duration'=>6,'initialDate'=>'2014-10-29','finalDate'=>'2014-10-29','completed'=>0),
			);
	}

}