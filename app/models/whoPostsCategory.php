<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class whoPostsCategory extends Model
{
	//
	public function whoPosts()
	{
		return $this->hasMany(whoPost::class , "catID" , "id");
	}
}
