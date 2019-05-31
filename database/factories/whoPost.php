<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\whoPost;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(whoPost::class , function (Faker $faker) {
	return [
		'userID' => $faker->numberBetween(1 , 50) ,
		'img' => $faker->lastName ,
		'title' => $faker->name ,
		'catID' => rand(2 , 7) ,
		'description' => Str::random(255) , // password
		'status' => "active" ,
		'created_at' => now() ,
		'updated_at' => now() ,
	];
});
