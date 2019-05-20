<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalPostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goal_posts' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('userID');
			$table->foreign("userID")->references("id")->on("users")->onDelete("cascade");
			$table->string('img');
			$table->string('title');
			$table->integer('areaOfLife');
			$table->dateTime('deadLine');
			$table->string('coreValue' , 127);
			$table->string('task' , 127);
			$table->string('habit' , 127);
			$table->text('details' , 127);
			$table->timestamps();
			$table->string('status' , 15);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('goal_posts');
	}
}
