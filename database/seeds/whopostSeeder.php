<?php

use App\models\whoPost;
use Illuminate\Database\Seeder;

class whopostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		factory(whoPost::class , 50)->create();
	}
}
