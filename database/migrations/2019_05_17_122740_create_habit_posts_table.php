<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitPostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habit_posts' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('userID')->unsigned();
			$table->foreign('userID')->references('id')->on('users')->onDelete("cascade");
			$table->string('img');
			$table->string('title');
			$table->integer('type');
			$table->text('details');
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
		Schema::dropIfExists('habit_posts');
	}
}
