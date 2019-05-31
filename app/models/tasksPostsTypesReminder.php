<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tasksPostsTypesReminder extends Model
{
	//
	public function tasksPostsTypes()
	{
		return $this->hasMany("tasksPostsType" , 'reminder' , 'id');
	}
}
