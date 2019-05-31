<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\User::class , function (Faker $faker) {
	return [
		//
		'name' => $faker->firstName ,
		'family' => $faker->lastName ,
		'mobile' => rand(1111 , 9999) ,
		'email' => $faker->safeEmail ,
		'email_verified_at' => now() ,
		'password' => Str::random(127) , // password
		'remember_token' => Str::random(80) , // password
		'created_at' => now() ,
		'updated_at' => now() ,
		'status' => "active" ,
	];
});
