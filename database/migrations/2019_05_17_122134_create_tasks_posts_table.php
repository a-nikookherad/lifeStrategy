<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksPostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks_posts' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('userID')->unsigned();
			$table->foreign("userId")->references("id")->on("users")->onDelete("cascade");
			$table->string('img');
			$table->string('title');
			$table->integer('project');
			$table->integer('type');
			$table->text('details');
			$table->timestamps();
			$table->string('status' , 15)->default('active');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tasks_posts');
	}
}
