<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class whoPost extends Model
{
	//
	public function whoPostsCategory()
	{
		return $this->belongsTo(whoPostsCategory::class , "catID" , "id");
	}
}
