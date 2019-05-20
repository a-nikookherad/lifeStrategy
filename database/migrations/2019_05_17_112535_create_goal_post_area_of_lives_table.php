<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalPostAreaOfLivesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goal_post_area_of_lives' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreign("id")->references("areaOfLife")->on("goal_posts")->onDelete("cascade");
			$table->string('title');
			$table->string('status' , 15);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('goal_post_area_of_lives');
	}
}
